<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

use function GuzzleHttp\default_ca_bundle;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('edit-post', function ($user) {
                return $user->is_active==0;
            });

        Gate::define('update-post', function ($user) {
                return $user->is_active==0;
            });

        Gate::before(function ($user, $ability) {
            if($user -> is_admin==1)  {
                return true;
            }
            });
    }
}
