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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', function (Illuminate\Http\Request $request) {
    if ($request->username == 'admin' && $request->password == 'admin') {
        return view('welcome_admin');
    }
    return view('login_error');
});

Route::get('/product/discount', function () {
    return view('product/discount');
});

Route::post('/product/discount', function (Illuminate\Http\Request $request) {
    $description = $request->description;
    $price = $request->price;
    $discount_percent = $request->discount_percent;
    $discount_amount = $price * $discount_percent * 0.01;
    $discount_price = $price - $discount_amount;
    return view('product/display_discount', compact('description', 'price', 'discount_percent', 'discount_amount', 'discount_price'));
})->name('showdiscount');
