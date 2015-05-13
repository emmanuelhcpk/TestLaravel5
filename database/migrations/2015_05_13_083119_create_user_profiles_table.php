<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProfilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('profiles', function(Blueprint $table)
		{
			
			$table->increments('id');
			
			$table->mediumText('bio')->nullable();
			$table->string('twitter')->nullable();
			$table->mediumText('website')->nullable();
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')
			->references('id')
			->on('users')
			->onDelete('cascade');
			$table->date('birthdate');
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
		Schema::drop('profiles');
	}

}
