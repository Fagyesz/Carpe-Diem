<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEventTable extends Migration {

	public function up()
	{
		Schema::create('events', function(Blueprint $table) {
			$table->id();
			$table->string('title', 255);
            $table->text('description');
			$table->string('location', 255);
			$table->unsignedBigInteger('organizer_id');
            $table->foreign('organizer_id')->references('id')->on('users')->onDelete('cascade');
			$table->decimal('ticket_price', 15);
			$table->integer('tickets_available');

			$table->datetime('start_time');
			$table->datetime('end_time');
            $table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('Event');
	}
}
