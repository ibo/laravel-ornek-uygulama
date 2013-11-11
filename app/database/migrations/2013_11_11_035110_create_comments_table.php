<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comments', function(Blueprint $table)
		{
                        $table->engine = 'InnoDB';
                        
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->integer('question_id')->unsigned();
			$table->text('comment');
			$table->dateTime('created_at');
			$table->dateTime('updated_at');
                        $table->string('created_ip', 15);	
                        
                        $table->foreign('user_id')->references('id')->on('users');
                        $table->foreign('question_id')->references('id')->on('questions');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('comments');
	}

}