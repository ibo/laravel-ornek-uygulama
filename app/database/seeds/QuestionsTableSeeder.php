<?php

class QuestionsTableSeeder extends Seeder {

    public function run()
    {
        // VERİTABANINA KAYITLAR EKLEYELİM
        DB::table('questions')->insert(array(
            array(
            'user_id' => 1,
            'title' => 'MVC Nedir? Avantajları Nelerdir?',
            'content' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English.',
            'created_at' => date('Y-m-d H:i:s'),
            'created_ip' => '127.0.0.1'
            ),
            array(
            'user_id' => 2,
            'title' => 'PHP 5.5 İle Hangi Yenilikler Geldi?',
            'content' => 'Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. ',
            'created_at' => date('Y-m-d H:i:s'),
            'created_ip' => '127.0.0.1'
            ),
            array(
            'user_id' => 1,
            'title' => 'Daha Önce NodeJs İle Proje Geliştiren Var mı?',
            'content' => 'The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English.',
            'created_at' => date('Y-m-d H:i:s'),
            'created_ip' => '127.0.0.1'
            ),
            array(
            'user_id' => 1,
            'title' => 'Bir Proje İçin Algoritma Yardımına İhtiyacım Var',
            'content' => 'More-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English.',
            'created_at' => date('Y-m-d H:i:s'),
            'created_ip' => '127.0.0.1'
            ),
            array(
            'user_id' => 1,
            'title' => 'Hangi Framework İle Proje Geliştiriyorsunuz?',
            'content' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English.',
            'created_at' => date('Y-m-d H:i:s'),
            'created_ip' => '127.0.0.1'
            ),
            array(
            'user_id' => 2,
            'title' => 'Design Pattern Önerisi Olan Var Mı?',
            'content' => 'Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. ',
            'created_at' => date('Y-m-d H:i:s'),
            'created_ip' => '127.0.0.1'
            ),
            array(
            'user_id' => 1,
            'title' => 'PSR Standartlarını Dikkate Alıyor Musunuz?',
            'content' => 'The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English.',
            'created_at' => date('Y-m-d H:i:s'),
            'created_ip' => '127.0.0.1'
            ),
            array(
            'user_id' => 1,
            'title' => 'Bu Proje İçin MongoDB ve Redis Arasında Kaldım. Sizce Hangisi? ',
            'content' => 'More-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English.',
            'created_at' => date('Y-m-d H:i:s'),
            'created_ip' => '127.0.0.1'
            ),
            array(
            'user_id' => 2,
            'title' => 'NodeJS Bu İş İçin Uygun Mu?',
            'content' => 'Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. ',
            'created_at' => date('Y-m-d H:i:s'),
            'created_ip' => '127.0.0.1'
            ),
            array(
            'user_id' => 1,
            'title' => 'Implement Ettiğim Interface İle İlgili Sorun Yaşıyorum. Yardımcı  Olur Musunuz?',
            'content' => 'The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English.',
            'created_at' => date('Y-m-d H:i:s'),
            'created_ip' => '127.0.0.1'
            ),
            array(
            'user_id' => 1,
            'title' => 'Bu Yöntem Doğru Mu?',
            'content' => 'More-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English.',
            'created_at' => date('Y-m-d H:i:s'),
            'created_ip' => '127.0.0.1'
            ),
            array(
            'user_id' => 1,
            'title' => 'NameSpace Kullanınca Sorun Yaşıyorum',
            'content' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English.',
            'created_at' => date('Y-m-d H:i:s'),
            'created_ip' => '127.0.0.1'
            ),
            array(
            'user_id' => 2,
            'title' => 'Resim İşlemleri İçin Hangi Kütüphaneyi Önerirsiniz?',
            'content' => 'Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. ',
            'created_at' => date('Y-m-d H:i:s'),
            'created_ip' => '127.0.0.1'
            ),
            array(
            'user_id' => 1,
            'title' => 'GitHub Adresleriniz Nedir? Aktif Olarak Kullanıyor Mıusunuz?',
            'content' => 'The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English.',
            'created_at' => date('Y-m-d H:i:s'),
            'created_ip' => '127.0.0.1'
            ),
            array(
            'user_id' => 1,
            'title' => 'Önceki Yazılımcı Projeyi Çok Kötü Kodlamış. Refactoring İçin Yardım Lazım',
            'content' => 'More-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English.',
            'created_at' => date('Y-m-d H:i:s'),
            'created_ip' => '127.0.0.1'
            )
        ));
        
        // CONSOLE'A ÇIKTI VERELİM
        $this->command->info('questions tablosuna ornek kayitlar eklendi');
    }

}