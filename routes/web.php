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
Route::get('/page', function () {
	dd('key');
});
Route::get('form',function (){
    return view('form');
});
/*Route::post('/comments',function (){
    print_r($_POST);
});*/
/*Запрос с выбором get, post и т.д.*/
/*Route::match(['get','post'],'/comments',function ()
{
	print_r($_POST);
});*/
/*запрос с любым методом*/
Route::any('/comments',['as'=>'home',function ()
{
	print_r($_POST);
}]);
Route::any('test', function ()
{
	return view('test');
});
Route::get('/testtwo/{cat}/{id}', function ($var1,$var2)
{
	echo '<pre>';
	echo $var1.'<|>'.$var2;
	echo '</pre>';
})->where(['id'=>'[0-9]+','cat'=>'[A-Za-z]+']);

Route::group(['prefix'=>'admin'], function () {
	Route::get('page/create', function()
	{
		echo route('home');
	});
	Route::get('page/edit', function()
	{
		echo 'admin/page/edit';
	});			
});
Route::get('/about/{id}','FirstController@index');

Route::get('/articles', ['uses'=>'Admin\Core@getArticles','as'=>'articles']);
Route::get('/article/{id}', ['uses'=>'Admin\Core@getArticle','as'=>'article']);
Route::get('/articletwo', ['uses'=>'Admin\Core@getArticletwo','as'=>'articletwo']);
//Route::resource('pages','Admin\CoreController');
