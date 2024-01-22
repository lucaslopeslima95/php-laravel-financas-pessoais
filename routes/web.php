<?php

use App\Livewire\Components\Buttons;
use App\Livewire\Components\Forms;
use App\Livewire\Components\Modals;
use App\Livewire\Components\Notifications;
use App\Livewire\Components\Typography;
use App\Livewire\Dashboard;
use App\Livewire\Err404;
use App\Livewire\Err500;
use App\Livewire\ResetPassword;
use App\Livewire\ForgotPassword;
use App\Livewire\Lock;
use App\Livewire\Auth\Login;
use App\Livewire\Profile;
use App\Livewire\Auth\Register;
use App\Livewire\Transactions;
use Illuminate\Support\Facades\Route;
use App\Livewire\Users;
use Laravel\Socialite\Facades\Socialite;

Route::get('/auth/redirect', function () {
    return Socialite::driver('github')->redirect();
});

Route::get('/auth/callback', function () {

    $user = Socialite::driver('github');
    dd($user);
    // $user = User::updateOrCreate([
    //     'github_id' => $githubUser->id,
    // ], [
    //     'name' => $githubUser->name,
    //     'email' => $githubUser->email,
    //     'github_token' => $githubUser->token,
    //     'github_refresh_token' => $githubUser->refreshToken,
    // ]);

    // Auth::login($user);

});
Route::redirect('/', '/login');

Route::get('/register', Register::class)->name('register');

Route::get('/login', Login::class)->name('login');

Route::get('/forgot-password', ForgotPassword::class)->name('forgot-password');

Route::get('/reset-password/{id}', ResetPassword::class)->name('reset-password')->middleware('signed');


Route::get('/404', Err404::class)->name('404');
Route::get('/500', Err500::class)->name('500');



Route::middleware('auth')->group(function () {
    Route::get('/profile', Profile::class)->name('profile');
    Route::get('/users', Users::class)->name('users');
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/transactions', Transactions::class)->name('transactions');
    Route::get('/lock', Lock::class)->name('lock');
    Route::get('/buttons', Buttons::class)->name('buttons');
    Route::get('/notifications', Notifications::class)->name('notifications');
    Route::get('/forms', Forms::class)->name('forms');
    Route::get('/modals', Modals::class)->name('modals');
    Route::get('/typography', Typography::class)->name('typography');
});


