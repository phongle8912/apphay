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
			$table->string('short_description', 255);
			$table->string('meta_desc', 160);
			$table->string('keywords', 160);
			$table->text('code');
			$table->string('image');
			$table->string('script', 255);
			$table->enum('status', array('active', 'inactive'))->default('active');
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
