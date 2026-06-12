<?php

namespace App\Filament\Resources\HobbyPhotos\Pages;

use App\Filament\Resources\HobbyPhotos\HobbyPhotoResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditHobbyPhoto extends EditRecord
{
    protected static string $resource = HobbyPhotoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
