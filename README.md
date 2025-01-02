<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Project Documentation

This documentation outlines the steps to set up and run the Laravel project.

---

## Requirements

Before setting up the project, ensure you have the following installed on your system:

-   **PHP** (version 8.0 or higher)
-   **Composer** (latest version)
-   **Node.js** and **npm**
-   **MySQL** or any other database supported by Laravel

---

## Installation Steps

### 1. Clone the Repository

Clone the project repository to your local machine:

```bash
git clone https://github.com/iqbalalayubbi/employee-management.git
cd employee-management
```

### 2. Configure Environment Variables

```bash
cp .env.example .env
```

### 3. Install Dependencies

-   Backend Dependencies

```bash
composer install
```

-   Frontend Dependencies

```bash
npm install
```

### 4. Migrate the Database

```bash
php artisan migrate
```

### 5. Build Frontend Assets

```bash
npm run dev
```

### 6. Start Laravel Server

```bash
php artisan serve
```

## Access the Application

```bash
http://127.0.0.1:8000
```
