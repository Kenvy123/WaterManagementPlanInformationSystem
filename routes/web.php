<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MillFormController;
use App\Http\Controllers\EstateFormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\OperatingUnitController;
use App\Http\Controllers\ChemicalParameterController;
use App\Http\Controllers\PersonInChargeController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('estate_form', EstateFormController::class);
    Route::resource('mill_form', MillFormController::class);
    Route::resource('users', UserController::class);
    Route::resource('events', EventController::class);
    Route::resource('operating_units', OperatingUnitController::class);
    Route::resource('chemical_parameter', ChemicalParameterController::class);
    Route::resource('pic', PersonInChargeController::class);

});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
