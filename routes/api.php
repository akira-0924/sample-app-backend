<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\OwnerController;
use App\Http\Controllers\SampleController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth:admin', 'verified'])->name('dashboard');

// Route::resource('admin/owners', OwnerController::class)
// ->middleware(['auth:admin', 'verified']);
// ->name('admin.owners');

Route::controller(SampleController::class)
    ->group(function () {
        Route::get('/index', 'index');
    });
