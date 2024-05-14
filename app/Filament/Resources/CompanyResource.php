<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CompanyResource\Pages;
use App\Models\Company;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class CompanyResource extends Resource
{
    protected static ?string $model = Company::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'System Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('Company_Name')
                    ->required(),
                Forms\Components\TextInput::make('Company_Director')
                    ->required(),
                Forms\Components\TextInput::make('phone_number')
                    ->tel()
                    ->required()
                    ->numeric(),
                Forms\Components\Select::make('user_id')
                    ->hiddenOn('edit')
                    ->relationship('user', 'email', fn ($query) => $query->doesntHave('company')->doesntHave('admin'))
                    ->createOptionForm([
                        Forms\Components\TextInput::make('email')
                            ->label('Email')
                            ->required(),
                        Forms\Components\TextInput::make('password')
                            ->label('Password')
                            ->hiddenOn('edit')
                            ->password()
                            ->required(),
                        Forms\Components\Hidden::make('name')->default('company'),
                    ]),
                Forms\Components\Fieldset::make('General info')
                    ->relationship('CompanyProfiles')
                    ->schema([
                        Forms\Components\FileUpload::make('image')
                            ->image()
                            ->imageEditor()
                            ->required(),
                        Forms\Components\TextInput::make('address')
                            ->required(),
                        Forms\Components\TextInput::make('details')
                            ->required(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('Company_Name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Company_Director')
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone_number')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('user.email')
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
            'index' => Pages\ListCompanies::route('/'),
            'create' => Pages\CreateCompany::route('/create'),
            'edit' => Pages\EditCompany::route('/{record}/edit'),
        ];
    }
}
