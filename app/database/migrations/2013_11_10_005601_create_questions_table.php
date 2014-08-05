<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        
                Schema::create('questions', function(Blueprint $table)
		{
                        $table->engine = 'InnoDB';
                        
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->string('title', 256);
			$table->text('content');
			$table->dateTime('created_at');
			$table->dateTime('updated_at');
                        $table->string('created_ip', 15);	
                        
                        $table->foreign('user_id')->references('id')->on('users');
		});
        	
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('questions');
	}

}