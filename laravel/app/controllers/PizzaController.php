<?php
/**
 * User: Sam
 * Date: 10/12/2014
 * Time: 11:03 AM
 */

class PizzaController extends BaseController{

    /**
     * Display the pizza order form
     * @return \Illuminate\View\View
     */
    function orderForm(){
        return View::make('order-form');
    }

    /**
     * Display the received order.
     * @return \Illuminate\View\View
     */
    function orderReceived(){
        $validation = Validator::make(
            array(
                'name'=>Input::get('name'),
                'address'=>Input::get('address'),
                'city'=>Input::get('city'),
                'province'=>Input::get('province'),
                'postal_code'=>Input::get('postal_code'),
                'phone'=>Input::get('phone'),
                'pepperoni'=>Input::get('pepperoni'),
                'olives'=>Input::get('olives'),
                'sausage'=>Input::get('sausage')
            ),
            array(
                'name'=>'required',
                'address'=>'required',
                'city'=>'required',
                'province'=>'required',
                'postal_code'=>'required',
                'phone'=>'required',
            )
        );

        if($validation->fails()){
            Log::debug($validation->failed());
            return View::make('order-form');
        }

        //Write customer info to DB
        $customer = new Customer(array(
            'name'=>Input::get('name'),
            'address'=>Input::get('address'),
            'city'=>Input::get('city'),
            'province'=>Input::get('province'),
            'postal_code'=>Input::get('postal_code'),
            'phone'=>Input::get('phone')
        ));

        //Write pizza info to DB
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