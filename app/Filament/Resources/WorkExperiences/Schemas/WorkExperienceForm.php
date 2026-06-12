<?php

namespace App\Filament\Resources\WorkExperiences\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class WorkExperienceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('period')
                    ->label('Time Period')
                    ->required(),
                TextInput::make('role')
                    ->required(),
                TextInput::make('company')
                    ->required(),
                Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
                Select::make('gradient_color')
                    ->label('Card Color')
                    ->required()
                    ->default('purple')
                    ->options([
                        'red' => '🔴 Red',
                        'orange' => '🟠 Orange',
                        'yellow' => '🟡 Yellow',
                        'green' => '🟢 Green',
                        'cyan' => '🩵 Cyan',
                        'blue' => '🔵 Blue',
                        'purple' => '🟣 Purple',
                    ]),
                TextInput::make('sort_order')
                    ->label('Order')
                    ->required()
                    ->numeric()
                    ->default(0)
                    ->helperText('Lower number appears first.'),
            ]);
    }
}
