#!/bin/bash

# Ensure the script is run from the root of the Laravel project
if [ ! -f artisan ]; then
  echo "Please run this script from the root directory of your Laravel project."
  exit 1
fi

# Create the Modules directory if it doesn't exist
MODULES_DIR="app/Modules"
if [ ! -d "$MODULES_DIR" ]; then
  mkdir -p "$MODULES_DIR"
fi

# Prompt the user for the module name
#read -p "Enter the module name: " MODULE_NAME


# Check if a module name is provided as an argument
if [ -z "$1" ]; then
  echo "Usage: $0 <ModuleName>"
  exit 1
fi

# Get the module name from the argument
MODULE_NAME=$1
#echo "name" $MODULE_NAME
# Convert the module name to lowercase
LOWER_CASE_MODULE_NAME=$(echo $MODULE_NAME | awk '{print tolower($0)}')
#echo "lower" $LOWER_CASE_MODULE_NAME
# Convert the module name to PascalCase
PASCAL_CASE_MODULE_NAME=$(echo $MODULE_NAME | sed -r 's/(^|-)(\w)/\U\2/g')
#echo "pascal " $PASCAL_CASE_MODULE_NAME
#exit 0


# Create the module directory structure
MODULE_DIR="$MODULES_DIR/$PASCAL_CASE_MODULE_NAME"
mkdir -p "$MODULE_DIR/Controller" "$MODULE_DIR/Service" "$MODULE_DIR/Repository"
touch "$MODULE_DIR/Service/${PASCAL_CASE_MODULE_NAME}Service.php" "$MODULE_DIR/Repository/${PASCAL_CASE_MODULE_NAME}Repository.php"

# Create basic service file
cat <<EOL > "$MODULE_DIR/Service/${PASCAL_CASE_MODULE_NAME}Service.php"
<?php

namespace App\Modules\\$PASCAL_CASE_MODULE_NAME\Service;

use App\Modules\\$PASCAL_CASE_MODULE_NAME\Repository\\${PASCAL_CASE_MODULE_NAME}Repository;

class ${PASCAL_CASE_MODULE_NAME}Service {
    protected \$${LOWER_CASE_MODULE_NAME}Repository;

    public function __construct(${PASCAL_CASE_MODULE_NAME}Repository \$${LOWER_CASE_MODULE_NAME}Repository) {
        \$this->${LOWER_CASE_MODULE_NAME}Repository = \$${LOWER_CASE_MODULE_NAME}Repository;
    }

    public function getAll() {
        return \$this->${LOWER_CASE_MODULE_NAME}Repository->getAll();
    }

    public function getById(\$id) {
        return \$this->${LOWER_CASE_MODULE_NAME}Repository->getById(\$id);
    }

    public function create(array \$data) {
        return \$this->${LOWER_CASE_MODULE_NAME}Repository->create(\$data);
    }

    public function update(\$id, array \$data) {
        return \$this->${LOWER_CASE_MODULE_NAME}Repository->update(\$id, \$data);
    }

    public function delete(\$id) {
        return \$this->${LOWER_CASE_MODULE_NAME}Repository->delete(\$id);
    }
}
EOL

# Create basic repository file
cat <<EOL > "$MODULE_DIR/Repository/${PASCAL_CASE_MODULE_NAME}Repository.php"
<?php

namespace App\Modules\\$PASCAL_CASE_MODULE_NAME\Repository;

use App\Models\User;

class ${PASCAL_CASE_MODULE_NAME}Repository {
    public function getAll() {
        return User::all();
    }

    public function getById(\$id) {
        return User::findOrFail(\$id);
    }

    public function create(array \$data) {
        return User::create(\$data);
    }

    public function update(\$id, array \$data) {
        \$user = User::findOrFail(\$id);
        \$user->update(\$data);
        return \$user;
    }

    public function delete(\$id) {
        \$user = User::findOrFail(\$id);
        \$user->delete();
    }
}
EOL

# Create routes file
ROUTES_FILE="routes/${PASCAL_CASE_MODULE_NAME}.php"
cat <<EOL > "$ROUTES_FILE"
<?php

use Illuminate\Support\Facades\Route;
use App\Modules\\$PASCAL_CASE_MODULE_NAME\Controller\\${PASCAL_CASE_MODULE_NAME}Controller;

Route::resource('${LOWER_CASE_MODULE_NAME}', ${PASCAL_CASE_MODULE_NAME}Controller::class);
EOL

# Include the module routes in web.php
if ! grep -q "require __DIR__ . '/${PASCAL_CASE_MODULE_NAME}.php';" routes/web.php; then
  echo "require __DIR__ . '/${PASCAL_CASE_MODULE_NAME}.php';" >> routes/web.php
fi

# Create basic controller file
CONTROLLER_FILE="$MODULE_DIR/Controller/${PASCAL_CASE_MODULE_NAME}Controller.php"
cat <<EOL > "$CONTROLLER_FILE"
<?php

namespace App\Modules\\$PASCAL_CASE_MODULE_NAME\Controller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Modules\\$PASCAL_CASE_MODULE_NAME\Service\\${PASCAL_CASE_MODULE_NAME}Service;

class ${PASCAL_CASE_MODULE_NAME}Controller extends Controller {
    protected \$${LOWER_CASE_MODULE_NAME}Service;

    public function __construct(${PASCAL_CASE_MODULE_NAME}Service \$${LOWER_CASE_MODULE_NAME}Service) {
        \$this->${LOWER_CASE_MODULE_NAME}Service = \$${LOWER_CASE_MODULE_NAME}Service;
    }

    public function index() {
        \$users = \$this->${LOWER_CASE_MODULE_NAME}Service->getAll();
        return view('${LOWER_CASE_MODULE_NAME}.index', compact('users'));
    }

    public function create() {
        return view('${LOWER_CASE_MODULE_NAME}.create');
    }

    public function store(Request \$request) {
        \$data = \$request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        \$this->${LOWER_CASE_MODULE_NAME}Service->create(\$data);
        return redirect()->route('${PASCAL_CASE_MODULE_NAME}.index');
    }

    public function show(\$id) {
        \$user = \$this->${LOWER_CASE_MODULE_NAME}Service->getById(\$id);
        return view('${LOWER_CASE_MODULE_NAME}.show', compact('user'));
    }

    public function edit(\$id) {
        \$user = \$this->${LOWER_CASE_MODULE_NAME}Service->getById(\$id);
        return view('${LOWER_CASE_MODULE_NAME}.edit', compact('user'));
    }

    public function update(Request \$request, \$id) {
        \$data = \$request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . \$id,
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        if (empty(\$data['password'])) {
            unset(\$data['password']);
        }

        \$this->${LOWER_CASE_MODULE_NAME}Service->update(\$id, \$data);
        return redirect()->route('${PASCAL_CASE_MODULE_NAME}.index');
    }

    public function destroy(\$id) {
        \$this->${LOWER_CASE_MODULE_NAME}Service->delete(\$id);
        return redirect()->route('${PASCAL_CASE_MODULE_NAME}.index');
    }
}
EOL

# Create views directory structure
VIEWS_DIR="resources/views/${LOWER_CASE_MODULE_NAME}"
mkdir -p "$VIEWS_DIR"
touch "$VIEWS_DIR/index.blade.php" "$VIEWS_DIR/create.blade.php" "$VIEWS_DIR/edit.blade.php" "$VIEWS_DIR/show.blade.php"

# Create basic index view file
cat <<EOL > "$VIEWS_DIR/index.blade.php"
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>${PASCAL_CASE_MODULE_NAME} Index</h1>
    <a href="{{ route('${LOWER_CASE_MODULE_NAME}.create') }}" class="btn btn-primary">Create ${PASCAL_CASE_MODULE_NAME}</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach(\$users as \$user)
                <tr>
                    <td>{{ \$user->id }}</td>
                    <td>{{ \$user->name }}</td>
                    <td>{{ \$user->email }}</td>
                    <td>
                        <a href="{{ route('${PASCAL_CASE_MODULE_NAME}.show', \$user->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('${PASCAL_CASE_MODULE_NAME}.edit', \$user->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('${PASCAL_CASE_MODULE_NAME}.destroy', \$user->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
EOL

# Create basic create view file
cat <<EOL > "$VIEWS_DIR/create.blade.php"
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create ${PASCAL_CASE_MODULE_NAME}</h1>
    <form method="POST" action="{{ route('${PASCAL_CASE_MODULE_NAME}.store') }}">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="form-group">
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection
EOL

# Create basic edit view file
cat <<EOL > "$VIEWS_DIR/edit.blade.php"
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit ${PASCAL_CASE_MODULE_NAME}</h1>
    <form method="POST" action="{{ route('${PASCAL_CASE_MODULE_NAME}.update', \$user->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ \$user->name }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ \$user->email }}" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="form-group">
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
EOL

# Create basic show view file
cat <<EOL > "$VIEWS_DIR/show.blade.php"
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Show ${PASCAL_CASE_MODULE_NAME}</h1>
    <p><strong>ID:</strong> {{ \$user->id }}</p>
    <p><strong>Name:</strong> {{ \$user->name }}</p>
    <p><strong>Email:</strong> {{ \$user->email }}</p>
</div>
@endsection
EOL

echo "${PASCAL_CASE_MODULE_NAME} module created successfully."
