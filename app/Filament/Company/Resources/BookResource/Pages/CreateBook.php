<?php

namespace App\Filament\Company\Resources\BookResource\Pages;

use App\Filament\Company\Resources\BookResource;
use Filament\Resources\Pages\CreateRecord;

class CreateBook extends CreateRecord
{
    protected static string $resource = BookResource::class;
}
