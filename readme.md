# REST API - Laravel 5.7

## Installation

1. Setup DB .env

```
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=test
DB_USERNAME=postgres
```

2. Install deps

```
$ composer install
```
    
3. Migrate tables

```
$ php artisan migrate
```
    
4. Data seed

```
$ php artisan db:seed
```

## Endpoints

Method | URL | Description
-- | -- | --
GET | /productos | list prods
GET | /productos/{id} | view prod
POST | /productos | create products
PUT | /productos | update products
DELETE | /productos/{id} | delete products

