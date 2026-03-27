<?php

declare(strict_types=1);

namespace App\Filament\Resources\TeamMembers\Tables;

use App\Models\TeamMember;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class TeamMembersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->recordTitleAttribute(TeamMember::NAME)
            ->defaultSort('created_at', 'desc')
            ->columns([
                ImageColumn::make(TeamMember::PHOTO_PATH)
                    ->label('Photo')
                    ->disk('s3')
                    ->visibility('public')
                    ->circular()
                    ->imageSize(48),
                TextColumn::make(TeamMember::NAME)
                    ->label('Nom')
                    ->searchable()
                    ->sortable(),
                TextColumn::make(TeamMember::ROLE)
                    ->label('Role')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('updated_at')
                    ->label('Mis a jour')
                    ->since()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                CreateAction::make(),
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                DeleteBulkAction::make(),
            ]);
    }
}
