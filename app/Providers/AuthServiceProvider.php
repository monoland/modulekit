<?php

namespace App\Providers;

use App\Models\Token;
use App\Models\Client;
use Laravel\Passport\Passport;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Resources\Json\Resource;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        Gate::guessPolicyNamesUsing(function ($modelClass) {
            return 'App\\Policies\\' . class_basename($modelClass) . 'Policy';
        });

        Resource::withoutWrapping();

        Passport::routes(function ($router) {
            $router->forAccessTokens();
        });

        Passport::useTokenModel(Token::class);
        Passport::useClientModel(Client::class);
    }
}
