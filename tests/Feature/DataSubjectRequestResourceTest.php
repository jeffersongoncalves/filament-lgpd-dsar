<?php

use Illuminate\Support\Facades\Storage;
use JeffersonGoncalves\Filament\LgpdDsar\LgpdDsarPlugin;
use JeffersonGoncalves\Filament\LgpdDsar\Resources\DataSubjectRequests\DataSubjectRequestResource;
use JeffersonGoncalves\Filament\LgpdDsar\Resources\DataSubjectRequests\Pages\CreateDataSubjectRequest;
use JeffersonGoncalves\Filament\LgpdDsar\Resources\DataSubjectRequests\Pages\ListDataSubjectRequests;
use JeffersonGoncalves\Filament\LgpdDsar\Resources\DataSubjectRequests\Pages\ViewDataSubjectRequest;
use JeffersonGoncalves\Filament\LgpdDsar\Tests\Fixtures\TestUser;
use JeffersonGoncalves\LgpdDsar\Enums\RequestStatus;
use JeffersonGoncalves\LgpdDsar\Enums\RequestType;
use JeffersonGoncalves\LgpdDsar\Facades\LgpdDsar;
use JeffersonGoncalves\LgpdDsar\Models\DataSubjectRequest;
use Livewire\Livewire;

beforeEach(function () {
    $this->admin = TestUser::create(['name' => 'Admin', 'email' => 'admin@example.com']);
    $this->subject = TestUser::create(['name' => 'Maria', 'email' => 'maria@example.com']);

    $this->actingAs($this->admin);
});

function verifiedRequest(RequestType $type): DataSubjectRequest
{
    return LgpdDsar::verify(LgpdDsar::open($type, test()->subject), test()->subject);
}

it('opens a request with the legal deadline', function () {
    $this->freezeSecond();

    Livewire::test(CreateDataSubjectRequest::class)
        ->fillForm(['type' => 'access', 'requester_name' => 'Maria', 'requester_email' => 'maria@example.com'])
        ->call('create')
        ->assertHasNoFormErrors();

    $request = DataSubjectRequest::sole();

    expect($request->type)->toBe(RequestType::Access)
        ->and($request->status)->toBe(RequestStatus::Pending)
        ->and($request->due_at->equalTo(now()->addDays(15)))->toBeTrue();
});

it('lists requests and filters the overdue ones', function () {
    $overdue = LgpdDsar::open(RequestType::Access);
    $this->travel(16)->days();
    $onTime = LgpdDsar::open(RequestType::Deletion);

    Livewire::test(ListDataSubjectRequests::class)
        ->assertCanSeeTableRecords([$overdue, $onTime])
        ->filterTable('overdue')
        ->assertCanSeeTableRecords([$overdue])
        ->assertCanNotSeeTableRecords([$onTime]);

    expect(DataSubjectRequestResource::getNavigationBadge())->toBe('2')
        ->and(DataSubjectRequestResource::getNavigationBadgeColor())->toBe('danger');
});

it('verifies the requester and links the data subject', function () {
    $request = LgpdDsar::open(RequestType::Access);

    Livewire::test(ViewDataSubjectRequest::class, ['record' => $request->getKey()])
        ->assertActionHidden('fulfil')
        ->callAction('verify', ['subject_type' => TestUser::class, 'subject_id' => $this->subject->getKey()])
        ->assertHasNoActionErrors();

    $request->refresh();

    expect($request->isVerified())->toBeTrue()
        ->and($request->subject?->is($this->subject))->toBeTrue();
});

it('does not verify against an unknown record', function () {
    $request = LgpdDsar::open(RequestType::Access);

    Livewire::test(ViewDataSubjectRequest::class, ['record' => $request->getKey()])
        ->callAction('verify', ['subject_type' => TestUser::class, 'subject_id' => 999]);

    expect($request->fresh()->isVerified())->toBeFalse();
});

it('fulfils an access request and offers the export', function () {
    Storage::fake('local');
    $request = verifiedRequest(RequestType::Access);

    Livewire::test(ViewDataSubjectRequest::class, ['record' => $request->getKey()])
        ->callAction('fulfil')
        ->assertActionVisible('download')
        ->callAction('download')
        ->assertFileDownloaded("request-{$request->getKey()}.json");

    expect($request->fresh()->status)->toBe(RequestStatus::Completed);
    Storage::disk('local')->assertExists("lgpd/dsar/request-{$request->getKey()}.json");
});

it('erases the data subject on a deletion request', function () {
    $request = verifiedRequest(RequestType::Deletion);

    Livewire::test(ViewDataSubjectRequest::class, ['record' => $request->getKey()])
        ->callAction('fulfil');

    expect($this->subject->fresh()->name)->toBe('M****')
        ->and($request->fresh()->status)->toBe(RequestStatus::Completed);
});

it('completes manual rights with a response and rejects with a reason', function () {
    $manual = LgpdDsar::open(RequestType::Correction);
    $rejected = LgpdDsar::open(RequestType::Access);

    Livewire::test(ViewDataSubjectRequest::class, ['record' => $manual->getKey()])
        ->assertActionHidden('fulfil')
        ->callAction('complete', ['response' => 'Address fixed.']);

    Livewire::test(ViewDataSubjectRequest::class, ['record' => $rejected->getKey()])
        ->callAction('reject', ['reason' => ''])
        ->assertHasActionErrors(['reason' => 'required']);

    Livewire::test(ViewDataSubjectRequest::class, ['record' => $rejected->getKey()])
        ->callAction('reject', ['reason' => 'Identity not confirmed.']);

    expect($manual->fresh())->status->toBe(RequestStatus::Completed)->response->toBe('Address fixed.')
        ->and($rejected->fresh())->status->toBe(RequestStatus::Rejected)->response->toBe('Identity not confirmed.');

    Livewire::test(ViewDataSubjectRequest::class, ['record' => $manual->getKey()])
        ->assertActionHidden('verify')
        ->assertActionHidden('complete')
        ->assertActionHidden('reject');
});

it('offers the same actions on the table rows', function () {
    $request = LgpdDsar::open(RequestType::Access);

    Livewire::test(ListDataSubjectRequests::class)
        ->assertTableActionHidden('fulfil', $request)
        ->callTableAction('reject', $request, ['reason' => 'Duplicate.']);

    expect($request->fresh()->status)->toBe(RequestStatus::Rejected);
});

it('registers the resource with the fluent plugin options', function () {
    $plugin = LgpdDsarPlugin::get()->navigationGroup('LGPD')->slug('dsar')->subjectModels([TestUser::class]);

    expect(DataSubjectRequestResource::getNavigationGroup())->toBe('LGPD')
        ->and(DataSubjectRequestResource::getSlug())->toBe('dsar')
        ->and($plugin->getSubjectModels())->toBe([TestUser::class])
        ->and(__('filament-lgpd-dsar::filament-lgpd-dsar.resource.plural_label'))->toBe('Data subject requests');
});
