<?php

namespace Sorethea\FilakubeAdmin\Filament\Pages;

use Filament\Forms\Components\TextInput;
use Filament\Pages\Page;
use Filament\Resources\Form;
use Illuminate\Support\Facades\Auth;

class Profile extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-user';

    protected static string $view = 'filament.pages.profile';

    protected static bool $shouldRegisterNavigation = false;

    protected function getTitle(): string
    {
        return Auth::user()->name;
    }
}
