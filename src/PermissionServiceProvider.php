<?php

namespace PermissionPlus\Permission\Projetos\Daniel\permissions\src;

use Illuminate\Support\ServiceProvider;

class PermissionServiceProvider extends ServiceProvider
{
    public function boot()
    {
    }

    public function register()
    {
        // load routes api 
        $this->loadRoutesFrom(__DIR__.'/Routes/api.php');
    }

}
