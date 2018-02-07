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

Route::get('/', 'Landing\PageController@index');
Route::get('/about-us', 'Landing\PageController@about');



Route::get('users',['uses' => 'UsersController@index']);
Route::get('users/create',['uses' => 'UsersController@create']);
Route::post('users',['uses' => 'UsersController@store']);


/*Route::get('users', function(){
	$users =[
		'0' => [
			'firstname' => 'Leonilo jr',
			'lastname' => 'Salve',
			'location' => 'Talisay'
		],
		'1' => [
			'firstname' => 'Vergie',
			'lastname' => 'Salve',
			'location' => 'Talisay City'
		]
	];

	return $users;
});
*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
