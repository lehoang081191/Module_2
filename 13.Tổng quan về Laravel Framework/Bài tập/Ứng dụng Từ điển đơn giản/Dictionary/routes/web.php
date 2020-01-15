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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dictionary/index', function () {
    return view('/dictionary/index');
});
Route::post('/dictionary/index', function (Illuminate\Http\Request $request) {
    $dictionaryBD = ['hello' => 'xin chào', 'what' => 'cái gì', 'who' => 'ai'];
    $keyword = $request->keyword;
    $flag = view('/dictionary/error-translate', compact('keyword'));
    foreach ($dictionaryBD as $key => $value) {
        if ($key == $keyword) {
            $flag = view('/dictionary/result-translate', compact('keyword', 'value'));
        }
    }
    return $flag;
});
