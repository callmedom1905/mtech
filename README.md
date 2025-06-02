# M Tech Project

This is a Laravel-based web application.

## Requirements

- PHP >= 8.1  
- Composer  
- Node.js & npm  
- MySQL or another supported database  

## Installation

Clone the repository:
```
github.com/callmedom1905/mtech
cd mtech
```

Install PHP dependencies using Composer:
```
composer install
```
Install JavaScript dependencies using npm:
```
npm install
```

Copy .env file and generate application key:
```
cp .env.example .env
php artisan key:generate
```

Run migrations (optional):
```
php artisan migrate
```
## Running the Project

Start the Laravel development server:
```
php artisan serve
```
Compile frontend assets:
```
npm run dev
```
The application will be available at:
```
http://127.0.0.1:8000
```
## License

This project is open-source and available under the MIT license.
