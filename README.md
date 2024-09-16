# Blog Application Backend

A robust backend for a blog application built with Laravel and MongoDB, featuring user authentication, role-based access control, and RESTful API endpoints.

## Features

- User authentication (register, login, logout)
- Role-based access control (admin, author, user)
- Blog post management (create, read, update, delete)
- MongoDB integration for data storage
- RESTful API for frontend communication
- Responsive admin panel with Bootstrap
- Dark mode support in admin panel

## Requirements

- PHP 8.1+
- Composer
- MongoDB
- Laragon (or any preferred local development environment)
- Git

## Setup and Installation

1. Clone the repository:
   ```
   git clone https://github.com/binayakgc/CRUD-LRJ.git
   cd CRUD-LRJ
   ```

2. Install PHP dependencies:
   ```
   composer install
   ```

3. Copy the `.env.example` file to `.env` and configure your environment variables:
   ```
   cp .env.example .env
   ```

4. Generate an application key:
   ```
   php artisan key:generate
   ```

5. Configure your MongoDB connection in the `.env` file:
   ```
   DB_CONNECTION=mongodb
   DB_HOST=127.0.0.1
   DB_PORT=27017
   DB_DATABASE=your_database_name
   ```

6. Run the database migrations:
   ```
   php artisan migrate
   ```

7. (Optional) Seed the database with sample data:
   ```
   php artisan db:seed
   ```

## Running the Application

Start the Laravel development server:
```
php artisan serve
```

The admin panel will be accessible at `http://localhost:8000`.

## API Endpoints

- GET `/api/posts`: Retrieve all blog posts
- GET `/api/posts/{id}`: Retrieve a specific blog post
- POST `/api/posts`: Create a new blog post (requires authentication)
- PUT `/api/posts/{id}`: Update an existing blog post (requires authentication)
- DELETE `/api/posts/{id}`: Delete a blog post (requires authentication)

## Project Structure

- **Layout**: `resources/views/layouts/app.blade.php`
- **Post Views**: `resources/views/posts/`
- **Routes**: `routes/web.php` and `routes/api.php`
- **Controllers**: `app/Http/Controllers/PostController.php`
- **Models**: `app/Models/Post.php`
- **Migrations**: `database/migrations/`

## Customization

- User registration logic: `app/Http/Controllers/Auth/RegisterController.php`
- Role-based middleware: `app/Http/Middleware/AdminMiddleware.php` and `app/Http/Middleware/AuthorMiddleware.php`
- View customization: `resources/views/` directory

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Acknowledgments

- Laravel - The web framework used
- MongoDB - Database
- Bootstrap - Frontend framework for admin panel
