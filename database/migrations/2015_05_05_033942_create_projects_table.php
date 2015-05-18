<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('projects', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name_project');
			$table->integer('note_1');
			$table->integer('note_2');
			$table->integer('note_3');

			$table->integer('state_id')->unsigned();
			$table->foreign('state_id')->references('id')->on('states');

			$table->string('failure');
			$table->text('observation');
			$table->text('description');
			$table->date('date');

            $table->integer('call_id')->unsigned();
            $table->foreign('call_id')->references('id')->on('calls');

			$table->integer('option_id')->unsigned();
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
		Schema::drop('projects');
	}

}
