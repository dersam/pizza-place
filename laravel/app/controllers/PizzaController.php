<?php
/**
 * User: Sam
 * Date: 10/12/2014
 * Time: 11:03 AM
 */

class PizzaController extends BaseController{
    function orderForm(){
        return View::make('order-form');
    }

    function orderReceived(){
        $customer = new Customer(array(
            'name'=>Input::get('name'),
            'address'=>Input::get('address'),
            'city'=>Input::get('city'),
            'province'=>Input::get('province'),
            'postal_code'=>Input::get('postal_code'),
            'phone'=>Input::get('phone')
        ));

        $pizza = new Pizza(array(
            'customer_id'=>$customer->id,
            'pepperoni'=>Input::get('pepperoni')=='on'?1:0,
            'olives'=>Input::get('olives')=='on'?1:0,
            'sausage'=>Input::get('sausage')=='on'?1:0
        ));

        return View::make('order-complete',array(
            'pizza'=>$pizza,
            'customer'=>$customer
        ));
    }
} 