<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEventTable extends Migration {

	public function up()
	{
		Schema::create('Event', function(Blueprint $table) {
			$table->increments('id');
			$table->string('title', 255);
			$table->text('description');
			$table->datetime('start_time');
			$table->datetime('end_time');
			$table->string('location', 255);
			$table->string('organizer', 255);
			$table->decimal('ticket_price', 15);
			$table->integer('tickets_available');
		});
	}

	public function down()
	{
		Schema::drop('Event');
	}
}