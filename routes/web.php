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

Route::post('tutela.store', [App\Http\Controllers\TutelaController::class, 'store'])->name('tutela.store');
 
Route::get('/profile/{id}', function ($id) {
    $user  =App\Models\User::find($id);
    return view('profile', [
        'user'=>$user
    ]);
})->name('profile');

/**Rutas Via gubernativa creadas en la carpeta llamada via */
Route::view('via/tutela', [App\Http\Controllers\HomeController::class, 'via.tutela'])->name('via.tutela');
Route::view('via/autocargos', [App\Http\Controllers\HomeController::class, 'via/autocargos'])->name('via/autocargos');
Route::view('via/compensacion', [App\Http\Controllers\HomeController::class, 'via/compensacion'])->name('via/compensacion');
Route::view('via/fic', [App\Http\Controllers\HomeController::class, 'via/fic'])->name('via/fic');
Route::view('via.insolvencia', [App\Http\Controllers\HomeController::class, 'via.insolvencia'])->name('via.insolvencia');
Route::view('via/pqrs', [App\Http\Controllers\HomeController::class, 'via/pqrs'])->name('via/pqrs');
Route::view('via.recursos', [App\Http\Controllers\HomeController::class, 'via.recursos'])->name('via.recursos');
Route::view('via/sancion', [App\Http\Controllers\HomeController::class, 'via/sancion'])->name('via/sancion');
