<?php

namespace Dziem\MetabaseContainer;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class MetabaseContainerComponentsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/components', 'metabasecontainer');

        Blade::component('metabasecontainer::container', 'metabase-container');
    }
}
