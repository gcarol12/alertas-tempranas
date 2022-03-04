<?php
 
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\PageController;
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

Route::get('/', [PageController::class, 'posts']);
Route::get('blog/{post}', [PageController::class, 'post'])->name('post');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('posts', App\Http\Controllers\Backend\PostController::class)
->middleware('auth')
->except('show');
 
Route::get('/profile/{id}', function ($id) {
    $user  =App\Models\User::find($id);
    return view('profile', [
        'user'=>$user
    ]);
})->name('profile');

Route::get('/search/{id}', function ($id) {
    $user  =App\Models\User::find($id);
    return view('search', [
        'user'=>$user
    ]);
})->name('search');

/**Rutas Via gubernativa creadas en la carpeta llamada via */
Route::view('via/tutela', [App\Http\Controllers\HomeController::class, 'via.tutela'])->name('via.tutela');
Route::view('via/autocargos', [App\Http\Controllers\HomeController::class, 'via/autocargos'])->name('via/autocargos');
Route::view('via/compensacion', [App\Http\Controllers\HomeController::class, 'via/compensacion'])->name('via/compensacion');
Route::view('via/fic', [App\Http\Controllers\HomeController::class, 'via/fic'])->name('via/fic');
Route::view('via.insolvencia', [App\Http\Controllers\HomeController::class, 'via.insolvencia'])->name('via.insolvencia');
Route::view('via/pqrs', [App\Http\Controllers\HomeController::class, 'via/pqrs'])->name('via/pqrs');
Route::view('via.recursos', [App\Http\Controllers\HomeController::class, 'via.recursos'])->name('via.recursos');
Route::view('via/sancion', [App\Http\Controllers\HomeController::class, 'via/sancion'])->name('via/sancion');

Route::post('tutela.store', [App\Http\Controllers\TutelaController::class, 'store'])->name('tutela.store');
Route::post('sancion.store', [App\Http\Controllers\SancionController::class, 'store'])->name('sancion.store');
Route::post('compensacion.store', [App\Http\Controllers\CompensacionController::class, 'store'])->name('compensacion.store');
Route::post('fic.store', [App\Http\Controllers\FicController::class, 'store'])->name('fic.store');
Route::post('recursos.store', [App\Http\Controllers\RecursosController::class, 'store'])->name('recursos.store');
Route::post('insolvencia.store', [App\Http\Controllers\InsolvenciaController::class, 'store'])->name('insolvencia.store');
Route::post('autocargos.store', [App\Http\Controllers\AutocargosController::class, 'store'])->name('autocargos.store');
Route::post('pqrs.store', [App\Http\Controllers\PqrsController::class, 'store'])->name('pqrs.store');
