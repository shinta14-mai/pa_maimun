<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\AndalalinControllers;
use App\Http\Controllers\RekomteknisControllers;
use App\Http\Controllers\StandarteknisControllers;
use App\Http\Controllers\PemohonControllers;
use App\Http\Controllers\AdminControllers;

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

// Route::get('redirects', [PemohonControllers::class, 'index'])->name('redirects');

Route::middleware(['auth:sanctum', 'verified'])->resource('andal', AndalalinControllers::class);
Route::middleware(['auth:sanctum', 'verified'])->resource('rt', RekomteknisControllers::class);
Route::middleware(['auth:sanctum', 'verified'])->resource('st', StandarteknisControllers::class);
Route::middleware(['auth:sanctum', 'verified'])->resource('redirects', PemohonControllers::class);

Route::get('/info', [PemohonControllers::class, 'index2'])->name('info');
Route::get('/buat-pengajuan', [PemohonControllers::class, 'bp'])->name('buat-pengajuan');

// Route::get('/st/{id}', [StandarteknisControllers::class, 'show'])->name('st.show');

// Route::get('/andal', [AndalalinControllers::class, 'index'])->name('andal.index');
// Route::get('/andal/create', [AndalalinControllers::class, 'create'])->name('andal.create');
// Route::post('/andal', [AndalalinControllers::class, 'store']);
// Route::put('/andal/{id}', [AndalalinControllers::class, 'update']);
// Route::get('/andal/{id}/edit', [AndalalinControllers::class, 'edit']);

// Route::get('/rt', [RekomteknisControllers::class, 'index'])->name('rt.index');
// Route::get('/rt/create', [RekomteknisControllers::class, 'create'])->name('rt.create');
// Route::post('/rt', [RekomteknisControllers::class, 'store']);
// Route::put('/rt/{id}', [RekomteknisControllers::class, 'update']);
// Route::get('/rt/{id}/edit', [RekomteknisControllers::class, 'edit']);

// Route::get('/st', [StandarteknisControllers::class, 'index'])->name('st.index');
// Route::get('/st/create', [StandarteknisControllers::class, 'create'])->name('st.create');
// Route::post('/st', [StandarteknisControllers::class, 'store']);
// Route::put('/st/{id}', [StnadarteknisControllers::class, 'update']);
// Route::get('/st/{id}/edit', [StndarteknisControllers::class, 'edit']);
