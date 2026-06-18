<?php

namespace App\Filament\Pages;

use App\Models\SiteSetting;
use BackedEnum;
use Filament\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Placeholder;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Schemas\Components\Actions;
use Filament\Schemas\Components\Form;
use Filament\Schemas\Concerns\InteractsWithSchemas;
use Filament\Schemas\Contracts\HasSchemas;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\HtmlString;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class ManageSiteSetting extends Page implements HasSchemas
{
    use InteractsWithSchemas;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $navigationLabel = 'Logo';

    protected static ?int $navigationSort = 1;

    protected string $view = 'filament.pages.manage-site-setting';

    public ?array $data = [];

    public function mount(): void
    {
        // Don't pre-fill logo into FileUpload — Supabase doesn't return
        // ContentLength in HeadObject, causing Flysystem to throw on size().
        // The current logo is shown via the Placeholder preview instead.
        $this->form->fill(['logo' => null]);
    }

    public function form(Schema $schema): Schema
    {
        $record = $this->getRecord();
        $currentLogoUrl = $record?->logo
            ? Storage::disk(config('filesystems.default'))->url($record->logo)
            : null;

        return $schema
            ->components([
                Form::make(array_filter([
                    $currentLogoUrl ? Placeholder::make('current_logo')
                        ->label('Current Logo')
                        ->content(new HtmlString('<img src="'.e($currentLogoUrl).'" style="height:80px;" />')) : null,
                    FileUpload::make('logo')
                        ->label($currentLogoUrl ? 'Upload New Logo' : 'Logo')
                        ->image()
                        ->disk(config('filesystems.default'))
                        ->visibility('public')
                        ->fetchFileInformation(false)
                        ->saveUploadedFileUsing(function (TemporaryUploadedFile $file): string {
                            $filename = $file->getFilename();
                            $disk = config('filesystems.default');
                            Storage::disk($disk)->put($filename, file_get_contents($file->getRealPath()), 'public');

                            return $filename;
                        })
                        ->required(! $currentLogoUrl),
                ]))
                    ->livewireSubmitHandler('save')
                    ->footer([
                        Actions::make([
                            Action::make('save')->submit('save'),
                        ]),
                    ]),
            ])
            ->record($record)
            ->statePath('data');
    }

    public function save(): void
    {
        $data = $this->form->getState();

        $record = $this->getRecord();

        if (! $record) {
            $record = new SiteSetting;
        }

        // Only update logo if a new file was uploaded
        if (empty($data['logo'])) {
            unset($data['logo']);
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
