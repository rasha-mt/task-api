<?php

use Illuminate\Http\Request;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
///Route::get('/test','TasksController@obtainAccessToken');
Route::get('/tasks','TasksController@obtainAllTasks');
Route::get('/task','TasksController@getOneTask');
Route::get('/getTask/{id?}','TasksController@getThisTask');
Route::post('/task','TasksController@postOneTask');

Route::get('/task/create','TasksController@getCreatedTask');
Route::post('/task/create','TasksController@postCreatedTask');

Route::get('/task/update','TasksController@getUpdatedTask');
Route::post('/task/update','TasksController@postUpdatedTask');
Route::put('/task/update','TasksController@putUpdatedTask');

Route::get('/task/delete','TasksController@getRemovedTask');
Route::post('/task/delete','TasksController@postRemovedTask');
Route::delete('/task/delete','TasksController@deleteRemovedTask');
/////////////////////////////////////////////////////////////////////////////
////////////////template routes//////////////////////
Route::get('/templates','TemplateController@obtainAllTemplates');
Route::get('/template','TemplateController@getOneTemplate');
Route::get('/getTemplate/{id?}','TemplateController@getThisTemplate');
Route::post('/template','TemplateController@postOneTemplate');

Route::get('/template/create','TemplateController@getCreatedTemplate');
Route::post('/template/create','TemplateController@postCreatedTemplate');

Route::get('/template/update','TemplateController@getUpdatedTemplate');
Route::post('/template/update','TemplateController@postUpdatedTemplate');
Route::put('/template/update','TemplateController@putUpdatedTemplate');

Route::get('/template/delete','TemplateController@getRemovedTemplate');
Route::post('/template/delete','TemplateController@postRemovedTemplate');
Route::delete('/template/delete','TemplateController@deleteRemovedTemplate');
////////////////////////////////
Route::get('/',function(){
return view('main');
});
