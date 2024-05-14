<?php

namespace App\Filament\Company\Resources;

use Illuminate\Database\Eloquent\Builder;
use App\Filament\Company\Resources\BookResource\Pages;
use App\Models\Book;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class BookResource extends Resource
{
    protected static ?string $model = Book::class;
    protected static ?string $navigationGroup = 'System Management';
    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    protected static ?string $pluralModelLabel = 'Booking';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Information Customer  ')
                    ->schema([
                        Forms\Components\TextInput::make('FullName')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('MotherName')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('FatherName')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('ID_Number')
                            ->required()
                            ->numeric(),
                        Forms\Components\DatePicker::make('Birth_date')
                            ->required(),
                        Forms\Components\Select::make('Gander')
                            ->options([
                                'Male' => 'Male',
                                'Female' => 'Female',

                            ])
                            ->required(),

                        Forms\Components\Select::make('trip_id')
                            ->relationship('trip', 'Starting_place')
                            ->getOptionLabelFromRecordUsing(fn ($record) => "{$record->Starting_place} -> {$record->Destination_place}")
                            ->required(),
                        // Forms\Components\Hidden::make('customer_id')->default(auth()->user()->customer->id),
                        // Forms\Components\Select::make('customer_id')
                        //     ->relationship('customer', 'id')
                        //     ->required(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('FullName')
                    ->searchable(),
                Tables\Columns\TextColumn::make('MotherName')
                    ->searchable(),
                Tables\Columns\TextColumn::make('FatherName')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ID_Number')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('Birth_date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('trip.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('customer.id')
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

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->whereHas('Trip', fn ($q) =>
        $q->whereHas('bus', fn ($q) => $q->where('company_id', auth()->user()->company->id)));
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBooks::route('/'),
            'create' => Pages\CreateBook::route('/create'),
            'edit' => Pages\EditBook::route('/{record}/edit'),
        ];
    }
}
