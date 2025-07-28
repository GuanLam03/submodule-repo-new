<?php

namespace guanlam03\submodule-repo-new;

use Illuminate\Support\ServiceProvider;

class SubPackageServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'subview');
    }
}
