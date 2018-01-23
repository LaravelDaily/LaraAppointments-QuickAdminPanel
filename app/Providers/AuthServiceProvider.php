<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        $user = \Auth::user();

        
        // Auth gates for: User management
        Gate::define('user_management_access', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Roles
        Gate::define('role_access', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('role_create', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('role_edit', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('role_view', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('role_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Users
        Gate::define('user_access', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('user_create', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('user_edit', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('user_view', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('user_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });
		
        // Auth gates for: Services
        Gate::define('service_access', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('service_create', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('service_edit', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('service_view', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('service_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });		

        // Auth gates for: Clients
        Gate::define('client_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('client_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('client_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('client_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('client_delete', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: Employees
        Gate::define('employee_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('employee_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('employee_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('employee_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('employee_delete', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: Working hours
        Gate::define('working_hour_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('working_hour_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('working_hour_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('working_hour_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('working_hour_delete', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: Appointments
        Gate::define('appointment_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('appointment_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('appointment_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('appointment_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('appointment_delete', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

    }
}
