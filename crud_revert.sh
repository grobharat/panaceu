#!/bin/bash

# Check for the model name argument
if [ $# -eq 0 ]; then
    echo "Usage: $0 ModelName"
    exit 1
fi

MODEL_NAME=$1
LOWER_MODEL_NAME=$(echo $MODEL_NAME | awk '{print tolower($0)}')
CAMEL_CASE_MODEL_NAME=$(echo $MODEL_NAME | sed -r 's/(^|-)([a-z])/\U\2/g')

# Define paths
CONTROLLER_PATH="app/Http/Controllers/${MODEL_NAME}Controller.php"
SERVICE_PATH="app/Services/${MODEL_NAME}Service.php"
REPOSITORY_PATH="app/Repositories/${MODEL_NAME}Repository.php"
VIEWS_PATH="resources/views/${LOWER_MODEL_NAME}"

# Remove Controller
echo "Removing Controller..."
if [ -f $CONTROLLER_PATH ]; then
    rm $CONTROLLER_PATH
    echo "Removed $CONTROLLER_PATH"
else
    echo "$CONTROLLER_PATH does not exist."
fi

# Remove Service
echo "Removing Service..."
if [ -f $SERVICE_PATH ]; then
    rm $SERVICE_PATH
    echo "Removed $SERVICE_PATH"
else
    echo "$SERVICE_PATH does not exist."
fi

# Remove Repository
echo "Removing Repository..."
if [ -f $REPOSITORY_PATH ]; then
    rm $REPOSITORY_PATH
    echo "Removed $REPOSITORY_PATH"
else
    echo "$REPOSITORY_PATH does not exist."
fi

# Remove Views
echo "Removing Views..."
if [ -d $VIEWS_PATH ]; then
    rm -rf $VIEWS_PATH
    echo "Removed $VIEWS_PATH"
else
    echo "$VIEWS_PATH does not exist."
fi

# Remove Routes
echo "Removing routes..."
ROUTES_FILE="routes/web.php"
if grep -q "Route::resource('${LOWER_MODEL_NAME}', ${MODEL_NAME}Controller::class);" $ROUTES_FILE; then
    sed -i "/Route::resource('${LOWER_MODEL_NAME}', ${MODEL_NAME}Controller::class);/d" $ROUTES_FILE
    echo "Removed resource route from $ROUTES_FILE"
else
    echo "Resource route not found in $ROUTES_FILE"
fi

if grep -q "use App\Http\Controllers\\${MODEL_NAME}Controller;" $ROUTES_FILE; then
    sed -i "/use App\Http\Controllers\\${MODEL_NAME}Controller;/d" $ROUTES_FILE
    echo "Removed controller namespace from $ROUTES_FILE"
else
    echo "Resource route controller namespace not found in $ROUTES_FILE"
fi


# Remove Migration
echo "Removing Migration..."
MIGRATION_FILE=$(ls database/migrations/*_create_${LOWER_MODEL_NAME}_table.php 2>/dev/null)
if [ -f "$MIGRATION_FILE" ]; then
    php artisan migrate:rollback --path=$MIGRATION_FILE
    rm $MIGRATION_FILE
    echo "Removed migration file $MIGRATION_FILE"
else
    echo "Migration file for ${LOWER_MODEL_NAME} not found."
fi

echo "Revert complete!"
