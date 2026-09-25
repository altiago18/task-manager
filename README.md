# Personal Task Manager

A simple Laravel-based Personal Task Manager that allows users to create, view, edit, delete, and update the status of their tasks.

## Project Information

- Project Code: WST21-PM-2026-SF
- Student Name: Aldrian Santiago
- Course & Year: BSIT - 2nd Year
- Database Used: MySQL

## Features

- Add Task
- View Tasks
- Edit Task
- Delete Task
- Update Task Status
- Pending and Completed Status
- Set Due Date
- Add Task Description

## Technologies Used

- Laravel
- PHP
- MySQL
- Blade
- HTML
- CSS
- Vite

## Database
The project uses MySQL as the database.

The tasks table contains the following fields:

- id
- task_name
- description
- status
- due_date
- created_at
- updated_at

## How to Run the Project

1. Clone the repository.

2. Open the project folder in the terminal.

3. Install PHP dependencies:

composer install

## How to Run the Project

1. Clone the repository.

2. Open the project folder in the terminal.

3. Install PHP dependencies:
composer install

4. Install frontend dependencies:
npm install

5. Create a .env file and configure the database:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=task_manager
DB_USERNAME=root
DB_PASSWORD=

6. Generate the application key:
php artisan key:generate

7. Run the database migrations:
php artisan migrate

8. Start the Laravel development server:
php artisan serve

9. In another terminal, start Vite:
npm run dev

10. Open the application in your browser:
http://127.0.0.1:8000

Project Structure

The project follows the Laravel structure:

Routes → routes/web.php
Controller → app/Http/Controllers/TaskController.php
Model → app/Models/Task.php
Migration → database/migrations/
Blade Views → resources/views/tasks/
CSS → resources/css/app.css