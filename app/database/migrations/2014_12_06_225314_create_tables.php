<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		# Create the users table
		Schema::create('users', function($table) {

			# AI, PK
			$table->increments('id');

			# created_at, updated_at columns
			$table->timestamps();

			# General data 			
			$table->string('email')->unique();
			$table->string('remember_token', 100);
			$table->string('password');

		});		
		# Create the items table 
		Schema::create('items', function($table) {

			#AI, PK
			$table->increments('id');

			# created_at, updated_at columns
			$table->timestamps();

			# General data
			$table->string('name');
			$table->string('washing_instructions');
			$table->string('drying_instructions');
			$table->string('color');
			$table->integer('user_id')->unsigned();

			# Define foreign keys
			$table->foreign('user_id')->references('id')->on('users');

		});



	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
		Schema::drop('items');
	}

}
