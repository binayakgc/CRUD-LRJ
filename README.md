# Blog

A CRUD application with create, read, update, and delete features built with Laravel and MongoDB.

## Features

- User authentication (register, login, logout)
- Role-based access control (admin, author, user)
- Blog post management (create, read, update, delete) [accessed by user if needed (assignment 1)]
- Responsive design with Bootstrap
- Dark mode support

## Requirements

- PHP 8.1+
- Composer
- Node.js and npm
- MongoDB
- Laragon
- MySQL (optional, as the project uses MongoDB)
- Git
- Visual Studio Code (or any preferred IDE)

## SetUp And Initialization of project

1. Install and set up Visual Studio Code.
2. Install Node.js
3. Install Git and create a GitHub account.
4. Install Composer
5. Install MongoDB
6. Install Laragon
7. Install MySQL (optional)

## Laravel Setup

1. Open Laragon
2. Setup new version of PHP and Apache.
3. Check the SQL configuration in Laragon
4. Go to Menu then Quick App to setup the Laravel application

## GitHub Setup

1. Create a new GitHub repository named CRUD-LRJ
2. Navigate to the blog folder and start GitBash
3. Initialize the repository:
   
   git init
   git add .
   git remote add origin https://github.com/binayakgc/CRUD-LRJ.git (branch : feature/auth-admin-panel)
   git commit -m "Initial commit"
   git push -u origin main
   

## Installation

1. Clone the repository:
   
   git clone https://github.com/binayakgc/CRUD-LRJ.git (branch : feature/auth-admin-panel)
   

2. Navigate to the project directory:
   
   cd CRUD-LRJ
   

3. Install PHP dependencies:
   
   composer install
   

4. Install JavaScript dependencies:
   
   npm install
   

5. Copy the `.env.example` file to `.env` and configure your environment variables:
   
   cp .env.example .env
   

6. Generate an application key:
   
   php artisan key:generate
   

7. Configure your MongoDB connection in the `.env` file:
   
   DB_CONNECTION=mongodb
   DB_HOST=127.0.0.1
   DB_PORT=27017
   DB_DATABASE=your_database_name
   

8. Run the database migrations:
   
   php artisan migrate
   

9. Compile assets:
   
   npm run dev
   

## Project Structure

- **Layout**: The main HTML layout is in `resources/views/layouts/app.blade.php`
- **Posts**: Post-related views are in `resources/views/posts/`
- **Routes**: Defined in `routes/web.php`
- **Controllers**: The main logic is in `app/Http/Controllers/PostController.php`
- **Models**: The Post model is defined in `app/Models/Post.php`
- **Migrations**: Database structure is defined in `database/migrations/`

## Database Setup

1. Update the `.env` file with your database configuration:
   
   DB_CONNECTION=mongodb
   DB_DATABASE=blog
   

2. Run migrations:
   
   php artisan migrate
   

## Factory And Seeder

Used to enter dummy data in the database. Run:

php artisan db:seed


## Usage

1. Start the Laravel development server:
   
   - php artisan serve
   - npm run dev  

2. Visit `http://localhost:8000` in your web browser.

3. Register a new user account or login with existing credentials.

4. Explore the application based on your user role:
   - Admins can manage all posts and users
   - Authors can create and manage their own posts
   - Users can view posts

## Customization

- Modify the `app/Http/Controllers/Auth/RegisterController.php` file to adjust user registration logic.
- Update the `app/Http/Middleware/AdminMiddleware.php` and `app/Http/Middleware/AuthorMiddleware.php` files to customize role-based access control.
- Edit views in the `resources/views` directory to change the application's appearance.


## License

This project is licensed under the MIT License and can be used for educational purpose only.

If you plan to use this project as a base for commercial purposes, please contact the project maintainers for permission.

## References

- UNE lecture videos
- [Building Your First App with Laravel: A Simple CRUD Application](https://medium.com/@ebenezeroyeku/building-your-first-app-with-laravel-a-simple-crud-application-785a25772a48)

## Acknowledgments

- Laravel - The web framework used
- Bootstrap - Frontend framework
- MongoDB - Database