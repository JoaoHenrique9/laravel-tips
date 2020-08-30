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
//Route::verb('uri','controller@moth')->name('rota.name');

Route::group(['namespace' => 'Form'],function(){
	/*GET*/
Route::get('usuarios','testController@listAllUsers')->name('users.listAll');

Route::get('usuarios/novo','testController@formAddUser')->name('users.formAddUser');

Route::get('usuarios/editar/{user}','TestController@formEditUser')->name('users.formEditUser');


Route::get('usuarios/{user}','testController@listUser')->name('users.list');

/*POST*/
Route::post('usuarios/store', 'testController@storeUser')->name('users.store');

/*PUT/PATCH*/
Route::put('usuarios/edit/{user}','testController@edit')->name('users.edit');

/*DELETE*/
Route::delete('usuarios/destroy/{user}','testController@destroy')->name('user.destroy');

});
