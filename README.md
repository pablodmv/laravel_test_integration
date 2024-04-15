# Laravel Template with Breeze and AdminLTE

This is a template for a Laravel project with Breeze authentication and AdminLTE admin panel.

## Prerequisites

Before getting started, make sure you have the following installed:

-   [Laravel](https://laravel.com/docs)
-   [Breeze](https://laravel.com/docs/authentication#introduction)
-   [AdminLTE](https://adminlte.io/)

## Installation

1. Clone this repository.
2. Install the dependencies by running `composer install` and `npm install`.
3. Build assets by running `npm run build`.
4. Rename the `.env.example` file to `.env` and update the database credentials.
5. Generate the application key by running `php artisan key:generate`.
6. Migrate the database by running `php artisan migrate`.
7. Seed the database with initial data by running `php artisan db:seed`.

## Usage

To start the development server, run `php artisan serve`. You can then access the application in your browser at `http://localhost:8000`.

To log in as an administrator, use the following credentials:

-   Email: admin@admin.com
-   Password: adminadmin

## Contributing

Contributions are welcome! If you find any issues or have suggestions, please open an issue or submit a pull request.

## License

This project is licensed under the [MIT License](LICENSE).
