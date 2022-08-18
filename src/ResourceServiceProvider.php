<?php

namespace Sorethea\FilakubeAdmin;

use Filament\Facades\Filament;
use Filament\Navigation\UserMenuItem;
use Filament\PluginServiceProvider;
use Sorethea\FilakubeAdmin\Filament\Pages\Account;
use Sorethea\FilakubeAdmin\Filament\Pages\Profile;
use Sorethea\FilakubeAdmin\Filament\Resources\PermissionResource;
use Sorethea\FilakubeAdmin\Filament\Resources\RoleResource;
use Sorethea\FilakubeAdmin\Filament\Resources\UserResource;
use Spatie\LaravelPackageTools\Package;

class ResourceServiceProvider extends PluginServiceProvider
{
    public static string $name = "filakube-admin";
    protected array $resources = [
        UserResource::class,
        RoleResource::class,
        PermissionResource::class,
    ];

    protected array $pages = [
        Profile::class,
    ];
    protected function getUserMenuItems(): array
    {
        return [
//            UserMenuItem::make()
//                ->label('Profile')
//                ->url(route('filament.pages.profile'))
//                ->icon('heroicon-s-user'),
        ];
    }

    public function configurePackage(Package $package): void
    {
        $package->name('filakube-admin');
    }

    public function boot()
    {
        Filament::serving(function () {
            Filament::registerUserMenuItems([
                'account' => UserMenuItem::make()->url(route('filament.pages.profile')),
            ]);
        });
    }
}
