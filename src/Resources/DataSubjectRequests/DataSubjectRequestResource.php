<?php

namespace JeffersonGoncalves\Filament\LgpdDsar\Resources\DataSubjectRequests;

use BackedEnum;
use Filament\Actions\ActionGroup;
use Filament\Actions\ViewAction;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Infolists\Components\TextEntry;
use Filament\Panel;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use JeffersonGoncalves\Filament\LgpdDsar\Actions\DsarActions;
use JeffersonGoncalves\Filament\LgpdDsar\LgpdDsarPlugin;
use JeffersonGoncalves\Filament\LgpdDsar\Resources\DataSubjectRequests\Pages\CreateDataSubjectRequest;
use JeffersonGoncalves\Filament\LgpdDsar\Resources\DataSubjectRequests\Pages\ListDataSubjectRequests;
use JeffersonGoncalves\Filament\LgpdDsar\Resources\DataSubjectRequests\Pages\ViewDataSubjectRequest;
use JeffersonGoncalves\Filament\LgpdDsar\Support\Labels;
use JeffersonGoncalves\LgpdDsar\Models\DataSubjectRequest;

class DataSubjectRequestResource extends Resource
{
    protected static ?string $model = DataSubjectRequest::class;

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->columns(1)
            ->components([
                Select::make('type')
                    ->label(__('filament-lgpd-dsar::filament-lgpd-dsar.fields.type'))
                    ->options(Labels::types())
                    ->required(),
                TextInput::make('requester_name')
                    ->label(__('filament-lgpd-dsar::filament-lgpd-dsar.fields.requester_name'))
                    ->maxLength(255),
                TextInput::make('requester_email')
                    ->label(__('filament-lgpd-dsar::filament-lgpd-dsar.fields.requester_email'))
                    ->email()
                    ->maxLength(255),
                Textarea::make('details')
                    ->label(__('filament-lgpd-dsar::filament-lgpd-dsar.fields.details')),
            ]);
    }

    public static function infolist(Schema $schema): Schema
    {
        return $schema
            ->columns(1)
            ->components([
                Section::make()
                    ->columns(2)
                    ->schema([
                        TextEntry::make('type')
                            ->label(__('filament-lgpd-dsar::filament-lgpd-dsar.fields.type'))
                            ->formatStateUsing(fn (BackedEnum $state): string => Labels::type($state->value)),
                        TextEntry::make('status')
                            ->label(__('filament-lgpd-dsar::filament-lgpd-dsar.fields.status'))
                            ->formatStateUsing(fn (BackedEnum $state): string => Labels::status($state->value))
                            ->badge()
                            ->color(fn (BackedEnum $state): string => Labels::statusColor($state->value)),
                        TextEntry::make('requester_name')
                            ->label(__('filament-lgpd-dsar::filament-lgpd-dsar.fields.requester_name'))
                            ->placeholder('-'),
                        TextEntry::make('requester_email')
                            ->label(__('filament-lgpd-dsar::filament-lgpd-dsar.fields.requester_email'))
                            ->placeholder('-'),
                        TextEntry::make('subject')
                            ->label(__('filament-lgpd-dsar::filament-lgpd-dsar.fields.subject'))
                            ->state(fn (DataSubjectRequest $record): ?string => Labels::subject($record))
                            ->placeholder('-'),
                        TextEntry::make('due_at')
                            ->label(__('filament-lgpd-dsar::filament-lgpd-dsar.fields.due_at'))
                            ->dateTime()
                            ->color(fn (DataSubjectRequest $record): ?string => static::isOverdue($record) ? 'danger' : null),
                        TextEntry::make('verified_at')
                            ->label(__('filament-lgpd-dsar::filament-lgpd-dsar.fields.verified_at'))
                            ->dateTime()
                            ->placeholder('-'),
                        TextEntry::make('completed_at')
                            ->label(__('filament-lgpd-dsar::filament-lgpd-dsar.fields.completed_at'))
                            ->dateTime()
                            ->placeholder('-'),
                        TextEntry::make('details')
                            ->label(__('filament-lgpd-dsar::filament-lgpd-dsar.fields.details'))
                            ->placeholder('-')
                            ->columnSpanFull(),
                        TextEntry::make('response')
                            ->label(__('filament-lgpd-dsar::filament-lgpd-dsar.fields.response'))
                            ->placeholder('-')
                            ->columnSpanFull(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->label('#')
                    ->sortable(),
                TextColumn::make('type')
                    ->label(__('filament-lgpd-dsar::filament-lgpd-dsar.fields.type'))
                    ->formatStateUsing(fn (BackedEnum $state): string => Labels::type($state->value)),
                TextColumn::make('requester_name')
                    ->label(__('filament-lgpd-dsar::filament-lgpd-dsar.fields.requester_name'))
                    ->description(fn (DataSubjectRequest $record): ?string => $record->getAttribute('requester_email'))
                    ->searchable(['requester_name', 'requester_email'])
                    ->placeholder('-'),
                TextColumn::make('status')
                    ->label(__('filament-lgpd-dsar::filament-lgpd-dsar.fields.status'))
                    ->formatStateUsing(fn (BackedEnum $state): string => Labels::status($state->value))
                    ->badge()
                    ->color(fn (BackedEnum $state): string => Labels::statusColor($state->value)),
                IconColumn::make('verified')
                    ->label(__('filament-lgpd-dsar::filament-lgpd-dsar.fields.verified'))
                    ->state(fn (DataSubjectRequest $record): bool => $record->isVerified())
                    ->boolean(),
                TextColumn::make('due_at')
                    ->label(__('filament-lgpd-dsar::filament-lgpd-dsar.fields.due_at'))
                    ->date()
                    ->sortable()
                    ->color(fn (DataSubjectRequest $record): ?string => static::isOverdue($record) ? 'danger' : null),
                TextColumn::make('created_at')
                    ->label(__('filament-lgpd-dsar::filament-lgpd-dsar.fields.created_at'))
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('due_at')
            ->filters([
                SelectFilter::make('status')
                    ->label(__('filament-lgpd-dsar::filament-lgpd-dsar.fields.status'))
                    ->options(Labels::statuses()),
                SelectFilter::make('type')
                    ->label(__('filament-lgpd-dsar::filament-lgpd-dsar.fields.type'))
                    ->options(Labels::types()),
                Filter::make('overdue')
                    ->label(__('filament-lgpd-dsar::filament-lgpd-dsar.filters.overdue'))
                    ->query(fn (Builder $query): Builder => $query->scopes('overdue')),
            ])
            ->recordActions([
                ViewAction::make(),
                ActionGroup::make(DsarActions::all()),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListDataSubjectRequests::route('/'),
            'create' => CreateDataSubjectRequest::route('/create'),
            'view' => ViewDataSubjectRequest::route('/{record}'),
        ];
    }

    public static function getModelLabel(): string
    {
        return __('filament-lgpd-dsar::filament-lgpd-dsar.resource.label');
    }

    public static function getPluralModelLabel(): string
    {
        return __('filament-lgpd-dsar::filament-lgpd-dsar.resource.plural_label');
    }

    public static function getNavigationGroup(): ?string
    {
        return LgpdDsarPlugin::get()->getNavigationGroup();
    }

    public static function getNavigationSort(): ?int
    {
        return LgpdDsarPlugin::get()->getNavigationSort();
    }

    public static function getNavigationIcon(): string|BackedEnum|null
    {
        return LgpdDsarPlugin::get()->getNavigationIcon();
    }

    public static function getSlug(?Panel $panel = null): string
    {
        return LgpdDsarPlugin::get()->getSlug();
    }

    public static function getNavigationBadge(): ?string
    {
        $open = DataSubjectRequest::query()->scopes('open')->count();

        return $open > 0 ? (string) $open : null;
    }

    public static function getNavigationBadgeColor(): ?string
    {
        return DataSubjectRequest::query()->scopes('overdue')->exists() ? 'danger' : 'warning';
    }

    protected static function isOverdue(DataSubjectRequest $record): bool
    {
        return $record->isOpen() && $record->due_at->isPast();
    }
}
