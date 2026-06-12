<?php

namespace App\Filament\Resources\Education\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class EducationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('period')
                    ->label('Time Period')
                    ->required(),
                TextInput::make('school')
                    ->label('School Name')
                    ->required(),
                TextInput::make('degree')
                    ->label('Certificate')
                    ->required(),
                FileUpload::make('image')
                    ->label('Campus Photo')
                    ->image()
                    ->disk(config('filesystems.default'))
                    ->required(),
                FileUpload::make('logo')
                    ->label('School Logo')
                    ->image()
                    ->disk(config('filesystems.default'))
                    ->required(),
                TextInput::make('link')
                    ->label('School Website')
                    ->url()
                    ->placeholder('https://'),
                TextInput::make('sort_order')
                    ->label('Order')
                    ->required()
                    ->numeric()
                    ->default(0)
                    ->helperText('Lower number appears first.'),
            ]);
    }
}
