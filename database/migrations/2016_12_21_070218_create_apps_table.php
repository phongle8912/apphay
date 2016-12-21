<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('apps', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 255);
			$table->string('slug', 255);
			$table->text('description');
			$table->string('meta_desc', 160);
			$table->string('keywords', 160);
			$table->text('content');
			$table->string('image');
			$table->timestamp('created_at');
			$table->datetime('updated_at');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::drop('apps');
	}

}
