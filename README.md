<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
  </a>
</p>

<p align="center">
  <a href="https://github.com/laravel/framework/actions">
    <img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/l/laravel/framework" alt="License">
  </a>
</p>

## About Laravel

### Simple Blog App

A simple blog application built with Laravel 11. This project demonstrates basic CRUD (Create, Read, Update, Delete) operations for managing blog posts.

#### Features

- User authentication
- Create, edit, and delete blog posts
- List and view individual blog posts
- Simple and clean design

## Installation

### Prerequisites

- PHP 8.1 or higher
- Composer
- Laravel 11
- MySQL or other supported database

### Setup

1. **Clone the repository:**

    ```bash
    git clone https://github.com/YousefABDELRAZEK/simple-blog-app.git
    cd simple-blog-app
    ```

2. **Install dependencies:**

    ```bash
    composer install
    ```

3. **Set up the environment:**

    Copy the `.env.example` file to `.env`:

    ```bash
    cp .env.example .env
    ```

    Open the `.env` file and configure your database settings.

4. **Generate the application key:**

    ```bash
    php artisan key:generate
    ```

5. **Run the migrations:**

    ```bash
    php artisan migrate
    ```

6. **Seed the database (optional):**

    If you have seed data, run:

    ```bash
    php artisan db:seed
    ```

7. **Start the development server:**

    ```bash
    php artisan serve
    ```

    Your application should now be running at `http://localhost:8000`.

## Folder Structure

- `app/Models/` - Contains the Eloquent models.
- `app/Http/Controllers/` - Contains the controllers.
- `resources/views/` - Contains the Blade templates.
- `routes/web.php` - Contains the web routes.

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
