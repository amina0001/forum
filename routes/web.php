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

//Route::get('/', function () {
//    return view('welcome');
//});
//Route::get('/form', function () {
 //   return view('formulaire');
//});

//Route::post('/confirm', function () {
 //   return view('confirmation');
//});
// Route::get('/acceuil', function () {
// 	$data = ['nom'=>"amina",'prenom'=>"rais",'date' => date("H:i:s")];
// 	return view('acceuil',$data);
// });



Route::get('/','AcceuilController@afficherAcceuil'
 );

Route::get('form','ContactController@afficherFormulaire'
 );


Route::post('confirm','ContactController@AjouterContact');
Route::post('confirm','ContactController@AjouterContact');


Route::get('liste','ContactController@afficherContact');
Route::get('info/{name}','ContactController@afficherinfoContact');
Route::get('delete/{name}','ContactController@deleteinfoContact');

//Route::get('/test', function () {
//	$name=DB::Table('peoples')->get();
 //  dd($name);
    //return view('test',compact('name'));
//});
//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
