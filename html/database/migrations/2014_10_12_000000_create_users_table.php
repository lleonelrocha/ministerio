<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('firstName');
			$table->string('lastName');
			
			$table->string('email')->unique();
			$table->string('password', 60);

			$table->string('phoneNumber');
			$table->string('country');
			$table->string('state');
			$table->string('imageUrl',255);
            $table->integer('id_profile')->unsigned();
            $table->foreign('id_profile')
                ->references('id')->on('profiles')
                ->onDelete('cascade');

			$table->rememberToken();
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
		Schema::drop('users');
	}

}
