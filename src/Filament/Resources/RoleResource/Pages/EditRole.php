<?php

namespace Sorethea\FilakubeAdmin\Filament\Resources\RoleResource\Pages;

use Sorethea\FilakubeAdmin\Filament\Resources\RoleResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRole extends EditRecord
{
    protected static string $resource = RoleResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
