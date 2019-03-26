Cara menjalankan : 
- download atau clone project ini
- simpan di tempat penimpanan project (kalo di xampp di /htdocs)
- jalankan perintah 'composer install'
- buat satu file bernama '.env' dan isinya copykan dari file '.env.example'
- buat satu database (namanya bebas) contoh:crowdfunding
- ubah isi DB_NAME di file .env dengan nama databasenya, contoh:DB_NAME:crowdfunding
- ubah isi DB_USER dengan nama user database
- ubah isi DB_PASSWORD dengan passwordnya
- jalankan perintah 'php artisan migrate --seed'
- jalankan perintah 'php artisan serve'
- lalu buka browser dan ketik link 'localhost:8000'



Akun Admin : 
email = admin@gmail.com
password = admin123321
