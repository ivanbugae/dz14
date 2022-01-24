<?php

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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', [\App\Http\Controllers\HomeController::class , 'index']);
/*
Route::post('/user/registration', [\App\Http\Controllers\UserController::class, 'registration']);
Route::post('/user/authorization', [\App\Http\Controllers\UserController::class, 'authorization']);
Route::get('/user/{id}/show', [\App\Http\Controllers\UserController::class, 'show']);
Route::delete('/user/delete', [\App\Http\Controllers\UserController::class, 'delete']);
*/
/*Route::prefix('/user')->group(function (\Illuminate\Routing\Router $router)
{
    $router->post ('/registration', [\App\Http\Controllers\UserController::class, 'registration']);
    $router->post('/authorization', [\App\Http\Controllers\UserController::class, 'authorization']);
    $router->get('/{id}/show', [\App\Http\Controllers\UserController::class, 'show']);
    $router->delete('/delete', [\App\Http\Controllers\UserController::class, 'delete']);
}
);*/
Route::name('user.')->group(function (){
    Route::prefix('/user')->group(function (\Illuminate\Routing\Router $router)
    {
        $router->post ('/registration', [\App\Http\Controllers\UserController::class, 'registration'])->name('registration');
        $router->post('/authorization', [\App\Http\Controllers\UserController::class, 'authorization'])->name('authorization');
        $router->get('/{id}/show', [\App\Http\Controllers\UserController::class, 'show'])->name('show');
        $router->delete('/delete', [\App\Http\Controllers\UserController::class, 'delete'])->name('delete');
    }
    );
});
Route::resource('task',\App\Http\Controllers\TaskController::class);
