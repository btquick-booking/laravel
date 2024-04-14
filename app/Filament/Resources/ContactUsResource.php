<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactUsResource\Pages;
use App\Filament\Resources\ContactUsResource\RelationManagers;
use App\Models\ContactUs;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ContactUsResource extends Resource
{
    protected static ?string $model = ContactUs::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Contact Us';

    protected static ?string $pluralModelLabel = 'Contact Us';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                ->required(),
                Forms\Components\TextInput::make('email')
                ->required(),
                Forms\Components\TextInput::make('message')
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                ->searchable(),
                Tables\Columns\TextColumn::make('email')
                ->numeric()
                ->sortable(),
                Tables\Columns\TextColumn::make('message')
                ->searchable(),
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
            'index' => Pages\ListContactUs::route('/'),
         //   'create' => Pages\CreateContactUs::route('/create'),
          //  'edit' => Pages\EditContactUs::route('/{record}/edit'),
        ];
    }
}
