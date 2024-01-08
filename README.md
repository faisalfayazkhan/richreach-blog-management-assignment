# Laravel Blog Management System

A simple blog management system built with Laravel.

## Table of Contents

- [Installation](#installation)
- [Running Tests](#running-tests)
- [Usage](#usage)


## Installation

### Prerequisites

- PHP >= 8.1
- Composer
- MySQL
- Node.js and npm (for frontend assets)

### Steps

1. **Clone the repository:**

   ```bash
    git clone https://github.com/faisalfayazkhan/richreach-blog-management-assignment.git
    ```
2. **Navigate to the project directory:**
    ```bash
        cd richreach-blog-management-assignment
    ```

 3. **Install PHP dependencies:**
    ```bash
        composer install
    ```

4. **Create a copy of the .env.example file and rename it to .env:**
    ```bash
        cp .env.example .env
    ```

5. **Generate the application key:**
    ```bash
        php artisan key:generate
    ```

6. **Migrate the database:**
    ```bash
        php artisan migrate
    ```

7. **Seed the database with initial data:**
    ```bash
       php artisan db:seed
    ```
8. **Install frontend assets:**
    ```bash
       npm install && npm run prod
    ```

## Running Tests

Run the basic tests for the application:


    php artisan test


## Usage

### Database Seeding

Seed the database with initial data, including default user:

```bash
php artisan db:seed
```

### Basic Testing

**Run the development server:**

```bash
php artisan serve
```
Default users created during seeding:

- **Username:** `admin@example.com`
- **Password:** `Admin@1234`
