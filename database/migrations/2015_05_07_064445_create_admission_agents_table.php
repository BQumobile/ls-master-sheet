<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdmissionAgentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('admission_agents', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('name');
            $table->string('abbreviations');
            $table->string('city');
            $table->string('country');
            $table->string('email');
            $table->integer('admission_manager_id');
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
		Schema::drop('admission_agents');
	}

}