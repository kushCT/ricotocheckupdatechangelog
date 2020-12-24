<?php

namespace App\Providers;

use App\Actions\Fortify\CreateNewUser;
use App\Actions\Fortify\ResetUserPassword;
use App\Actions\Fortify\UpdateUserPassword;
use App\Actions\Fortify\UpdateUserProfileInformation;
use Illuminate\Support\ServiceProvider;
use Laravel\Fortify\Fortify;

class FortifyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Login view
        Fortify::loginView(fn() => view('auth.login'));

        // Forgot password view
        Fortify::requestPasswordResetLinkView(fn() => view('auth.forgot-password'));

        // Reset password view
        Fortify::resetPasswordView(fn($request) => view('auth.reset-password', ['request' => $request]));

        // Two factor challenge view
        Fortify::twoFactorChallengeView(fn() => view('auth.two-factor-challenge'));

        // Register view
        Fortify::registerView(fn() => view('auth.register'));

        // Verify email view
        Fortify::verifyEmailView(fn() => view('auth.verify-email'));

        // Confirm password view
        Fortify::confirmPasswordView(fn() => view('auth.confirm-password'));
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Fortify::createUsersUsing(CreateNewUser::class);
        Fortify::updateUserProfileInformationUsing(UpdateUserProfileInformation::class);
        Fortify::updateUserPasswordsUsing(UpdateUserPassword::class);
        Fortify::resetUserPasswordsUsing(ResetUserPassword::class);
    }
}
