<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotifyUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('notify_users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('email');
			$table->integer('product_id')->unsigned();
			$table->timestamps();
		});
		Schema::table('notify_users', function($table) {
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
		Schema::drop('notify_users');
	}

}
