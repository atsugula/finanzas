<?php

use App\Http\Controllers\BankAccountController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\CreditCardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\InputTypeController;
use App\Http\Controllers\ObjectiveController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\BudgetController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

//Personalizamos las vistas del Auth
Route::namespace('Auth')->group(function(){
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login']);
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
});

//En caso de que no este logeado no le muestre nada
Route::group(['middleware' => 'auth'], function () {

    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('home', [HomeController::class, 'index']);

    Route::resource('bank-accounts', BankAccountController::class);
    Route::resource('budgets', BudgetController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('credit-cards', CreditCardController::class);
    Route::resource('input-types', InputTypeController::class);
    Route::resource('objectives', ObjectiveController::class);
    Route::resource('settings', SettingController::class);
    Route::resource('statuses', StatusController::class);
    Route::resource('transactions', TransactionController::class);
    Route::resource('users', UserController::class);

});
