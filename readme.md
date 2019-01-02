# API REST Test con Laravel 5.7

## Instalación

1. Modificar configuración de la DB (.env file)

```yaml
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=test
DB_USERNAME=postgres
DB_PASSWORD=postgres
```

2. Instalar dependencias

```
$composer install
```
    
3. Migrar DB

```
$ php artisan migrate
```
    
4. Seed DB

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

