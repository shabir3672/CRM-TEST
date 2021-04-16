<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        'App\Employee' => 'App\Policies\EmployeePolicy',
        'App\Company' => 'App\Policies\CompanyPolicy',
        'App\Model' => 'App\Policies\ModelPolicy',
    ];
   
    public function boot()
    {
        $this->registerPolicies();
    }
}
