<?php

namespace App\Filament\Resources\HobbyPhotos;

use App\Filament\Resources\HobbyPhotos\Pages\CreateHobbyPhoto;
use App\Filament\Resources\HobbyPhotos\Pages\EditHobbyPhoto;
use App\Filament\Resources\HobbyPhotos\Pages\ListHobbyPhotos;
use App\Filament\Resources\HobbyPhotos\Schemas\HobbyPhotoForm;
use App\Filament\Resources\HobbyPhotos\Tables\HobbyPhotosTable;
use App\Models\HobbyPhoto;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class HobbyPhotoResource extends Resource
{
    protected static ?string $model = HobbyPhoto::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?int $navigationSort = 6;

    public static function form(Schema $schema): Schema
    {
        return HobbyPhotoForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return HobbyPhotosTable::configure($table);
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
            'index' => ListHobbyPhotos::route('/'),
            'create' => CreateHobbyPhoto::route('/create'),
            'edit' => EditHobbyPhoto::route('/{record}/edit'),
        ];
    }
}
