<?php

class CommentsTableSeeder extends Seeder {

    public function run()
    {
        // TABLOYU TEMİZLEYELİM
        DB::table('comments')->truncate();
        
        // CONSOLE'A ÇIKTI VERELİM
        $this->command->info('comments tablosu resetlendi');
        
        // VERİTABANINA KAYITLAR EKLEYELİM
        DB::table('comments')->insert(array(
            array(
            'user_id' => 1,
            'question_id' => rand(1,15),
            'comment' => 'Lorem Ipsum Dolor Sit Amet...',
            'created_at' => date('Y-m-d H:i:s'),
            'created_ip' => '127.0.0.1'
            ),
            array(
            'user_id' => 1,
            'question_id' => rand(1,15),
            'comment' =>' Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'created_at' => date('Y-m-d H:i:s'),
            'created_ip' => '127.0.0.1'
            ),
            array(
            'user_id' => 1,
            'question_id' => rand(1,15),
            'comment' => 'text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard',
            'created_at' => date('Y-m-d H:i:s'),
            'created_ip' => '127.0.0.1'
            ),
            array(
            'user_id' => 1,
            'question_id' => rand(1,15),
            'comment' =>' dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'created_at' => date('Y-m-d H:i:s'),
            'created_ip' => '127.0.0.1'
            ),
            array(
            'user_id' => 1,
            'question_id' => rand(1,15),
            'comment' => '1500s, when an unknown printer took a galley of type and scrambled it ',
            'created_at' => date('Y-m-d H:i:s'),
            'created_ip' => '127.0.0.1'
            ),
            array(
            'user_id' => 1,
            'question_id' => rand(1,15),
            'comment' =>' Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'created_at' => date('Y-m-d H:i:s'),
            'created_ip' => '127.0.0.1'
            ),
            array(
            'user_id' => 1,
            'question_id' => rand(1,15),
            'comment' => 'has been the industrys standard dummy text ever since the 1500s!',
            'created_at' => date('Y-m-d H:i:s'),
            'created_ip' => '127.0.0.1'
            ),
            array(
            'user_id' => 1,
            'question_id' => rand(1,15),
            'comment' =>'It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'created_at' => date('Y-m-d H:i:s'),
            'created_ip' => '127.0.0.1'
            ),
            array(
            'user_id' => 1,
            'question_id' => rand(1,15),
            'comment' => 'Lorem Ipsum Dolor Sit Amet...',
            'created_at' => date('Y-m-d H:i:s'),
            'created_ip' => '127.0.0.1'
            ),
            array(
            'user_id' => 1,
            'question_id' => rand(1,15),
            'comment' =>' Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'created_at' => date('Y-m-d H:i:s'),
            'created_ip' => '127.0.0.1'
            ),
            array(
            'user_id' => 1,
            'question_id' => rand(1,15),
            'comment' => 'text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard',
            'created_at' => date('Y-m-d H:i:s'),
            'created_ip' => '127.0.0.1'
            ),
            array(
            'user_id' => 1,
            'question_id' => rand(1,15),
            'comment' =>' dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'created_at' => date('Y-m-d H:i:s'),
            'created_ip' => '127.0.0.1'
            ),
            array(
            'user_id' => 1,
            'question_id' => rand(1,15),
            'comment' => '1500s, when an unknown printer took a galley of type and scrambled it ',
            'created_at' => date('Y-m-d H:i:s'),
            'created_ip' => '127.0.0.1'
            ),
            array(
            'user_id' => 1,
            'question_id' => rand(1,15),
            'comment' =>' Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'created_at' => date('Y-m-d H:i:s'),
            'created_ip' => '127.0.0.1'
            ),
            array(
            'user_id' => 1,
            'question_id' => rand(1,15),
            'comment' => 'has been the industrys standard dummy text ever since the 1500s!',
            'created_at' => date('Y-m-d H:i:s'),
            'created_ip' => '127.0.0.1'
            ),
            array(
            'user_id' => 1,
            'question_id' => rand(1,15),
            'comment' =>'It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'created_at' => date('Y-m-d H:i:s'),
            'created_ip' => '127.0.0.1'
            )
        ));
        
        // CONSOLE'A ÇIKTI VERELİM
        $this->command->info('comments tablosuna ornek kayitlar eklendi');
    }

}