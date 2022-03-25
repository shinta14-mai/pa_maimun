<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\AndalalinControllers;
use App\Http\Controllers\PemohonControllers;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

Route::get('/info', [PemohonControllers::class, 'info'])->name('info');

Route::get('/andal', [AndalalinControllers::class, 'index'])->name('andal.index');
Route::post('/andal', [AndalalinControllers::class, 'store']);
Route::put('/andal/{id}', [AndalalinControllers::class, 'update']);
Route::get('/andal/{id}/edit', [AndalalinControllers::class, 'edit']);
