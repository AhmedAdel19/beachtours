<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

$active_multilang = defined('CNF_MULTILANG') ? CNF_LANG : 'en'; 
 \App::setLocale($active_multilang);
 if (defined('CNF_MULTILANG') && CNF_MULTILANG == '1') {

    $lang = (\Session::get('lang') != "" ? \Session::get('lang') : CNF_LANG);
    \App::setLocale($lang);
}   

Route::get('/', 'HomeController@index');
Route::controller('home', 'HomeController');
Route::controller('blog', 'PostController');
Route::controller('post', 'PostController');

Route::controller('/user', 'UserController');
include('pageroutes.php');
include('moduleroutes.php');

Route::get('/restric',function(){

	return view('errors.blocked');

});

Route::resource('mmbapi', 'MmbapiController'); 
Route::group(['middleware' => 'auth'], function()
{

	Route::get('core/elfinder', 'Core\ElfinderController@getIndex');
	Route::post('core/elfinder', 'Core\ElfinderController@getIndex'); 
	Route::controller('/dashboard', 'DashboardController');
	Route::controllers([
		'core/users'		=> 'Core\UsersController',
		'notification'		=> 'NotificationController',
		'core/logs'			=> 'Core\LogsController',
		'core/pages' 		=> 'Core\PagesController',
		'core/groups' 		=> 'Core\GroupsController',
		'core/template' 	=> 'Core\TemplateController',
		'core/posts'		=> 'Core\PostsController',
		'core/forms'		=> 'Core\FormsController'
	]);

});	

Route::group(['middleware' => 'auth' , 'middleware'=>'mmbauth'], function()
{

	Route::controllers([
		'core/menu'		    => 'Mmb\MenuController',
		'core/config' 		=> 'Mmb\ConfigController',
		'mmb/module' 		=> 'Mmb\ModuleController',
		'core/tables'		=> 'Mmb\TablesController',
		'core/code'		    => 'Mmb\CodeController',
		'core/rac'			=> 'Mmb\RacController'
	]);			


});





