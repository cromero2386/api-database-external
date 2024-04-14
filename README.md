## api-database-external

- Se crearon dos proyectos de php `proyecto-app-1` `proyecto-php-api` la estructura de cada uno es:

- `proyecto-app-1`

  - app-web
    - Dockerfile
    - index.php
  - backup_db
    - my_database.sql
  - docker-compose.yml

- `proyecto-php-api`
  - api
    - Dockerfile
    - index.php
  - docker-compose.yml

1. Primero debemos posicionarnos en la carpeta de `proyecto-app-web` y ejecutar `docker-compose up -d` el cual crea los contenedores `web` y de `mysql`.
2. Segundo debemos importar la base de datos que esta en `proyecto-app-web/backup_db` que contiene datos de ejemplo.
3. Tercero debemos posicionarnos en la carpeta de `proyecto-php-api` y ejecutar `docker-compose up -d` el cual crea el contenedor de la `api` que se conecta al base de datos de `proyecto-app-web`
4. Por ultimo podemos probar el funcionamiento de la siguiente manera:

   . [web]: http://localhost:9000/

   . [api]: http://localhost:9001/
