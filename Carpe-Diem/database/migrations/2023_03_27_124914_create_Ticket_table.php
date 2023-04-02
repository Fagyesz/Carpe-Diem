<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTicketTable extends Migration {

	public function up()
	{
		Schema::create('Ticket', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('event_id');
			$table->integer('user_id');
			$table->string('ticket_type', 255);
			$table->decimal('ticket_price', 15);
			$table->integer('ticket_quantity');
			$table->string('qr_code', 255);
		});
	}

	public function down()
	{
		Schema::drop('Ticket');
	}
}