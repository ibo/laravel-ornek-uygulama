## Laravel 4 Soru / Cevap Uygulaması (Örnek Proje)

Laravel Framework'e yeni başlayanlar için basit bir soru / cevap uygulaması hazırladım. 
Bol bol Türkçe yorum satırlarıyla hangi kodu niçin yazdığımızı açıklamaya çalıştım.

### Kurulum

Eğer makinenizde Composer kurulu değilse, ilk adım bunu kurmak olmalıdır. Composer kurulduktan sonra terminalden proje dizinine giderek:

```
composer install
```

komutunu çalıştırdığınızda kurulum başlayacaktır. Kurulumla ilgili detaylı bilgi için http://laravel.com/docs/installation adresini inceleyebilirsiniz.

### Uygulamanın Yapılandırılması

Laravel'in kurulumunu tamamladıktan sonra uygulamayı çalışır duruma getirmek gerekiyor. Öncelikle;

```
app/config/database.php
```
 
dosyasını açın ve;
 
``` php
'mysql' => array(
'driver'    => 'mysql',
'host'      => 'localhost',
'database'  => 'laravel_soru_cevap',
'username'  => 'root',
'password'  => 'root',
'charset'   => 'utf8',
'collation' => 'utf8_unicode_ci',
'prefix'    => '',
),
```

satırlarını çalışacağınız ortama göre düzenleyin. 
Ben veritabanı ismi olarak laravel_soru_cevap kullanmıştım. Siz de aynı isimle veritabanı oluşturabilirsiniz.
(Veritabanının UTF-8 olmasına dikkat etmenizi öneririm)

#### Migration

Veritabanını oluşturduysanız ve mysql bağlantı ayarlarınızı tamamladıysanız aşağıda ki adımları gerçekleştirerek kurulumu tamamlayabilirsiniz.

* Terminalden proje dizinine gidin
* Sırasıyla aşağıdaki komutları çalıştırın

```
php artisan migrate:install
php artisan migrate
php artisan db:seed
```

Bu komutlar sayesinde veritabanınıza ilgili tablolar oluşturulacak ve tablolara örnek kayıtlar eklenecektir.

Artık browser üzerinden Laravel projesini çalıştırabilirsiniz.
