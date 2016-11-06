<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cart_items', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('cart_id')->unsigned();
			$table->integer('product_id')->unsigned();
			$table->timestamps();
		});
		Schema::table('cart_items', function($table) {
       		$table->foreign('cart_id')->references('id')->on('carts');
       		$table->foreign('product_id')->references('id')->on('products');
   		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cart_items');
	}

}
