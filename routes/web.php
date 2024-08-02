<?php

use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

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

// Direct Login
Route::get('/', function () {
    return redirect(route('user.homepage'));
});

// Route::middleware(['auth'])->group(function () {

//     // Users
//     Route::prefix('users')->name('users.')->group(function () {
//         Route::get('/', [UserController::class, 'index'])->name('index');
//         Route::get('get-data', [UserController::class, 'getUsers'])->name('get-data');
//         Route::get('modal-add', [UserController::class, 'getModalAdd'])->name('modal-add');
//         Route::post('store', [UserController::class, 'store'])->name('store');
//         Route::get('modal-edit/{userId}', [UserController::class, 'getModalEdit'])->name('modal-edit');
//         Route::put('update/{userId}', [UserController::class, 'update'])->name('update');
//         Route::get('modal-delete/{userId}', [UserController::class, 'getModalDelete'])->name('modal-delete');
//         Route::delete('delete/{userId}', [UserController::class, 'destroy'])->name('destroy');
//     });

//     // Roles
//     Route::prefix('roles')->name('roles.')->group(function () {
//         Route::get('/', [RoleController::class, 'index'])->name('index');
//         Route::get('get-data', [RoleController::class, 'getRoles'])->name('get-data');
//         Route::get('modal-add', [RoleController::class, 'getModalAdd'])->name('modal-add');
//         Route::post('store', [RoleController::class, 'store'])->name('store');
//         Route::get('modal-edit/{roleId}', [RoleController::class, 'getModalEdit'])->name('modal-edit');
//         Route::put('update/{roleId}', [RoleController::class, 'update'])->name('update');
//         Route::get('modal-delete/{roleId}', [RoleController::class, 'getModalDelete'])->name('modal-delete');
//         Route::delete('delete/{roleId}', [RoleController::class, 'destroy'])->name('destroy');
//         Route::post('update-permission', [RoleController::class, 'updatePermissionByID'])->name('update.permission');
//         Route::post('update-all-permissions', [RoleController::class, 'updateAllPermissions'])->name('update.permission');
//     });
// });






// ================================================================================================================================
// User Route
// ================================================================================================================================

Route::name('user.')->middleware(['web'])->group(function () {
    Route::get('/', function() {
        return view('user.home.index');
    })->name('home');

    Route::get('/team', function() {
        return view('user.team.all-team');
    })->name('team.all');

    Route::get('/team/{name}', function($name) {
        return view('user.team.team-individu', compact('name'));
    })->name('team.individu');

    Route::get('/portfolio', function() {
        return view('user.portfolio.index');
    })->name('portfolio');

    Route::get('/portfolio/detail', function() {
        return view('user.portfolio.detail');
    })->name('portfolio.detail');

    Route::get('/service', function() {
        return view('user.service.index');
    })->name('service');

    Route::get('/service/detail/{name}', function($name) {
        return view('user.service.detail', compact('name'));
    })->name('service.detail');

    Route::get('/newslatter', function() {
        return view('user.newslatter.index');
    })->name('newslatter');

    Route::get('/newslatter/detail/', function() {
        return view('user.newslatter.detail');
    })->name('newslatter.detail');

    Route::get('/contact', function() {
        return view('user.contact.index');
    })->name('contact');
});
