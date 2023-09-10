<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

GADIEL is a Web App based to Manage Invoice, Inventory Levels, Orders and Customers.


 - Database: Mysql
 - Server: Linux

## Installation Steps

### Notes: 
- If you are working with docker from windows:
  -  Be sure of have WSL installed
  -  Be sure of have enabled these options in Docker -> Settings -> Resources -> WSL Integration:
     -  "Enable integration with my default WSL distro"
     -  "Ubuntu"

### Steps:
1. Download the project from the repository to the working path.
2. In the project working path change the, create a copy of the file `.env.backup` and rename to `.env`
3. Start Docker Engine
4. Open the WSL Ubuntu Terminal
5. Navigate to the project path
6. Start the Sail Laravel Application
    ```php
    ./vendor/bin/sail up
    ```
7. Configure the Sail Shell Alias 
    ```
    alias sail='[ -f sail ] && sh sail || sh vendor/bin/sail'
    ```
8. Generate the environment configuration file
    ```
    sail php artisan sail:install
    ```
9. Generate the Application Key
    ```
    sail php artisan key:generate
    ```
