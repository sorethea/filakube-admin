<?php

namespace Sorethea\FilakubeAdmin\Filament\Resources;

use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Sorethea\FilakubeAdmin\Filament\Resources;
use Sorethea\FilakubeAdmin\Filament\RoleResource\Pages;
use Spatie\Permission\Models\Role;

class RoleResource extends Resource
{
    protected static ?string $model = Role::class;

    protected static ?string $slug = 'roles';

    protected static ?string $recordTitleAttribute = 'id';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Resources\RoleResource\Pages\ListRoles::route('/'),
            'create' => Resources\RoleResource\Pages\CreateRole::route('/create'),
            'edit' => Resources\RoleResource\Pages\EditRole::route('/{record}/edit'),
        ];
    }

    public static function getGloballySearchableAttributes(): array
    {
        return [];
    }
}
