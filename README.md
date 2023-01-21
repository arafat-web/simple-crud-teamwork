# Simple CRUD Operation
Trying to make a simple project by team contribution

[![Stargazers](https://img.shields.io/github/stars/arafat-web/simple-crud-teamwork?style=for-the-badge)](https://github.com/arafat-web/simple-crud-teamwork/stargazers)
[![Issues](https://img.shields.io/github/issues/arafat-web/simple-crud-teamwork?style=for-the-badge)](https://github.com/arafat-web/simple-crud-teamwork)
[![MIT License](https://img.shields.io/github/license/arafat-web/simple-crud-teamwork?style=for-the-badge)](https://github.com/arafat-web/simple-crud-teamwork/issues)



# Getting started

## Installation

Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/9.x)

Clone the repository

    git clone https://github.com/arafat-web/simple-crud-teamwork.git

Switch to the repo folder

    cd simple-crud-teamwork

Install all the dependencies using composer

    composer install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate

Generate a new JWT authentication secret key

    php artisan jwt:generate

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000


 <hr>

 # Thanks
