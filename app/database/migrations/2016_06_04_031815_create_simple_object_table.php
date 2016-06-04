<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSimpleObjectTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('simple_object', function($table)
		{
			$table->increments('id');
			$table->string('email');
			$table->bigInteger('votes_big_integer');
			$table->boolean('confirmed');
			$table->char('name', 4);
			$table->decimal('amount', 5, 2);
			$table->double('column', 15, 8);
			$table->enum('choices', array('foo', 'bar'));
			$table->float('amount_float');
			$table->integer('votes_integer');
			$table->longText('description_long_text');
			$table->text('description');
			$table->time('sunrise');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('simple_object');
	}

}
