<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\Custumer;
use App\Models\Product;
use App\Models\Budget;

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BudgetController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('customers', CustomerController::class );
Route::get('/customers/{id}/budgets', [CustomerController::class, 'budgetsByCustomer']);


Route::resource('products', ProductController::class );

Route::resource('budgets', BudgetController::class );
Route::get('/budgets/{id}/customer', [BudgetController::class, 'customerByBudget']);
Route::get('/budgets/{id}/products', [BudgetController::class, 'productsByBudget']);