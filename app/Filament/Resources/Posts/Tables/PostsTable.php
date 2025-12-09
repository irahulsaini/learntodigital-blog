<?php

namespace App\Filament\Resources\Posts\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;


use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables\Filters\Filter;
use Filament\Forms\Components\TextInput; 

class PostsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('featured_image')
                ->label('Image')
                ->square()
                ->size(50)
                ->url(fn ($record) => $record->featured_image ? asset('storage/posts/' . $record->featured_image) : null),
                TextColumn::make('title')
                ->searchable()
                ->sortable()
                ->limit(50),

            TextColumn::make('slug')
                ->label('Slug')
                ->wrap(),
            ])
            ->filters([
                Filter::make('title')
                ->form([
                    TextInput::make('title')->label('Title Contains'),
                ])
                ->query(function ($query, array $data) {
                    return $query->when(
                        $data['title'] ?? false,
                        fn ($q, $title) => $q->where('title', 'like', "%{$title}%")
                    );
                }),
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
