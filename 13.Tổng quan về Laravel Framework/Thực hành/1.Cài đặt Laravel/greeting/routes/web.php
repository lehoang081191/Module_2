<?php

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

// use Illuminate\Http\Request;
// use Illuminate\Routing\Route;

// Route::get('/', function () {
//     $name = 'Hoàng';
//     $age = 23;
//     $students = ['Hoàng','Tân','Nguyên'];
//     return view('welcome', ['name' => $name, 'age' => $age, 'students' => $students]);
// });
// Route::get('/hello/{age}', function ($age) {
//     $name = 'Hữu';
//     $age = 19;
//     return view('welcome1', ['name' => $name, 'age' => $age]);
// });
// Route::post('/', function (Request $request) {
//     $name = $request->input('name');
//     $age = $request->input('age');
//     return view('welcome1', ['name' => $name, 'age' => $age]);
// })->name('index');

Route::group(['prefix' => 'c10hero'], function () {
    Route::get('/index', 'c10heroController@index');
});


