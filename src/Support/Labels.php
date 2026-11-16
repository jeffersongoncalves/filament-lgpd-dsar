<?php

namespace JeffersonGoncalves\Filament\LgpdDsar\Support;

use Illuminate\Database\Eloquent\Model;
use JeffersonGoncalves\LgpdDsar\Enums\RequestStatus;
use JeffersonGoncalves\LgpdDsar\Enums\RequestType;
use JeffersonGoncalves\LgpdDsar\Models\DataSubjectRequest;

class Labels
{
    /**
     * @return array<string, string>
     */
    public static function types(): array
    {
        return collect(RequestType::cases())->mapWithKeys(fn (RequestType $type): array => [$type->value => static::type($type->value)])->all();
    }

    public static function type(string $type): string
    {
        return __("filament-lgpd-dsar::filament-lgpd-dsar.type.{$type}");
    }

    /**
     * @return array<string, string>
     */
    public static function statuses(): array
    {
        return collect(RequestStatus::cases())->mapWithKeys(fn (RequestStatus $status): array => [$status->value => static::status($status->value)])->all();
    }

    public static function status(string $status): string
    {
        return __("filament-lgpd-dsar::filament-lgpd-dsar.status.{$status}");
    }

    public static function statusColor(string $status): string
    {
        return match ($status) {
            RequestStatus::Completed->value => 'success',
            RequestStatus::Rejected->value => 'danger',
            default => 'warning',
        };
    }

    public static function subject(DataSubjectRequest $record): ?string
    {
        $type = $record->getAttribute('subject_type');

        if (! is_string($type)) {
            return null;
        }

        return class_basename(Model::getActualClassNameForMorph($type)).' #'.$record->getAttribute('subject_id');
    }
}
