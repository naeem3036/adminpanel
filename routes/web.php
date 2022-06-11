<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\employeeRegistration;
use App\Http\Controllers\companyRegistration;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// My Created Controller Routes
// Creat Records
Route::get('/employeeRegistration', [employeeRegistration::class, 'employeeRegistration' ])->name('employeeRegistration');
Route::post('/registerEmployee', [employeeRegistration::class, 'registerEmployee' ])->name('registerEmployee');
Route::get('/companyRegistration', [companyRegistration::class, 'companyRegistration' ])->name('companyRegistration');
Route::post('/registerCompany', [companyRegistration::class, 'registerCompany' ])->name('registerCompany');
// View the Records
Route::get('/companies_view', [companyRegistration::class, 'companies_view' ])->name('companies_view');
Route::get('/employees_view', [employeeRegistration::class, 'employees_view' ])->name('employees_view');
// Company Action routes
Route::get('/companies_edit/{id}', [companyRegistration::class, 'companies_edit' ])->name('companies_edit');
Route::get('/companies_delete/{id}', [companyRegistration::class, 'companies_delete' ])->name('companies_delete');
Route::get('/companies_update/{id}', [companyRegistration::class, 'companies_update' ])->name('companies_update');
Route::post('/companies_update/{id}', [companyRegistration::class, 'companies_update' ])->name('companies_update');
// Employees Action Routes
Route::get('/employees_edit/{id}', [employeeRegistration::class, 'employees_edit' ])->name('employees_edit');
Route::get('/employees_delete/{id}', [employeeRegistration::class, 'employees_delete' ])->name('employees_delete');
Route::post('/employees_update/{id}', [employeeRegistration::class, 'employees_update' ])->name('employees_update');
Route::get('/employees_update/{id}', [employeeRegistration::class, 'employees_update' ])->name('employees_update');
