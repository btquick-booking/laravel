<?php

namespace App\Filament\Company\Resources\BookResource\Pages;

use App\Filament\Company\Resources\BookResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBook extends EditRecord
{
    protected static string $resource = BookResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
