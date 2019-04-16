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
Route::get('/reshall', function () {
    return view('reshall');
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
Route::get('/centennial/centf1', 'CentennialController@indexcentf1');
Route::get('/centennial/centf2', 'CentennialController@indexcentf2');
Route::get('/centennial/centf3', 'CentennialController@indexcentf3');
Route::get('/centennial/centf4', 'CentennialController@indexcentf4');
Route::get('/jenks/jenksf1', 'JenksController@indexjenksf1');
Route::get('/jenks/jenksf2', 'JenksController@indexjenksf2');
Route::get('/jenks/jenksf3', 'JenksController@indexjenksf3');
Route::get('/jenks/jenksf4', 'JenksController@indexjenksf4');
Route::get('memorial/memf1', 'MemorialController@indexmemf1');
Route::get('memorial/memf2', 'MemorialController@indexmemf2');
Route::get('memorial/memf3', 'MemorialController@indexmemf3');
Route::get('memorial/memf4', 'MemorialController@indexmemf4');
Route::get('watkins/watkinslower', 'WatkinsController@indexwatkinslower');
Route::get('watkins/watkinsf1', 'WatkinsController@indexwatkinsf1');
Route::get('watkins/watkinsf2', 'WatkinsController@indexwatkinsf2');
Route::get('watkins/watkinsf3', 'WatkinsController@indexwatkinsf3');
Route::get('watkins/watkinsf4', 'WatkinsController@indexwatkinsf4');
Route::get('wilkinson/wilkinsonf1', 'WilkinsonController@indexwilkinsonf1');
Route::get('wilkinson/wilkinsonf2', 'WilkinsonController@indexwilkinsonf2');
Route::get('wilkinson/wilkinsonf3', 'WilkinsonController@indexwilkinsonf3');
Route::get('wilkinson/wilkinsonlower', 'WilkinsonController@indexwilkinsonlower');
Route::get('davis/davisf2', 'DavisController@indexdavisf2');
Route::get('davis/davisf3', 'DavisController@indexdavisf3');
Route::get('davis/davisf4', 'DavisController@indexdavisf4');
Route::get('davis/davislower', 'DavisController@indexdavislower');
Route::get('/aurora.edu', function () {
    return redirect()->away('https://aurora.edu/');
});
Route::resource('admins', 'AdminController');
Route::resource('boarding', 'BoardingGroupController');
Route::resource('buildings', 'BuildingsController');
Route::resource('floors', 'FloorController');
Route::resource('genders', 'GenderController');
Route::resource('peoples', 'PeopleToRoomWithController');
Route::resource('rooms', 'RoomController');
Route::resource('users', 'UsersController');
Route::resource('whos', 'WhoAndWhereController');
Route::resource('years', 'YearOfResidenceController');
Route::get('export', 'MyController@export')->name('export');
Route::get('importExportView', 'MyController@importExportView');
Route::post('import', 'MyController@import')->name('import');