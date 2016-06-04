<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddBooksTopics extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('books', function($table)
		{
			$table->increments('id');
			$table->string('name', 50);
			$table->string('author', 50);
			$table->timestamps();
		});

		Schema::create('topics', function($table)
		{
			$table->increments('id');
			$table->string('name', 50);
			$table->timestamps();
		});

		Schema::create('books_topics', function($table)
		{
			$table->increments('id');
			$table->integer('book_id')->unsigned();
			$table->integer('topic_id')->unsigned();
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
		Schema::dropIfExists('books');
		Schema::dropIfExists('topics');
		Schema::dropIfExists('books_topics');
	}

}
