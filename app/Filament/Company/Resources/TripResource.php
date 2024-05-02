<?php

namespace App\Filament\Company\Resources;

use App\Filament\Company\Resources\TripResource\Pages;
use App\Models\Bus;
use App\Models\Trip;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class TripResource extends Resource
{
    protected static ?string $model = Trip::class;

    protected static ?string $navigationIcon = 'heroicon-o-inbox';

    protected static ?string $navigationGroup = 'System Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Information Trip  ')

                    ->schema([
                        Forms\Components\Select::make('Starting_place')
                            ->options([
                                'Damascus' => 'Damascus',
                                'Homs' => 'Homs',
                                'Daraa' => 'Daraa',
                                'Latakia' => 'Latakia',
                                'Aleppo' => 'Aleppo',
                                'Hama' => 'Hama',
                                'Tartous' => 'Tartous',
                                'Quneitra' => 'Quneitra',
                                'Tadmur' => 'Tadmur',
                                'Al-Hasakah' => 'Al-Hasakah',
                                'As-Suwayda' => 'As-Suwayda',
                                'Deir ez-Zor' => 'Deir ez-Zor',
                                'Idlib' => 'Idlib',
                                'Rif Dimashq' => 'Rif Dimashq',
                                'Ar-Raqqah' => 'Ar-Raqqah',
                            ])
                            ->required(),
                        Forms\Components\Select::make('Destination_place')
                            ->options([
                                'Damascus' => 'Damascus',
                                'Homs' => 'Homs',
                                'Daraa' => 'Daraa',
                                'Latakia' => 'Latakia',
                                'Aleppo' => 'Aleppo',
                                'Hama' => 'Hama',
                                'Tartous' => 'Tartous',
                                'Quneitra' => 'Quneitra',
                                'Tadmur' => 'Tadmur',
                                'Al-Hasakah' => 'Al-Hasakah',
                                'As-Suwayda' => 'As-Suwayda',
                                'Deir ez-Zor' => 'Deir ez-Zor',
                                'Idlib' => 'Idlib',
                                'Rif Dimashq' => 'Rif Dimashq',
                                'Ar-Raqqah' => 'Ar-Raqqah',
                            ])
                            ->required(),
                        Forms\Components\DatePicker::make('date')
                            ->required(),
                        Forms\Components\TimePicker::make('starting_time')
                            ->seconds(false)
                            ->required(),
                        Forms\Components\TimePicker::make('Access_time')
                            ->seconds(false)
                            ->required(),
                        Forms\Components\TextInput::make('Driver_name')
                            ->required(),
                        // Forms\Components\TextInput::make('Number_of_seat')
                        // ->disabled()
                        //     ->required()
                        //     ->numeric(),
                        Forms\Components\Textarea::make('Details')
                            ->required()
                            ->columnSpanFull(),
                        Forms\Components\TextInput::make('Trip_price')
                            ->required()
                            ->numeric(),
                        //          Forms\Components\Hidden::make('company_id')->default(auth()->user()->company->id),
                        Forms\Components\Select::make('bus_id')
                            ->live()
                            ->afterStateUpdated(function (Forms\Set $set, $state) {
                                $bus = Bus::find($state);
                                $set('Number_of_seat', $bus->Seat_Capacity);
                            })
                            ->relationship('bus', 'Code', fn ($query) => $query->where('company_id', auth()->user()->company->id))
                            ->required(),
                    ]),
            ]);
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->whereHas('bus', fn ($q) => $q->where('company_id', auth()->user()->company->id));
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('Starting_place')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Destination_place')
                    ->searchable(),
                Tables\Columns\TextColumn::make('date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('starting_time'),
                Tables\Columns\TextColumn::make('Access_time'),
                Tables\Columns\TextColumn::make('Driver_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Number_of_seat')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('Trip_price')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('bus.Code')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTrips::route('/'),
            'create' => Pages\CreateTrip::route('/create'),
            'edit' => Pages\EditTrip::route('/{record}/edit'),
        ];
    }
}
