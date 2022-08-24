<?php

use App\Http\Controllers\GrandmasterController;
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

Route::get('/', [GrandmasterController::class, 'index'])->name('grandmaster.index');
Route::post('/grandmaster/create', [GrandmasterController::class, 'create'])->name('grandmaster.create');
Route::post('/grandmaster/update', [GrandmasterController::class, 'update'])->name('grandmaster.update');
Route::get('/grandmaster/{id}/delete', [GrandmasterController::class, 'delete'])->name('grandmaster.delete');
Route::get('/getgrandmaster/{id}', [GrandmasterController::class, 'getgrandmaster'])->name('grandmaster.getgrandmaster');