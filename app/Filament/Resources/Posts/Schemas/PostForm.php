<?php

namespace App\Filament\Resources\Posts\Schemas;

use Filament\Schemas\Schema;

use Filament\Forms;
use Filament\Forms\Form;
use Illuminate\Support\Str;
use Filament\Schemas\Components\Section;

use Filament\Forms\Components\CodeEditor\Enums\Language;
use Filament\Forms\Components\CodeEditor;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\ViewField;
use Filament\Forms\Components\Html;
use Filament\Forms\Components\Repeater;

class PostForm
{
    public static function configure(Schema $schema): Schema
    {
return $schema->components([
            Section::make('Blog Content')
                ->schema([
                    TextInput::make('title')
                        ->required()
                        ->reactive()
                        ->afterStateUpdated(fn ($state, callable $set) => $set('slug', Str::slug($state)))->columnSpanFull(),

                    TextInput::make('slug')
                        ->required()
                        ->unique(ignoreRecord: true)->columnSpanFull(),

                    Textarea::make('excerpt')->nullable()->rows(7)->columnSpanFull()
                ])->columns(2),
            Section::make('Blog Info')
                ->schema([

                    DatePicker::make('published_at')
                        ->label('Publish Date')
                        ->nullable()->columnSpanFull(),

                    FileUpload::make('featured_image')
                        ->label('Featured Image')
                        ->image()
                        ->directory('posts')
                        ->disk('public')
                        ->nullable()->columnSpanFull(),

                ])->columns(2),

            

            RichEditor::make('content')->required()->columnSpanFull(),
            

            Section::make('SEO Settings')
                ->schema([
                    TextInput::make('seo_title')->label('SEO Title')->nullable()->columnSpanFull(),
                    Textarea::make('seo_description')->label('SEO Description')->nullable()->columnSpanFull(),
                ])
            ->collapsible()
            ->collapsed()
            ->columnSpanFull(),
            
            Section::make('FAQs')
                ->schema([
                    Repeater::make('faqs')
                        ->label('Frequently Asked Questions')
                        ->schema([
                            TextInput::make('question')
                                ->label('Question')
                                ->required()
                                ->columnSpanFull(),

                            Textarea::make('answer')
                                ->label('Answer')
                                ->required()
                                ->rows(3)
                                ->columnSpanFull(),
                        ])
                        ->collapsible()
                        ->collapsed()
                        ->addActionLabel('Add FAQ')
                        ->itemLabel(fn (array $state): ?string => $state['question'] ?? null)
                        ->columns(1),
                ])
                ->collapsible()
                ->collapsed()
                ->columnSpanFull(),

            Section::make('Custom Code / HTML / JS / CSS')
                ->schema([
                    CodeEditor::make('custom_html')
                        ->label('Code')
                        ->helperText('You can add HTML, CSS, JS, or any custom markup here.')
                        ->columnSpanFull(),
                ])
                ->collapsible()
                ->collapsed()
                ->columnSpanFull(),

        ]);
    }
}
