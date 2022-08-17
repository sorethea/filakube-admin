<?php

namespace Sorethea\FilakubeAdmin;

use Filament\PluginServiceProvider;
use Sorethea\FilakubeAdmin\Filament\Resources\UserResource;

class ResourceServiceProvider extends PluginServiceProvider
{
    public static string $name = "filakube-admin";
    protected array $resources = [
        UserResource::class,
    ];

}
