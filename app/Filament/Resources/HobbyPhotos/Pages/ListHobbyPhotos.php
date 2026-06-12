<?php

namespace App\Filament\Resources\HobbyPhotos\Pages;

use App\Filament\Resources\HobbyPhotos\HobbyPhotoResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListHobbyPhotos extends ListRecords
{
    protected static string $resource = HobbyPhotoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
