# Installation
- clone the project
```bash
git clone https://github.com/btquick-booking/laravel.git
 ```
- run this commands
```bash
composer i

npm i

cp .env.example .env

php artisan migrate --seed
```
- add stripe keys to .env file.
- make folder called private and copy your fcm private key in it and call it fcm.json.
