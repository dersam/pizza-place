<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array('as'=>'order-form',function()
{
	return View::make('order-form',array(
        'title'=>"Sal's Pizza"
    ));
}));

Route::post('/', array('as'=>'order-complete',function(){

}));