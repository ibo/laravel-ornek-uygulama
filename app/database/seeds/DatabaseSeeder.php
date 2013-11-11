<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UsersTableSeeder');
                $this->command->info('users table : OK');
                
                $this->call('QuestionsTableSeeder');
                $this->command->info('questions table : OK');
                
                $this->call('CommentsTableSeeder');
                $this->command->info('comments table : OK');
	}

}