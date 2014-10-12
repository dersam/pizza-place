<?php
/**
 * User: Sam
 * Date: 10/12/2014
 * Time: 10:38 AM
 */

class Customer extends Eloquent{
    protected $table = 'customers';
    public $primaryKey = 'id';

    public function pizzas(){
        return $this->hasMany('Pizza');
    }
} 