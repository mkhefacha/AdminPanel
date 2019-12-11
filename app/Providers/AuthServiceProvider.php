<?php

namespace App\Providers;

use App\ContactCompany;
use App\ContactContact;
use App\EmailCompany;
use App\Event;
use App\Policies\CompanyPolicy;
use App\Policies\ContactPolicy;
use App\Policies\EmailPolicy;
use App\Policies\EventPolicy;
use App\Policies\listePolicy;
use App\Policies\SmsPolicy;
use App\SmsCompany;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Laravel\Passport\Passport;
use App\ListeCompany;
class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\Model',
         ListeCompany::class=>listePolicy::class,
         Event::class=>EventPolicy::class,
         SmsCompany::class=>SmsPolicy::class,
         ContactCompany::class=>CompanyPolicy::class,
         ContactContact::class=>ContactPolicy::class,
         EmailCompany::class=>EmailPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        if (!app()->runningInConsole()) {
            Passport::routes();
        };
    }
}
