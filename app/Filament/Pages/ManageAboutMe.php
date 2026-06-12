<?php

namespace App\Filament\Pages;

use App\Models\AboutMe;
use BackedEnum;
use Filament\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Schemas\Components\Actions;
use Filament\Schemas\Components\Form;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Concerns\InteractsWithSchemas;
use Filament\Schemas\Contracts\HasSchemas;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class ManageAboutMe extends Page implements HasSchemas
{
    use InteractsWithSchemas;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?int $navigationSort = 4;

    protected string $view = 'filament.pages.manage-about-me';

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
                    TextInput::make('name')->required(),
                    TextInput::make('role')->required(),
                    TextInput::make('tagline')->placeholder('Born in 2005, Johor, Malaysia'),
                    Textarea::make('content')->required()->rows(6),
                    Grid::make(3)->schema([
                        TextInput::make('instagram_link')->label('Instagram URL')->url(),
                        TextInput::make('linkedin_link')->label('LinkedIn URL')->url(),
                        TextInput::make('github_link')->label('GitHub URL')->url(),
                    ]),
                    FileUpload::make('image')->image()->disk(config('filesystems.default'))->required()
                        ->label('Self Image (PNG with transparent background)')
                        ->helperText('Please remove the background before uploading.'),
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
            $record = new AboutMe;
        }

        $record->fill($data);
        $record->save();

        Notification::make()->title('Saved successfully!')->success()->send();
    }

    public function getRecord(): ?AboutMe
    {
        return AboutMe::first();
    }
}
