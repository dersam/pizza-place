<?php
/**
 * User: Sam
 * Date: 10/12/2014
 * Time: 10:37 AM
 */

class Pizza extends Eloquent{
    protected $table = 'pizzas';
    public $primaryKey = 'id';
    protected $fillable = array('customer_id','pepperoni','olives','sausage');

    public function customers(){
        return $this->hasOne('Customer');
    }
} 