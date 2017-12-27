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

Route::get('/', 'pageController@inicio')->name('inicio');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');

Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');

Route::post('register', 'Auth\RegisterController@register');

Route::post('/registrado', 'RegistersController@registrado');

Route::get('noticia', 'pageController@noticia')->name('noticia');

Route::get('noticia2', 'pageController@noticia2')->name('noticia2');

Route::get('/home', 'HomeController@index')->name('home');

Route::post('login', 'Auth\LoginController@login');

Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Route::get ('createuser', function(){
	
	App\User::create([
		'name' => 'brazo',
		'email' => 'yeni@email.com',
		'password' => bcrypt('1234'),
		'age' => '46',
		'object' => 'zapato',
		'friend' => 'fran'

	]);
});
