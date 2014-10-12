<?php
/**
 * User: Sam
 * Date: 10/12/2014
 * Time: 10:37 AM
 */

class Pizza extends Eloquent{
    protected $table = 'pizzas';
    public $primaryKey = 'id';

    public function customers(){
        return $this->hasOne('Customer');
    }
} 