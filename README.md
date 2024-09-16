# TS_recruit_task
# Laravel CMS with Filament - Developer Task

## Overview

This repository contains a simple content management system (CMS) built with Laravel and Filament. The application allows users to manage articles with the following features:

- User authentication and registration.
- Full CRUD (Create, Read, Update, Delete) operations on articles.
- RESTful API for articles.
- Middleware for route protection.
- Proper input validation.
- Use of Laravel migrations and seeders for database management.
- Frontend powered by Filament.
- Unit and feature tests for core functionalities.

This project is designed to demonstrate the use of Laravel's MVC structure, Eloquent ORM, authentication, middleware, and RESTful APIs.

## Features

### 1. User Authentication

- Implemented user registration and login using Laravel's built-in authentication.
- Only authenticated users can create, edit, delete, and view articles.

### 2. Article Management

- Each article has a title, body, and publication date.
- Full CRUD operations for articles.
- Only the author of an article can edit or delete it.

### 3. RESTful API

- Public API to retrieve a list of all articles or a single article by ID.
- Authenticated users can create new articles.
- Only the author can update or delete their articles.

### 4. Validation

- Implemented proper validation for all input fields.
- Enforced rules such as required fields, string lengths, and valid email format.

### 5. Middleware

- Middleware to ensure that only authenticated users can access article management routes.
- Custom middleware to ensure only the author can edit or delete their articles.

### 6. Database

- Laravel migrations are used to create necessary database tables.
- Seeders are created to populate the database with initial data for testing.

### 7. Frontend

- The frontend is built using Filament, providing a modern and responsive UI.

### 8. Testing

- Unit and feature tests cover critical functionalities such as article creation, updating, deletion, and viewing.

### Bonus Features

- Implemented pagination for the article list.
- Added search functionality to find articles by title or content.

## Installation and Setup

Follow these steps to set up and run the project locally:

1. **Clone the repository:**
   ```bash
   git clone https://github.com/yourusername/laravel-cms-filament.git
   cd laravel-cms-filament
   ```

2. **Install dependencies:**
   ```bash
   composer install
   npm install
   ```

3. **Set up the environment:**
   - Copy `.env.example` to `.env`:
     ```bash
     cp .env.example .env
     ```
   - Update the `.env` file with your database credentials.

4. **Generate application key:**
   ```bash
   php artisan key:generate
   ```

5. **Run migrations and seed the database:**
   ```bash
   php artisan migrate --seed
   ```

6. **Serve the application:**
   ```bash
   php artisan serve
   ```

7. **Run tests:**
   ```bash
   php artisan test
   ```

## Assumptions and Additional Features

- The application assumes that users are authenticated via Laravel's built-in authentication system.
- The frontend is built with Filament to provide a clean and modern user interface.
- Additional features like pagination and search functionality were implemented to enhance the user experience.

## Conclusion

This project demonstrates the use of Laravel's core features and best practices in building a robust CMS. The implementation focuses on code quality, adherence to best practices, and comprehensive test coverage.

Feel free to explore the code and provide any feedback!
