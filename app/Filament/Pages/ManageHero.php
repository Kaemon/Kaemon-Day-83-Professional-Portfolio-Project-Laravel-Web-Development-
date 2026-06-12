<?php

namespace App\Filament\Pages;

use App\Models\Hero;
use BackedEnum;
use Filament\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Schemas\Components\Actions;
use Filament\Schemas\Components\Form;
use Filament\Schemas\Concerns\InteractsWithSchemas;
use Filament\Schemas\Contracts\HasSchemas;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class ManageHero extends Page implements HasSchemas
{
    use InteractsWithSchemas;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?int $navigationSort = 3;

    protected string $view = 'filament.pages.manage-hero';

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill($this->getRecord()?->attributesToArray());
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Form::make([
                    TextInput::make('title')->required()->placeholder('Meeting you has been an absolute delight, and it truly brightened up my day.'),
                    TextInput::make('subtitle')->required()->placeholder("Let your eyes be the guide to discover the world's most beautiful details."),
                    TextInput::make('button_text')->label('Button Text')->required()->placeholder('Who am I?'),
                    FileUpload::make('image')->image()->disk(config('filesystems.default'))->required(),
                ])
                    ->livewireSubmitHandler('save')
                    ->footer([
                        Actions::make([
                            Action::make('save')->submit('save'),
                        ]),
                    ]),
            ])
            ->record($this->getRecord())
            ->statePath('data');
    }

    public function save(): void
    {
        $data = $this->form->getState();

        $record = $this->getRecord();

        if (! $record) {
            $record = new Hero;
        }

        $record->fill($data);
        $record->save();

        Notification::make()->title('Saved successfully!')->success()->send();
    }

    public function getRecord(): ?Hero
    {
        return Hero::first();
    }
}
