<?php

namespace App\Filament\Resources\HobbyPhotos\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class HobbyPhotoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('image')
                    ->image()
                    ->disk(config('filesystems.default'))
                    ->required(),
                TextInput::make('sort_order')
                    ->label('Order')
                    ->required()
                    ->numeric()
                    ->default(0)
                    ->helperText('Lower number appears first.'),
            ]);
    }
}
