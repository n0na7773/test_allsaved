## About

This is a test task for Allsaved. It contains simple HTML website with Laravel on the back-end. 

## Prerequisites

PHP 8.1+
Composer
Node.js & npm
PostgreSQL
Git

## Installation

Clone the repository
```
git clone https://github.com/n0na7773/test_allsaved
cd test_allsaved
```

Install PHP dependencies
```
composer install
```

Install front-end dependencies & build assets
```
npm install
npm run dev
```

Environment configuration
```
cp .env.example .env
php artisan key:generate
```

Open .env and set your database credentials:
```
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

Run migrations & seed the database
```
php artisan migrate --seed
```

Serve the application
```
php artisan serve
```

Visit: http://127.0.0.1:8000/dashboard