<?php

namespace App\Providers;

use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\Column;
use Filament\Tables\Table;
use Illuminate\Support\ServiceProvider;

class FilamentServiceProvider extends ServiceProvider
{
    public function register(): void {}

    public function boot(): void
    {
        Table::configureUsing(fn (Table $table) => $table
            ->defaultDateDisplayFormat('Y-m-d')
            ->defaultDateTimeDisplayFormat('j M o H:i')
            ->defaultTimeDisplayFormat('H:i')
            ->paginationPageOptions([10, 25, 50, 100])
            ->reorderableColumns()
        );

        TextInput::configureUsing(fn (TextInput $input) => $input
            ->maxLength(fn () => $input->isNumeric() ? null : 255)
        );

        Repeater::configureUsing(
            fn (Repeater $repeater) => $repeater->compact()
        );

        EditAction::configureUsing(
            fn (EditAction $action) => $action
                ->tooltip(__('filament-actions::edit.single.label'))
                ->hiddenLabel(fn () => $action->getTable() !== null),
            isImportant: true,
        );

        DeleteAction::configureUsing(
            fn (DeleteAction $action) => $action
                ->tooltip(__('filament-actions::delete.single.label'))
                ->hiddenLabel(fn () => $action->getTable() !== null),
            isImportant: true,
        );

        ViewAction::configureUsing(
            fn (ViewAction $action) => $action
                ->tooltip(__('filament-actions::view.single.label'))
                ->hiddenLabel(fn () => $action->getTable() !== null),
            isImportant: true,
        );

        Column::configureUsing(fn (Column $column) => $column->toggleable());
    }
}
