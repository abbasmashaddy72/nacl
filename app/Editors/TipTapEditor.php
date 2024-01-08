<?php

namespace App\Editors;

use App\Interface\ContentEditor;
use Filament\Forms\Components\Component;
use Filament\Forms\Components\Textarea;

class TipTapEditor implements ContentEditor
{
    public static function component(string $name = 'content'): Component
    {
        if (!class_exists(\FilamentTiptapEditor\TiptapEditor::class)) {

            return Textarea::make($name)->required();
        }

        return \FilamentTiptapEditor\TiptapEditor::make($name)
            ->profile('default')
            // @phpstan-ignore-next-line
            ->output(\FilamentTiptapEditor\Enums\TiptapOutput::Html)
            ->extraInputAttributes(['style' => 'min-height: 24rem;'])
            ->required();
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
