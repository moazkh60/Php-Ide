<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SubmittedCodes extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('submitted_codes', function(Blueprint $table)
		{
			$table->increments('code_id');
			$table->string('id');
			$table->string('code');
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
		Schema::drop('submitted_codes');
	}

}
