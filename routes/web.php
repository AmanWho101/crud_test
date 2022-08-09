<?php

use App\Http\Controllers\StudentController;
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

Route::get('/', function () {
    return redirect('/student');
});
Route::resource('student',StudentController::class);

Route::DELETE('/student/{id}', 'StudentController@destroy')
     ->name('student.destroy');

Route::GET('/edit/{id}','StudentController@edit');