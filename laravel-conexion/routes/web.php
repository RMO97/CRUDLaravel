<?php
use App\Http\Controllers\PerrosController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/perros', function () {
    return view('lomitos-registro');
})->name('guardar-perros'); 

Route::get('/perros/mostrar',[PerrosController::class,'index'])->name('mostrar-perros');

Route::post('/perros/registrar',[PerrosController::class,'store'])->name('registrar-perros');

Route::get('/perros/{id}/editar',[PerrosController::class,'edit'])->name('editar-perros');

Route::patch('/perros/{id}/actualizar',[PerrosController::class,'update'])->name('actualizar-perros');

Route::delete('/perros/{id}/borrar',[PerrosController::class,'delete'])->name('borrar-perros');

