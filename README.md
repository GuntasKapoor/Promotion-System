## Promotion Coupons Generation Application
Application for generating and validating Promotion Coupons

Built using Vue + Laravel Based on MVC Architecture and CRUD functionalities

Recommended IDE - phpStorm

Installation
1. Clone repo
````
git clone https://github.com/GuntasKapoor/Promotion-System.git
````

2. Change to directory
````
cd Promotion-System
````

3. Install Composer
````
composer install
````

4.Ensure mysql server runs on local machine and has all required priviledges and then create database named 'promotions' in mysql
````
CREATE DATABASE promotions;
````
5. Copy .env.example file to a new file named .env
````
cp .env.example .env
````

6. Add the mysql username and password in .env file in DB_USERNAME and DB_PASSWORD

7. Generate application key:
````
php artisan key:generate
````

8. Migrate
````
php artisan migrate:fresh
````

9. Seed database using Seeder
````
php artisan db:seed
````

10. Install Node modules
````
npm install
````

11. Install Bootstrap-Vue
````
npm install vue bootstrap-vue bootstrap
````

12. Build
````
npm run dev
````

13. Start Laravel Server
````
php artisan serve
````
