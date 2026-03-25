<?php

use App\Providers\AppServiceProvider;
use App\Providers\Filament\AppPanelProvider;
use App\Providers\FilamentServiceProvider;
use App\Providers\TelescopeServiceProvider;

return [
    AppServiceProvider::class,
    FilamentServiceProvider::class,
    AppPanelProvider::class,
    TelescopeServiceProvider::class,
];
