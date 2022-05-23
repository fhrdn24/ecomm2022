Langkah-Langkah Menjalankan Project:
1.Run `git clone 'link project github'
2.Run composer update
3.Buat file .env
4.copy isi file .env.example ke dalam file .env
5.Run php artisan key:generate
6.Run php artisan migrate
7.Run php artisan serve

Test menggunakan user biasa:
user@user.com ->username
users123 ->password

Test menggunakan user admin:
admin@admin.com ->username
admins123 ->password
