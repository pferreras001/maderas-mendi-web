#!/bin/bash

# Path to the SQL script
SQL_SCRIPT="database/datasets/test_dataset.sql"

DOCKER_CONTAINER_NAME="db_maderas_mendi"
DOCKER_MYSQL_USER="admin"
DOCKER_MYSQL_PASSWORD="root"
DOCKER_MYSQL_DATABASE="mydatabase"
DOCKER_SQL_SCRIPT="database/datasets/test_dataset.sql"

# Drop all existing tables
docker exec -i "$DOCKER_CONTAINER_NAME" mysql -u"$DOCKER_MYSQL_USER" -p"$DOCKER_MYSQL_PASSWORD" -e "DROP DATABASE IF EXISTS $DOCKER_MYSQL_DATABASE; CREATE DATABASE $DOCKER_MYSQL_DATABASE;" 

# Run migrations
php artisan migrate

# Execute SQL script within Docker container
docker exec -i "$DOCKER_CONTAINER_NAME" mysql -u"$DOCKER_MYSQL_USER" -p"$DOCKER_MYSQL_PASSWORD" "$DOCKER_MYSQL_DATABASE" < "$DOCKER_SQL_SCRIPT"

# Check if the execution was successful
if [ $? -eq 0 ]; then
    echo "Script executed successfully."
else
    echo "Error: Failed to execute the script."
fi
