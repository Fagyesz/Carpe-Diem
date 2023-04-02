<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGoogleCalendarTable extends Migration {

	public function up()
	{
		Schema::create('GoogleCalendar', function(Blueprint $table) {
			$table->increments('user_id');
		});
	}

	public function down()
	{
		Schema::drop('GoogleCalendar');
	}
}