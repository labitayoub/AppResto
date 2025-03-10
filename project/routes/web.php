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

Route::get('/', function () {
    return view('welcome');
}
);
// Route::get('/', function () {
//     return view('auth.register');
// }
// );
Route::get('/register', function () {
    return view('auth.register');
}
);
Route::post('/register', 'RegisterController@register')->name('register');
Route::get('/login', function () {
    return view('auth.login');
}
);
Route::post('/login', 'LoginController@login')->name('login');
Route::fallback(function () {
    return view('errors.404');
}


);
