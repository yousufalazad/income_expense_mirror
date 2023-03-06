<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

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
    Route::get('pdf-report', [App\Http\Controllers\Admin\ReportController::class, 'generatePdf'])->name('generatePdf');
});
