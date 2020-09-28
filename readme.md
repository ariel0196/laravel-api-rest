# API REST - Laravel 5.7
Pequeño API REST demostrativo realizado con Laravel

## Instalación

1. Configurar DB .env

```
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=test
DB_USERNAME=postgres
```

2. Instalar dependencias

```
$ composer install
```
    
3. Migrar tablas

```
$ php artisan migrate
```
    
4. Seed de datos

```
$ php artisan db:seed
```

## Endpoints

Método | URL | Función
-- | -- | --
GET | /productos | Listar productos
GET | /productos/{id} | Visualizar producto
POST | /productos | Crear producto
PUT | /productos | Actualizar producto
DELETE | /productos/{id} | Eliminar producto

