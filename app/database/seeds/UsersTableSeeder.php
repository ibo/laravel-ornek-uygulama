<?php

class UsersTableSeeder extends Seeder {

    public function run()
    {   
        // VERİTABANINA KAYITLAR EKLEYELİM
        DB::table('users')->insert(array(
            array(
            'username' => 'IbrahimHizlioglu',
            'email' => 'test1@gmail.com',
            'password' => Hash::make('123456'),
            'created_at' => date('Y-m-d H:i:s'),
            'created_ip' => '127.0.0.1'
            ),
            array(
            'username' => 'BarisZeytunlu',
            'email' => 'test2@gmail.com',
            'password' => Hash::make('123456'),
            'created_at' => date('Y-m-d H:i:s'),
            'created_ip' => '127.0.0.1'
            )
        ));
        
        // CONSOLE'A ÇIKTI VERELİM
        $this->command->info('users tablosuna ornek kayitlar eklendi');
    }

}