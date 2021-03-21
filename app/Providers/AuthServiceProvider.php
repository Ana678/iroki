<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Access\Response;

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
    public function boot(){

        $this->registerPolicies();
        Gate::define('updatePassword', function($statusMaster){

            return $statusMaster == 1 
                ? Response::allow() 
                : Response::deny('Somente o responsável pela família pode editar a senha do usuário');
        });
    }
}
