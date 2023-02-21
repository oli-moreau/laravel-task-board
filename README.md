# Laravel Task Board
A simple task board made with the Laravel framework using what was learned in my class.

The main focus of this project is mostly the backend rather than the frontend, hence why the '/home' route is the only one with visual modifications.

![Screenshot from 2023-02-11 13-21-33](https://user-images.githubusercontent.com/123499791/218281737-cd5f0820-c1e2-47e0-b96d-1c6ddc63ee27.png)

## What does it do
- User creation with login/logout
- Create boards
- Create tasks within those boards
- Boards and tasks belong to the user that created them
- Everything is pushed and pulled to/from a SQL database

## What does it use
- PHP 7.4.25
- Laravel Framework 8.83.27
- Laravel UI 3.4.6 with Bootstrap Auth
- npm 8.19.2

## How to use
Clone the project or download the files
```bash
git clone https://github.com/oli-moreau/laravel-task-board.git
```
Install the dependencies
```bash
composer install && npm install
```
Copy the '.env.example' file
```bash
cp .env.example .env
```
Create a database, edit the '.env' file with the required information & migrate:
```bash
php artisan migrate
```
Generate the project key
```bash
php artisan key:generate
```
Run the project
```bash
php artisan serve
```
