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
            $table->integer('id');
            $table->string('name');
            $table->string('address');
            $table->string('city');
            $table->string('province');
            $table->string('postal_code');
            $table->timestamps();

            $table->primary('id');
        });

        Schema::create('pizzas', function($table)
        {
            $table->integer('id');
            $table->integer('customer_id');
            $table->boolean('pepperoni');
            $table->boolean('olives');
            $table->boolean('sausage');
            $table->timestamps();

            $table->primary('id');
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
