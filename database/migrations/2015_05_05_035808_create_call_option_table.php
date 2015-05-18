<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCallOptionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('call_option', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('call_id')->unsigned();
			$table->foreign('call_id')->references('id')->on('calls');
			$table->integer('option_id')->unsigned();
			$table->foreign('option_id')->references('id')->on('options');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('call_option');
	}

}
