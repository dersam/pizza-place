<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePizzaCustomerTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('customers', function($table)
        {
            $table->increments('id');
            $table->string('name');
            $table->string('address');
            $table->string('city');
            $table->string('province');
            $table->string('postal_code');
            $table->string('phone');
            $table->timestamps();
        });

        Schema::create('pizzas', function($table)
        {
            $table->increments('id');
            $table->unsignedInteger('customer_id');
            $table->boolean('pepperoni');
            $table->boolean('olives');
            $table->boolean('sausage');
            $table->timestamps();

            $table->index('customer_id');
            $table->foreign('customer_id')->references('id')->on('customers');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::dropIfExists('pizzas');
        Schema::dropIfExists('customers');
	}

}
