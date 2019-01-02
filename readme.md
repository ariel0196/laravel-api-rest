# API REST Test con Laravel 5.7

## Instalación

### 1. Modificar configuración de la DB (.env file)

```yaml
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=test
DB_USERNAME=postgres
DB_PASSWORD=postgres
```

### 2. Instalar dependencias
```bash 
$ composer install
```

### 3. Migrar DB
```bash 
$ php artisan migrate
```

### 4. Seed DB
```bash 
$ php artisan db:seed
```

## Endpoints
Metodo | URL | Resultado
-- | -- | --
GET | /productos | Listado de productos
GET | /productos/{id} | Producto especfico por ID
POST | /productos | Creacion de productoss
PUT | /productos | Actualizacion de productos
DELETE | /productos/{id} | Eliminacion de productos por ID

