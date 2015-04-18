<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('images', function($table)
		{
		    $table->increments('id');
		    $table->string('hash')->unique();
		    $table->string('name');
		    $table->text('mime');
		    $table->timestamps();


		});

		DB::statement("ALTER TABLE images ADD image MEDIUMBLOB");
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('images');
	}

}
