<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('register');
});

//admin
// Route::middleware(['auth', 'role:admin'])->group(function () {
//     // Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
//     Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');

//     Route::post('/admin/profile/store', [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');
//     Route::get('/admin/change/password', [AdminController::class, 'AdminChangePassword'])->name('admin.change.password');
//     Route::post('/admin/update/password', [AdminController::class, 'AdminUpdatePassword'])->name('admin.update.password');

// });//end admin group middleware auth middleware used to check wheter user is logged or not and role here check wether admin or not

Route::group(['middleware' => 'isAdmin', 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard.index');
    Route::resource('permissions', \App\Http\Controllers\Admin\PermissionController::class);
    Route::resource('roles', \App\Http\Controllers\Admin\RoleController::class);
    Route::resource('users', \App\Http\Controllers\Admin\UserController::class);
    Route::resource('currencies', \App\Http\Controllers\Admin\CurrencyController::class);
    Route::resource('expense_categories', \App\Http\Controllers\Admin\ExpenseCategoryController::class);
    Route::resource('income_categories', \App\Http\Controllers\Admin\IncomeCategoryController::class);
    Route::resource('expenses', \App\Http\Controllers\Admin\ExpenseController::class);
    Route::resource('incomes', \App\Http\Controllers\Admin\IncomeController::class);
    Route::resource('monthly_reports', \App\Http\Controllers\Admin\MontlyReportController::class);


    //new from real
    // Route::get('profile', [\App\Http\Controllers\AdminController::class, 'AdminProfile'])->name('profile.AdminProfile');
    //end from real

    Route::get('profile', [\App\Http\Controllers\AdminController::class, 'AdminProfile'])->name('profile');
    Route::post('profile/store', [\App\Http\Controllers\AdminController::class, 'AdminProfileStore'])->name('profile.store');
    Route::get('change-password', [\App\Http\Controllers\AdminController::class, 'AdminChangePassword'])->name('change.password');

});

Auth::routes();

Route::get('/home', function () {
    return view('home');
})->name('home');
