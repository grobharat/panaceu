#!/bin/bash

# Ensure the script is run from the root of the Laravel project
if [ ! -f artisan ]; then
  echo "Please run this script from the root directory of your Laravel project."
  exit 1
fi

# Prompt the user for the module name
read -p "Enter the module name: " MODULE_NAME

# Convert the module name to PascalCase
MODULE_NAME=$(echo "$MODULE_NAME" | sed -r 's/(^|-)(\w)/\U\2/g')

# Define module directory, routes file, and views directory
MODULE_DIR="app/Modules/$MODULE_NAME"
ROUTES_FILE="routes/${MODULE_NAME}.php"
VIEWS_DIR="resources/views/${MODULE_NAME}"

# Remove the module directory
if [ -d "$MODULE_DIR" ]; then
  rm -rf "$MODULE_DIR"
  echo "Removed module directory: $MODULE_DIR"
else
  echo "Module directory $MODULE_DIR does not exist."
fi

# Remove the routes file
if [ -f "$ROUTES_FILE" ]; then
  rm "$ROUTES_FILE"
  echo "Removed routes file: $ROUTES_FILE"
else
  echo "Routes file $ROUTES_FILE does not exist."
fi

# Remove the inclusion of the module routes in web.php
if grep -q "require __DIR__ . '/${MODULE_NAME}.php';" routes/web.php; then
  sed -i "/require __DIR__ . '\/${MODULE_NAME}.php';/d" routes/web.php
  echo "Removed routes inclusion from web.php"
else
  echo "Routes inclusion in web.php does not exist."
fi

# Remove the views directory
if [ -d "$VIEWS_DIR" ]; then
  rm -rf "$VIEWS_DIR"
  echo "Removed views directory: $VIEWS_DIR"
else
  echo "Views directory $VIEWS_DIR does not exist."
fi

echo "${MODULE_NAME} module reverted successfully."
