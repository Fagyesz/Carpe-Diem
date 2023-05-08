<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTicketScannerTable extends Migration {

	public function up()
	{
		Schema::create('TicketScanner', function(Blueprint $table) {
			$table->increments('ticket_id');
		});
	}

	public function down()
	{
		Schema::drop('TicketScanner');
	}
}