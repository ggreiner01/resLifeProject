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
    return view('login');
});
Route::get('/roomate', function () {
    return view('roomate');
});
Route::get('/dorm', function () {
    return view('dorm');
});
Route::get('/floors', function () {
    return view('floors');
});
Route::get('/rooms', function () {
    return view('rooms');
});
Route::get('/almost', function () {
    return view('almost');
});
Route::get('/centennial', function () {
    return view('centennial');
});
Route::get('/jenks', function () {
    return view('jenks');
});
Route::get('/davis', function () {
    return view('davis');
});
Route::get('/memorial', function () {
    return view('memorial');
});
Route::get('/wilkinson', function () {
    return view('wilkinson');
});
Route::get('/watkins', function () {
    return view('watkins');
});
Route::get('/centf1', function () {
    return view('centf1');
});
Route::get('/centf2', function () {
    return view('centf2');
});
Route::get('/centf3', function () {
    return view('centf3');
});
Route::get('/centf4', function () {
    return view('centf4');
});
Route::get('/jenksf1', function () {
    return view('jenksf1');
});
Route::get('/jenksf2', function () {
    return view('jenksf2');
});
Route::get('/jenksf3', function () {
    return view('jenksf3');
});
Route::get('/jenksf4', function () {
    return view('jenksf4');
});
Route::get('/memlower', function () {
    return view('memlower');
});
Route::get('/memf1', function () {
    return view('memf1');
});
Route::get('/memf2', function () {
    return view('memf2');
});
Route::get('/memf3', function () {
    return view('memf3');
});
Route::get('/memf4', function () {
    return view('memf4');
});
Route::get('/watkinslower', function () {
    return view('watkinslower');
});
Route::get('/watkinsf1', function () {
    return view('watkinsf1');
});
Route::get('/watkinsf2', function () {
    return view('watkinsf2');
});
Route::get('/watkinsf3', function () {
    return view('watkinsf3');
});
Route::get('/watkinsf4', function () {
    return view('watkinsf4');
});
Route::get('/wilkinsonf1', function () {
    return view('wilkinsonf1');
});
Route::get('/wilkinsonf2', function () {
    return view('wilkinsonf2');
});
Route::get('/wilkinsonf3', function () {
    return view('wilkinsonf3');
});
Route::get('/wilkinsonlower', function () {
    return view('wilkinsonlower');
});
Route::get('/davisf2', function () {
    return view('davisf2');
});
Route::get('/davisf3', function () {
    return view('davisf3');
});
Route::get('/davisf4', function () {
    return view('davisf4');
});
Route::get('/davislower', function () {
    return view('davislower');
});
Route::get('/aurora.edu', function () {
    return redirect()->away('https://aurora.edu/');
});
