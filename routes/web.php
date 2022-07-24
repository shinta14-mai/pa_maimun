<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\AndalalinControllers;
use App\Http\Controllers\PemohonControllers;
use App\Http\Controllers\PengajuanControllers;
use App\Http\Controllers\InfoControllers;
use App\Http\Controllers\TlControllers;
use App\Http\Controllers\BerkasControllers;
use App\Models\Info;

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
        'welcome' => Info::orderBy('id', 'ASC')->get()
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->resource('info', InfoControllers::class);
Route::middleware(['auth:sanctum', 'verified'])->resource('andal', AndalalinControllers::class);
Route::middleware(['auth:sanctum', 'verified'])->resource('tl', TlControllers::class);
Route::middleware(['auth:sanctum', 'verified'])->resource('redirects', PemohonControllers::class);
Route::middleware(['auth:sanctum', 'verified'])->resource('berkas', BerkasControllers::class);
Route::middleware(['auth:sanctum', 'verified'])->resource('pengajuan', PengajuanControllers::class);
