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
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\ViewField;
use Filament\Forms\Components\Html;

class PostForm
{
    public static function configure(Schema $schema): Schema
    {
return $schema->components([
    
            TextInput::make('title')
                ->required()
                ->reactive()
                ->afterStateUpdated(fn ($state, callable $set) => $set('slug', Str::slug($state)))->columnSpanFull(),

            TextInput::make('slug')
                ->required()
                ->unique(ignoreRecord: true)->columnSpanFull(),

            TextInput::make('excerpt')->nullable()->columnSpanFull(),

            FileUpload::make('featured_image')
                ->image()
                ->directory('posts')
                ->disk('public')
                ->nullable()->columnSpanFull(),

            RichEditor::make('content')->required()->columnSpanFull(),
            

            DatePicker::make('published_at')
                ->label('Publish Time')
                ->nullable()->columnSpanFull(),

            TextInput::make('seo_title')->label('SEO Title')->nullable()->columnSpanFull(),

            TextInput::make('seo_description')->label('SEO Description')->nullable()->columnSpanFull(),
            Repeater::make('test')
                ->schema([
                    TextInput::make('name')->required(),
                    Select::make('role')
                        ->options([
                            'member' => 'Member',
                            'administrator' => 'Administrator',
                            'owner' => 'Owner',
                        ])
                        ->required(),
                ])
                ->columns(2)
        ]);
    }
}
