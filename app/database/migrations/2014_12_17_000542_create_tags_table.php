<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		# Create the tags table
		Schema::create('tags', function($table) {
			
			# AI, PK
			$table->increments('id');
			
			# created_at, updated_at columns
			$table->timestamps();
			
			# General data....
			$table->string('name', 64);
			
			# Define foreign keys...
			# none needed
			
		});

		# Create pivot table connecting `books` and `tags`
		Schema::create('item_tag', function($table) {

			# AI, PK
			# none needed

			# General data...
			$table->integer('item_id')->unsigned();
			$table->integer('tag_id')->unsigned();
			
			# Define foreign keys...
			$table->foreign('item_id')->references('id')->on('items');
			$table->foreign('tag_id')->references('id')->on('tags');
			
		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tags');
		Schema::drop('item_tag');
	}

}
