# blog

CURD application with create, update, edit and delete features.

## SetUp And Initialization of project
Install and set up Visual Studio Code.
Install Node.js
Install Git and create a GitHub account.
Install Composer
Install MongoDB
Install Laragon
Install Mysql

## Laravel Setup

Open Laragon
Setup new version of PHP and Apache.
And also check the sql of laragon
After that Went to Menu then Quick App 
To Setup my laravel Application

## GitHub
create a new github repository CRUD-LRJ
After installation and setup, I went to blog folder and started Gitbash
Start using the command
Git init
Git add .
Git remote add origin https://github.com/binayakgc/CRUD-LRJ.git
Git commit -m “message”
Git push
Git pull

## Layout and Posts
After that  I started create the layouts and  posts for my CRUD
- Layout
    has the main html layout which use
    <div class="container">
        @yield('content')
    </div>
    To get content from other file from folder Posts
- Posts
    On this part i have extended layout.app which contains section for every page
    that we go.
    @extends('layouts.app')

    @section('content')
    ...
    @endsection

## Routes

web.php is used as the Routes for this file
And on the page resource is used which sets up multiple routes to handle various actions

Route::get('/', function() {
    return redirect('/posts');
});
when a user visits the root URL, they are redirected to /posts.

Route::resource('posts', PostController::class); 
Route::delete('posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy'); 


## Create Database and config Laravel

For database i went to .Env file and fix 
DB_CONNECTION=mysql
DB_DATABASE=blog

## Controller

 used Post controller to Setup My Crud system
As it has all the functionalities for CRUD

## Model and Migration

ran the program in the terminal
 php artisan make:model Post -m

updated the migration file
 public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->timestamps();
        });
    }

Again Run this on terminal
 php artisan migrate


## Action
In the post folder ther are 4 files
Create 
Index
Edit 
Show


## Factory And Seeder
Used this to enter dummy data in the database.