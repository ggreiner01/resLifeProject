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
    return view('auth/login');
})->middleware('guest');

Route::get('/landing', function () {
    return view('landing');
})->middleware('auth');
//Route::get('/roomate', 'RoommateController@roomate');
Route::get('/reshall', function () {
    return view('reshall');
})->middleware('auth', 'group');
Route::get('/almost', 'SelectionController@almost')->middleware('auth', 'group');
Route::get('/input', 'SelectionController@input')->middleware('auth', 'group');
Route::get('/select', 'RoommateController@selection')->middleware('auth', 'group');

Route::get('/roomate', function () {
    return view('roomate');
})->middleware('auth', 'group');

Route::get('/reshall', function () {
    return view('reshall');
})->middleware('auth', 'group');

Route::get('/almost', 'SelectionController@almost')->middleware('auth', 'group');
Route::get('/centennial', function () {
    return view('centennial');
})->middleware('auth', 'group');
Route::get('/jenks', function () {
    return view('jenks');
})->middleware('auth', 'group');
Route::get('/davis', function () {
    return view('davis');
})->middleware('auth', 'group');
Route::get('/memorial', function () {
    return view('memorial');
})->middleware('auth', 'group');
Route::get('/wilkinson', function () {
    return view('wilkinson');
})->middleware('auth', 'group');
Route::get('/watkins', function () {
    return view('watkins');
})->middleware('auth', 'group');
Route::get('/centennial/centf1', 'CentennialController@indexcentf1')->middleware('auth', 'group');
Route::get('/centennial/centf2', 'CentennialController@indexcentf2')->middleware('auth', 'group');
Route::get('/centennial/centf3', 'CentennialController@indexcentf3')->middleware('auth', 'group');
Route::get('/centennial/centf4', 'CentennialController@indexcentf4')->middleware('auth', 'group');
Route::get('/jenks/jenksf1', 'JenksController@indexjenksf1')->middleware('auth', 'group');
Route::get('/jenks/jenksf2', 'JenksController@indexjenksf2')->middleware('auth', 'group');
Route::get('/jenks/jenksf3', 'JenksController@indexjenksf3')->middleware('auth', 'group');
Route::get('/jenks/jenksf4', 'JenksController@indexjenksf4')->middleware('auth', 'group');
Route::get('memorial/memf1', 'MemorialController@indexmemf1')->middleware('auth', 'group');
Route::get('memorial/memf2', 'MemorialController@indexmemf2')->middleware('auth', 'group');
Route::get('memorial/memf3', 'MemorialController@indexmemf3')->middleware('auth', 'group');
Route::get('memorial/memf4', 'MemorialController@indexmemf4')->middleware('auth', 'group');
Route::get('watkins/watkinslower', 'WatkinsController@indexwatkinslower')->middleware('auth', 'group');
Route::get('watkins/watkinsf1', 'WatkinsController@indexwatkinsf1')->middleware('auth', 'group');
Route::get('watkins/watkinsf2', 'WatkinsController@indexwatkinsf2')->middleware('auth', 'group');
Route::get('watkins/watkinsf3', 'WatkinsController@indexwatkinsf3')->middleware('auth', 'group');
Route::get('watkins/watkinslower', 'WatkinsController@indexwatkinslower')->middleware('auth', 'group');
Route::get('wilkinson/wilkinsonf1', 'WilkinsonController@indexwilkinsonf1')->middleware('auth', 'group');
Route::get('wilkinson/wilkinsonf2', 'WilkinsonController@indexwilkinsonf2')->middleware('auth', 'group');
Route::get('wilkinson/wilkinsonf3', 'WilkinsonController@indexwilkinsonf3')->middleware('auth', 'group');
Route::get('wilkinson/wilkinsonlower', 'WilkinsonController@indexwilkinsonlower')->middleware('auth', 'group');
Route::get('davis/davisf2', 'DavisController@indexdavisf2')->middleware('auth', 'group');
Route::get('davis/davisf3', 'DavisController@indexdavisf3')->middleware('auth', 'group');
Route::get('davis/davisf4', 'DavisController@indexdavisf4')->middleware('auth', 'group');
Route::get('davis/davislower', 'DavisController@indexdavislower')->middleware('auth', 'group');

Route::get('/aurora.edu', function () {
    return redirect()->away('https://aurora.edu/');
});

Route::resource('selection', 'SelectionController')->middleware('auth', 'group');
Route::resource('admins', 'AdminController')->middleware('auth', 'group');
Route::resource('boarding', 'BoardingGroupController')->middleware('auth', 'group');
Route::resource('buildings', 'BuildingsController')->middleware('auth', 'group');
Route::resource('floors', 'FloorController')->middleware('auth', 'group');
Route::resource('genders', 'GenderController')->middleware('auth', 'group');
Route::resource('peoples', 'PeopleToRoomWithController')->middleware('auth', 'group');
Route::resource('rooms', 'RoomController')->middleware('auth', 'group');
Route::resource('users', 'UsersController')->middleware('auth', 'group');
Route::resource('whos', 'WhoAndWhereController')->middleware('auth', 'group');
Route::resource('years', 'YearOfResidenceController')->middleware('auth', 'group');
Route::resource('roomate', 'RoommateController')->middleware('auth', 'group');

Route::get('export', 'MyController@export')->name('export');
Route::get('importExportView', 'MyController@importExportView');
Route::post('import', 'MyController@import')->name('import');
Auth::routes();



//Route::get('/selection/{room_id}', 'SelectionController@show');
