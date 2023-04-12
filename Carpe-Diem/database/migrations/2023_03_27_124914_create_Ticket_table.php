<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use App\Models\Ticket;

class CreateTicketTable extends Migration {

	public function up()
	{
		Schema::create('tickets', function(Blueprint $table) {
			$table->id();
            $table->unsignedBigInteger('event_id');
            $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('ticket_type');
            $table->decimal('ticket_price', 15, 2);
            $table->integer('ticket_quantity');
            $table->timestamps();

		});
	}

	public function down()
	{
		Schema::drop('tickets');
	}
}
