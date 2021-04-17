<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

-   [Simple, fast routing engine](https://laravel.com/docs/routing).
-   [Powerful dependency injection container](https://laravel.com/docs/container).
-   Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
-   Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
-   Database agnostic [schema migrations](https://laravel.com/docs/migrations).
-   [Robust background job processing](https://laravel.com/docs/queues).
-   [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Instruction to clone and run in local devices/computer

## Step 1: Download zip file or clone the project from github

git clone https://github.com/bhattaraimadhu56/madhu-rit_laravel_api_auth.git

## Step2: Go to aplication folder

cd madhu-rit_laravel_api_auth

## Step3: Install or Update the composer

composer install

## Step4: (if there is no .env file)==> copy .env.example file to .env file

copy .env.example .env

## Step5: Go to .env file and give database name

e.g :
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_madhu_rit
DB_USERNAME=root
DB_PASSWORD=

## Step6: Generate application key

php artisan key:generate

## Step7: Migrate the data [Make sure local server (e.g Apache) is running ==> (Install Xampp or Wampp in computer)]

Make sure to make a database with the same name as provided in .env file
in my case database name is "db_madhu_rit"

php artisan migrate

## Step8: Run the application

php artisan serve

## Step10: Run the Postman application

At Postman click on "import" and upload
"Postman documentation_madhu_rit_laravel_api_auth.postman_collection.json" which is attached with this application.

## Step10: First Register the user then you can login in the application

While doing this process it will generate a token which we will use later for
creating , updating and deleting the item.
Follow the different links as provided in postman document which was imported just before in step 9.

Thanks
