<?php

namespace App\Filament\Company\Pages;

use Filament\Pages\Auth\EditProfile as AuthEditProfile;
use Filament\Forms;
use Filament\Forms\Form;
use Illuminate\Database\Eloquent\Model;

final class EditProfile extends AuthEditProfile
{
    protected function hasFullWidthFormActions(): bool
    {
        return true;
    }

    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $record->update($data);

        $record->company->update($data);

        $record->company->CompanyProfiles->update($data);

        return $record;
    }

    protected function fillForm(): void
    {
        $user = $this->getUser();
        $data = $user->attributesToArray();
        $company = $user->company;
        $profile = $company->CompanyProfiles;

        $this->callHook('beforeFill');

        $data = $this->mutateFormDataBeforeFill($data);

        $data['Company_Name'] = $company->Company_Name;
        $data['Company_Director'] = $company->Company_Director;
        $data['phone_number'] = $company->phone_number;
        $data['image'] = $profile->image;
        $data['address'] = $profile->address;
        $data['details'] = $profile->details;

        $this->form->fill($data);

        $this->callHook('afterFill');
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('image')
                    ->required()
                    ->image()
                    ->imageEditor(),
                Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\Tabs::make()
                            ->contained(false)
                            ->tabs([
                                Forms\Components\Tabs\Tab::make('Account')

                                    ->schema([
                                        $this->getEmailFormComponent(),
                                        $this->getPasswordFormComponent(),
                                        $this->getPasswordConfirmationFormComponent(),
                                    ]),
                                Forms\Components\Tabs\Tab::make('General info')
                                    ->schema([
                                        Forms\Components\TextInput::make('Company_Name')
                                            ->required()
                                            ->maxLength(255)
                                            ->autofocus(),
                                        Forms\Components\TextInput::make('Company_Director')
                                            ->maxLength(255)
                                            ->required(),
                                        Forms\Components\TextInput::make('phone_number')
                                            ->maxLength(255)
                                            ->required()
                                            ->tel(),
                                        Forms\Components\TextInput::make('address')

                                            ->required(),
                                        Forms\Components\TextInput::make('details')
                                            ->columnSpanFull()
                                            ->required(),

                                    ])
                                    ->columns(2),
                            ]),
                    ]),
            ]);
    }
}
