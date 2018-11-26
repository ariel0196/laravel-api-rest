## Instalación

### 1. Modificar los parametros de la bd **.env**

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
$ php artisan install
```

### 3. Migrar base de datos
```bash 
$ php artisan migrate
```

### 4. Poblar la base de datos
```bash 
$ php artisan db:seed
```