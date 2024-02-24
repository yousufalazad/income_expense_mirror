<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\EmailNotificationController;
use App\Http\Controllers\Admin\FixedIncomeMonthlyController;
use App\Http\Controllers\Admin\FixedIncomeQuarterlyController;
use App\Http\Controllers\Admin\FixedIncomeHalfYearlyController;
use App\Http\Controllers\Admin\FixedIncomeYearlyController;
use App\Http\Controllers\Admin\OnetimeIncomeController;
use App\Http\Controllers\Admin\FixedExpenseMonthlyController;
use App\Http\Controllers\Admin\FixedExpenseQuarterlyController;
use App\Http\Controllers\Admin\FixedExpenseHalfYearlyController;
use App\Http\Controllers\Admin\FixedExpenseYearlyController;
use App\Http\Controllers\Admin\OnetimeExpenseController;
use App\Http\Controllers\Admin\ReportController;


// use Illuminate\Foundation\Auth\EmailVerificationRequest;
// use Illuminate\Auth\Events\Verified;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);
Route::get('/password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/email-notification', [EmailNotificationController::class, 'notificationSend'])->name('email-notification');

Route::group(['middleware' => 'auth','namespace'=>'Admin'], function() {
    //Income
    Route::resource('monthly-fixed-income', FixedIncomeMonthlyController::class);
    Route::resource('quarterly-fixed-income', FixedIncomeQuarterlyController::class);
    Route::resource('half-yearly-fixed-income', FixedIncomeHalfYearlyController::class);
    Route::resource('yearly-fixed-income', FixedIncomeYearlyController::class);
    Route::resource('one-time-income', OnetimeIncomeController::class);
    //Expense
    Route::resource('monthly-fixed-expense', FixedExpenseMonthlyController::class);
    Route::resource('quarterly-fixed-expense', FixedExpenseQuarterlyController::class);
    Route::resource('half-yearly-fixed-expense', FixedExpenseHalfYearlyController::class);
    Route::resource('yearly-fixed-expense', FixedExpenseYearlyController::class);
    Route::resource('one-time-expense', OnetimeExpenseController::class);
    //Report
    Route::resource('income-expense-report', ReportController::class);
    Route::get('pdf-report/{id}', [App\Http\Controllers\Admin\ReportController::class, 'generatePdf'])->name('generatePdf');
});
