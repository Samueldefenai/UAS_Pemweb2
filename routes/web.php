<?php

use App\Http\Controllers\BudgetController;

Route::resource('budgets', BudgetController::class);
Route::get('/budgets/report', [BudgetController::class, 'generateReport'])->name('budgets.report');
