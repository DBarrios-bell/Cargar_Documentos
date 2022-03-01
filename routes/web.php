<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Contracts\Container\BindingResolutionException;
use RealRashid\SweetAlert\Facades\Alert;


//aqui podemos cambiar el idioma a nuestro sistema ingles ('en'), español ('es')
//App::setLocale('es');


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


Route::view('/', 'home')->name('home');
// Route::view('/about', 'about')->name('about');
//Route::middleware(['auth'])->get('/getUsersAll', 'UserController@getUsersAll');

//--------------------------------------------------------------------------------------------------
Route::middleware(['auth'])->resource('portafolio', 'ProjectController')
->names('projects')
->parameters(['portafolio'=>'project']);

	//las rurtas comentadadas es lo mismo que la que esta arriba de este comentario Route::resource
//Route::get('/portafolio', 'ProjectController@index')->name('projects.index');
//Route::get('/portafolio/crear', 'ProjectController@create')->name('projects.create');
//Route::get('/portafolio/{project}/editar', 'ProjectController@edit')->name('projects.edit');
//Route::patch('/portafolio/{project}', 'ProjectController@update')->name('projects.update');
//Route::post('/portafolio', 'ProjectController@store')->name('projects.store');
//Route::get('/portafolio/{project}', 'ProjectController@show')->name('projects.show');
//Route::delete('/portafolio/{project}', 'ProjectController@destroy')->name('projects.destroy');

//-------------------------------------------------------------------------------------------------
//Route::('/users/all/query','UserController@getUsersAll')->name('consulta-users-all');


// Route::view('/contacto', 'Contact')->name('contact');
Route::post('', 'MessageController@store')->name('messages.store');

Route::get('/welcome', function () {
	Alert::success('Success Title', 'Success Message');

    return view('welcome');
})->name('welcome');

Auth::routes();



