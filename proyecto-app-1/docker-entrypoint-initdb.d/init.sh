#!/bin/bash

set -e  # Salir en caso de errores

# Esperar a que MySQL esté listo (reemplace 3306 con su puerto expuesto si es diferente)
until nc -z localhost 3306; do
    >&2 echo "MySQL no está disponible - esperando..."
    sleep 2
done

# Exportar la base de datos como archivo .sql
mysqldump -u root -p${MYSQL_ROOT_PASSWORD} ${MYSQL_DATABASE} > /docker-entrypoint-initdb/my_database.sql

echo "Base de datos exportada a /docker-entrypoint-initdb/my_database.sql"
