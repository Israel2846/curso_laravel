<?php

use App\Http\Controllers\ContactanosController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\HomeController;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

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

Route::get('/', HomeController::class)->name('home');

/* CRUD de curso */
// Route::controller(CursoController::class)->group(function () {
//     Route::get('cursos', 'index')->name('cursos.index');
//     Route::get('cursos/create', 'create')->name('cursos.create');
//     Route::post('cursos', 'store')->name('cursos.store');
//     Route::get('cursos/{curso}', 'show')->name('cursos.show');
//     Route::get('cursos/{curso}/edit', 'edit')->name('cursos.edit');
//     Route::put('cursos/{curso}', 'update')->name('cursos.update');
//     Route::delete('cursos/{curso}', 'destroy')->name('cursos.destroy');
// });

Route::resource('cursos', CursoController::class);
// Route::resource('asignaturas', CursoController::class)->names('cursos')->parameters(['asignaturas' => 'curso']);

// Route::get('cursos/{edit}/edit', [CursoController::class, 'edit'])->name('cursos.edit');

/* Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria = null) {
    if ($categoria) {
        return "Bienvenido al curso $curso de la categoría $categoria";
    } else {
        return "Bienvenido al curso $curso";
    }
}); */

Route::view('nosotros', 'nosotros')->name('nosotros');

/* Enviar correos sin controlador */
// Route::get('contactanos', function () {
//     Mail::to('israel.k40@gmail.com')->send(new ContactanosMailable);
//     return 'Mensaje enviado';
// })->name('contactanos');

/* Enviar correos con controlador */
Route::controller(ContactanosController::class)->group(function(){
    Route::get('contactanos', 'index')->name('contactanos.index');
    Route::post('contactanos', 'store')->name('contactanos.store');
});
