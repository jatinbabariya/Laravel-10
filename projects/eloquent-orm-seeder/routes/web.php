<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\JointController;
use App\Http\Controllers\OrmComtroller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [IndexController::class, 'index']);
Route::get('/eloquentJoint', [JointController::class, 'index'])->name("eloquentJoint");
Route::get('/orm', [OrmComtroller::class, 'index'])->name("orm");
