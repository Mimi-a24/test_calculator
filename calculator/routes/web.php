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

Route::get('/addition', function () {
    return view('addition_wel');
});

Route::get('/addition/{nb1}/{nb2}', function($nb1, $nb2) {
    $add = $nb1 + $nb2;
    return view('operations/addition')->with('nb1', $nb1)->with('nb2', $nb2)->with('add', $add);
});

Route::get('/subtraction', function () {
    return view('subtraction_wel');
});

Route::get('/subtraction/{nb1}/{nb2}', function ($nb1, $nb2) {
    $sub = $nb1 - $nb2;
    return view('operations/subtraction')->with('nb1', $nb1)->with('nb2', $nb2)->with('sub', $sub);
});

Route::get('/multiplication', function () {
    return view('multiplication_wel');
});

Route::get('/multiplication/{nb1}/{nb2}', function ($nb1, $nb2) {
    $mul = $nb1 * $nb2;
    return view('operations/multiplication')->with('nb1', $nb1)->with('nb2', $nb2)->with('mul', $mul);
});

Route::get('/division', function () {
    return view('division_wel');
});

Route::get('/division/{nb1}/{nb2}', function ($nb1, $nb2) {
    $div = $nb1 / $nb2;
    return view('operations/division')->with('nb1', $nb1)->with('nb2', $nb2)->with('div', $div);
});

?>