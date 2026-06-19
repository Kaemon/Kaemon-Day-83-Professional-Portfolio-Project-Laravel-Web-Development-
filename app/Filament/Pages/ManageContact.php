<?php

namespace App\Filament\Pages;

use App\Models\SiteSetting;
use BackedEnum;
use Filament\Actions\Action;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Schemas\Components\Actions;
use Filament\Schemas\Components\Form;
use Filament\Schemas\Concerns\InteractsWithSchemas;
use Filament\Schemas\Contracts\HasSchemas;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class ManageContact extends Page implements HasSchemas
{
    use InteractsWithSchemas;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $navigationLabel = 'Contact';

    protected static ?int $navigationSort = 2;

    protected string $view = 'filament.pages.manage-contact';

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
                    TextInput::make('to_email')
                        ->label('Recipient Email')
                        ->email()
                        ->required()
                        ->placeholder('you@gmail.com'),
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
            $record = new SiteSetting;
        }

        $record->fill($data);
        $record->save();

        Notification::make()->title('Saved successfully!')->success()->send();
    }

    public function getRecord(): ?SiteSetting
    {
        return SiteSetting::first();
    }
}
