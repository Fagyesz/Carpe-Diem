<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserTable extends Migration {

	public function up()
	{
		Schema::create('user', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 255);
			$table->string('email', 255);
			$table->string('passwor', 255);
		});
	}

	public function down()
	{
		Schema::drop('user');
	}
}