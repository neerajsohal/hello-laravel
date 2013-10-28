<?php

use Illuminate\Database\Migrations\Migration;

class CreateDockets extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('dockets', function($table) {
			$table->bigIncrements('id');
			$table->string('name', 140);
			$table->string('description', 2048);
			$table->timestamps();
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::drop('dockets');
	}

}


