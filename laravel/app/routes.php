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

//Displays the order form
Route::get('/', array('as'=>'order-form','uses'=>'PizzaController@orderForm'));

//Displays the completed order
Route::post('/', array('as'=>'order-complete','uses'=>'PizzaController@orderReceived'));