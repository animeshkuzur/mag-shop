<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('transaction_details', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('transaction_id')->unsigned();
			$table->integer('product_id')->unsigned();
			$table->timestamps();
		});
		Schema::table('transaction_details', function($table) {
       		$table->foreign('product_id')->references('id')->on('products');
       		$table->foreign('transaction_id')->references('id')->on('transactions');
   		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('transaction__details');
	}

}
