<?php

namespace App\Editors;

use App\Interface\ContentEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Component;

class TipTapEditor implements ContentEditor
{
    public static function component(): Component
    {
        if (class_exists(\FilamentTiptapEditor\TiptapEditor::class)) {
            return \FilamentTiptapEditor\TiptapEditor::make('content')
                ->profile('default')
                // @phpstan-ignore-next-line
                ->output(\FilamentTiptapEditor\Enums\TiptapOutput::Html)
                ->extraInputAttributes(['style' => 'min-height: 24rem;'])
                ->required();
        }

        return Textarea::make('content')->required();
    }

    public static function render(string $content): string
    {
        if (class_exists(\FilamentTiptapEditor\TiptapEditor::class)) {
            // @phpstan-ignore-next-line
            return tiptap_converter()->asHTML($content);
        }

        return $content;
    }
}
