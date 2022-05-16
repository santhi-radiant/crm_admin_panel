<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\UsersController;
use App\Http\Controllers\admin\ClientsController;
use App\Http\Controllers\admin\ProfileController;
use App\Http\Controllers\admin\ProjectsController;
use App\Http\Controllers\admin\TasksController;

use App\Http\Controllers\users\HomeController as UsersHomeController;
use App\Models\Client;
use App\Models\User;
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

Route::get('/',function(){
return view('welcome');
});
Route::group([
    'prefix' => 'user',
    'as' => 'user.',
    'namespace' => 'User',
    'middleware' => ['auth']
], function () {
    Route::get('/home', 'UsersHomeController@index')->name('home');
});

Route::get('/home', [HomeController::class,'index'])->name('home');
Route::get('/profile/{id}', [App\Http\Controllers\admin\ProfileController::class, 'profile'])->name('profile');

Route::controller(App\Http\Controllers\admin\UsersController::class)->group(function(){
    Route::get('/users', 'index')->name('users');
    Route::get('/assignrole/{id}', 'assignrole')->name('assignrole');
    Route::post('/updaterole/{id}', 'update_role')->name('role.update');
});


Route::controller(App\Http\Controllers\admin\ClientsController::class)->group(function(){
    Route::get('/clients','index')->name('clients');
    Route::get('/create_client','create')->name('clients.create');
    Route::post('/store_client','store')->name('clients.store');
    Route::get('/edit_client/{id}','edit')->name('clients.edit');
    Route::post('/update_client/{id}','update')->name('clients.update');
    Route::get('/destroy_client/{id}','destroy')->name('clients.destroy');

});

Route::controller(App\Http\Controllers\admin\ProjectsController::class)->group(function(){
    Route::get('/projects','index')->name('projects');
    Route::get('/create_project','create')->name('projects.create');
    Route::post('/store_project','store')->name('projects.store');
    Route::get('/edit_project/{id}','edit')->name('projects.edit');
    Route::post('/update_project/{id}','update')->name('projects.update');
    Route::get('/destroy_project/{id}','destroy')->name('projects.destroy');

});

Route::controller(App\Http\Controllers\admin\TasksController::class)->group(function(){
    Route::get('/tasks','index')->name('tasks');
    Route::get('/create_task','create')->name('tasks.create');
    Route::post('/store_task','store')->name('tasks.store');
    Route::get('/edit_task/{id}','edit')->name('tasks.edit');
    Route::post('/update_task/{id}','update')->name('tasks.update');
    Route::get('/destroy_task/{id}','destroy')->name('tasks.destroy');

});




require __DIR__.'/auth.php';
