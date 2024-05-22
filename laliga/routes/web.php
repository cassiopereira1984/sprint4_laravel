<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\PartidoController;

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

Route::view('/', 'index' );

    Route::get('/', [EquipoController::class, 'index'])->name('equipos.index');
    Route::get('/create', [EquipoController::class, 'create'])->name('equipos.create');
    Route::post('/', [EquipoController::class, 'store'])->name('equipos.store');
    Route::get('/{equipo}', [EquipoController::class, 'show'])->name('equipos.show');
    Route::get('/{equipo}/edit', [EquipoController::class, 'edit'])->name('equipos.edit');
    Route::put('/{equipo}', [EquipoController::class, 'update'])->name('equipos.update');
    Route::delete('/{equipo}', [EquipoController::class, 'destroy'])->name('equipos.destroy');
});

Route::prefix('partidos')->group(function () {
    Route::get('/', [PartidoController::class, 'index'])->name('partidos.index');
    Route::get('/create', [PartidoController::class, 'create'])->name('partidos.create');
    Route::post('/', [PartidoController::class, 'store'])->name('partidos.store');
    Route::get('/{partido}', [PartidoController::class, 'show'])->name('partidos.show');
    Route::get('/{partido}/edit', [PartidoController::class, 'edit'])->name('partidos.edit');
    Route::put('/{partido}', [PartidoController::class, 'update'])->name('partidos.update');
    Route::delete('/{partido}', [PartidoController::class, 'destroy'])->name('partidos.destroy');
});

// route::resource('/', EquipoController::class);
// route::resource('/', PartidoController::class);
?>