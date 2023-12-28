<?php

namespace App\Filament\Resources\NavigationResource;

use Closure;
use Filament\Forms\Get;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Filament\Actions\Action;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Select;
use Filament\Forms\ComponentContainer;
use Filament\Forms\Components\Component;
use Filament\Forms\Components\TextInput;

trait HandlesNavigationBuilder
{
    public ?string $mountedItem = null;

    public array $mountedItemData = [];

    public ?string $mountedChildTarget = null;

    public array $mountedActionData = [];

    protected array | Closure $extraFields = [];

    protected array $itemTypes = [];

    public function sortNavigation(string $targetStatePath, array $targetItemsStatePaths): void
    {
        $items = [];

        foreach ($targetItemsStatePaths as $targetItemStatePath) {
            $item = data_get($this, $targetItemStatePath);
            $uuid = Str::afterLast($targetItemStatePath, '.');

            $items[$uuid] = $item;
        }

        data_set($this, $targetStatePath, $items);
    }

    public function addChild(string $statePath): void
    {
        $this->mountedChildTarget = $statePath;

        $this->mountAction('item');
    }

    public function removeItem(string $statePath): void
    {
        $uuid = Str::afterLast($statePath, '.');

        $parentPath = Str::beforeLast($statePath, '.');
        $parent = data_get($this, $parentPath);

        data_set($this, $parentPath, Arr::except($parent, $uuid));
    }

    public function editItem(string $statePath): void
    {
        $this->mountedItem = $statePath;
        $this->mountedItemData = Arr::except(data_get($this, $statePath), 'children');

        $this->mountAction('item');
    }

    public function createItem(): void
    {
        $this->mountedItem = null;
        $this->mountedItemData = [];
        $this->mountedActionData = [];

        $this->mountAction('item');
    }

    protected function getActions(): array
    {
        return [
            Action::make('item')
                ->mountUsing(function (ComponentContainer $form) {
                    if (!$this->mountedItem) {
                        return;
                    }

                    $form->fill($this->mountedItemData);
                })
                ->view('components.hidden-action')
                ->form([
                    TextInput::make('label')
                        ->label(__('Label'))
                        ->required(),
                    Select::make('type')
                        ->label(__('Type'))
                        ->options(function () {
                            $types = $this->getItemTypes();

                            return array_combine(array_keys($types), Arr::pluck($types, 'name'));
                        })
                        ->afterStateUpdated(function ($state, Select $component): void {
                            if (!$state) {
                                return;
                            }

                            // NOTE: This chunk of code is a workaround for Livewire not letting
                            //       you entangle to non-existent array keys, which wire:model
                            //       would normally let you do.
                            $component
                                ->getContainer()
                                ->getComponent(fn (Component $component) => $component instanceof Group)
                                ->getChildComponentContainer()
                                ->fill();
                        })
                        ->reactive(),
                    Group::make()
                        ->statePath('data')
                        ->whenTruthy('type')
                        ->schema(function (Get $get) {
                            $type = $get('type');

                            return $this->getItemTypes()[$type]['fields'] ?? [];
                        }),
                    Group::make()
                        ->statePath('data')
                        ->visible(fn (Component $component) => $component->evaluate($this->getExtraFields()) !== [])
                        ->schema(function (Component $component) {
                            return $this->getExtraFields();
                        }),
                ])
                ->modalWidth('md')
                ->action(function (array $data) {
                    if ($this->mountedItem) {
                        data_set($this, $this->mountedItem, array_merge(data_get($this, $this->mountedItem), $data));

                        $this->mountedItem = null;
                        $this->mountedItemData = [];
                    } elseif ($this->mountedChildTarget) {
                        $children = data_get($this, $this->mountedChildTarget . '.children', []);

                        $children[(string) Str::uuid()] = [
                            ...$data,
                            ...['children' => []],
                        ];

                        data_set($this, $this->mountedChildTarget . '.children', $children);

                        $this->mountedChildTarget = null;
                    } else {
                        $this->data['items'][(string) Str::uuid()] = [
                            ...$data,
                            ...['children' => []],
                        ];
                    }

                    $this->mountedActionData = [];
                })
                ->modalSubmitActionLabel(__('Save'))
                ->label(__('Item')),
        ];
    }

    public function getItemTypes(): array
    {
        return array_merge(
            [
                'external-link' => [
                    'name' => __('External link'),
                    'fields' => [
                        TextInput::make('url')
                            ->label(__('URL'))
                            ->required(),
                        Select::make('target')
                            ->label(__('Target'))
                            ->options([
                                '' => __('Same Tab'),
                                '_blank' => __('New Tab'),
                            ])
                            ->default('')
                            ->selectablePlaceholder(false),
                    ],
                ],
            ],
            $this->itemTypes
        );
    }

    public function itemType(string $name, array | Closure $fields, ?string $slug = null): static
    {
        $this->itemTypes[$slug ?? Str::slug($name)] = [
            'name' => $name,
            'fields' => $fields,
        ];

        return $this;
    }

    public function getExtraFields(): array | Closure
    {
        return $this->extraFields;
    }
}
