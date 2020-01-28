Promotion Coupons Generation Application
Application for generating and validating Promotion Coupons

Built using Vue + Laravel Based on MVC Architecture and CRUD functionalities

Recommended IDE - phpStorm

Installation
Clone master branch using
git clone https://github.com/GuntasKapoor/Promotion-System.git
Change to directory
cd Promotion-System
Install Composer
composer install
4.Ensure mysql server runs on local machine and has all required priviledges and then create database named 'promotions' in mysql

CREATE DATABASE promotions;
Copy .env.example file to a new file named .env
cp .env.example .env
Add the mysql username and password in .env file in DB_USERNAME and DB_PASSWORD

Generate application key:

php artisan key:generate
Migrate
php artisan migrate:fresh
Seed database using Seeder
php artisan db:seed
Install Node modules
npm install
Install Bootstrap-Vue
npm install vue bootstrap-vue bootstrap
Build
npm run dev
Start Laravel Server
php artisan serve
