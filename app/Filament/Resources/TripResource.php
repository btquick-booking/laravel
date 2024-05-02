<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TripResource\Pages;
use App\Models\Trip;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class TripResource extends Resource
{
    protected static ?string $model = Trip::class;

    protected static ?string $navigationIcon = 'heroicon-o-inbox';

    protected static ?string $navigationGroup = 'Bus ticket';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Information Trip  ')

                    ->schema([
                        Forms\Components\TextInput::make('Starting_place')
                            ->required(),
                        Forms\Components\TextInput::make('Destination_place')
                            ->required(),
                        Forms\Components\DatePicker::make('date')
                            ->required(),
                        Forms\Components\TextInput::make('starting_time')
                            ->required(),
                        Forms\Components\TextInput::make('Access_time')
                            ->required(),
                        Forms\Components\TextInput::make('Driver_name')
                            ->required(),
                        Forms\Components\TextInput::make('Number_of_seat')
                            ->required()
                            ->numeric(),
                        Forms\Components\Textarea::make('Details')
                            ->required()
                            ->columnSpanFull(),
                        Forms\Components\TextInput::make('Trip_price')
                            ->required()
                            ->numeric(),
                        Forms\Components\Select::make('company_id')
                            ->relationship('company', 'id')
                            ->required(),
                    ]),
            ]);
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
                Tables\Columns\TextColumn::make('starting_time')
                    ->time(),
                Tables\Columns\TextColumn::make('Access_time')
                    ->time(),
                Tables\Columns\TextColumn::make('Driver_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Number_of_seat')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('Trip_price')
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
                Tables\Actions\ViewAction::make(),
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
            // 'create' => Pages\CreateTrip::route('/create'),
            // 'edit' => Pages\EditTrip::route('/{record}/edit'),
        ];
    }
}
