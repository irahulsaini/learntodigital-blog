<?php

namespace App\Filament\Resources\Posts\Schemas;

use Filament\Schemas\Schema;

use Filament\Forms;
use Filament\Forms\Form;
use Illuminate\Support\Str;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\DateTimePicker;

class PostForm
{
    public static function configure(Schema $schema): Schema
    {
return $schema->components([

            TextInput::make('title')
                ->required()
                ->reactive()
                ->afterStateUpdated(fn ($state, callable $set) => $set('slug', Str::slug($state))),

            TextInput::make('slug')
                ->required()
                ->unique(ignoreRecord: true),

            TextInput::make('excerpt')->nullable(),

            FileUpload::make('featured_image')
                ->image()
                ->directory('posts')
                ->disk('public')
                ->nullable(),

            RichEditor::make('content')->required(),

            DateTimePicker::make('published_at')
                ->label('Publish Time')
                ->nullable(),

            TextInput::make('seo_title')->label('SEO Title')->nullable(),

            TextInput::make('seo_description')->label('SEO Description')->nullable(),
        ]);
    }
}
