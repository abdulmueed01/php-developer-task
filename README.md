# PHP Developer Interview Task

This is a Laravel-based task management application built as part of a PHP developer interview test. It includes authentication, profile management, and task management functionality.

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/yourusername/php-developer-task.git
   ```

2. Install dependencies:
   ```bash
   composer install
   ```

3. Set up your `.env` file:
   ```bash
   cp .env.example .env
   ```

4. Generate the application key:
   ```bash
   php artisan key:generate
   ```

5. Run migrations and seed the database (if applicable):
   ```bash
   php artisan migrate --seed
   ```

## Technologies Used
- PHP
- Laravel
- MySQL
- Blade Templates
- Bootstrap

## Running the Application

- Serve the application locally with the built-in Laravel server:
  ```bash
  php artisan serve
  ```

- Access the app at `http://localhost:8000`.

## License
- This project is licensed under the MIT License.
