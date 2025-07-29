<?php

namespace Guanlam03\SubmoduleRepoNew;


use Illuminate\Support\ServiceProvider;

class SubPackageServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'subview');
    }
}
