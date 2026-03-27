<?php

declare(strict_types=1);

namespace App\Filament\Resources\TeamMembers\Schemas;

use App\Models\TeamMember;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Group;
use Filament\Schemas\Schema;

class TeamMemberForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make(TeamMember::PHOTO_PATH)
                    ->label('Photo')
                    ->image()
                    ->imageEditor()
                    ->panelAspectRatio('4:5')
                    ->imagePreviewHeight('240')
                    ->helperText('Utilise idealement une photo portrait. Le cadrage est prevu pour un format 4:5.')
                    ->directory('team-members'),
                Group::make([
                    TextInput::make(TeamMember::NAME)
                        ->label('Nom')
                        ->required()
                        ->maxLength(50),
                    TextInput::make(TeamMember::ROLE)
                        ->label('Role')
                        ->required()
                        ->maxLength(50),
                    Textarea::make(TeamMember::DESCRIPTION)
                        ->label('Description')
                        ->required()
                        ->rows(6),
                ])
                    ->columns(1),
            ])
            ->columns([
                'default' => 1,
                'lg' => 2,
            ]);
    }
}
