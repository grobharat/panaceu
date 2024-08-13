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

# Create Controller
echo "Creating Controller..."
cat <<EOL > $CONTROLLER_PATH
<?php

namespace App\Http\Controllers;

use App\Http\Requests\\${MODEL_NAME}Request;
use App\Services\\${MODEL_NAME}Service;
use Illuminate\Http\Request;

class \${MODEL_NAME}Controller extends Controller
{
    protected \${MODEL_NAME}Service \$service;

    public function __construct(\${MODEL_NAME}Service \$service)
    {
        \$this->service = \$service;
    }

    public function index()
    {
        \$items = \$this->service->getAll();
        return view('\${LOWER_MODEL_NAME}.index', compact('items'));
    }

    public function create()
    {
        return view('\${LOWER_MODEL_NAME}.create');
    }

    public function store(\${MODEL_NAME}Request \$request)
    {
        \$this->service->create(\$request->all());
        return redirect()->route('\${LOWER_MODEL_NAME}.index');
    }

    public function show(\$id)
    {
        \$item = \$this->service->findById(\$id);
        return view('$\{LOWER_MODEL_NAME}.show', compact('item'));
    }

    public function edit(\$id)
    {
        \$item = \$this->service->findById(\$id);
        return view('\${LOWER_MODEL_NAME}.edit', compact('item'));
    }

    public function update(\${MODEL_NAME}Request \$request, \$id)
    {
        \$this->service->update(\$id, \$request->all());
        return redirect()->route('\${LOWER_MODEL_NAME}.index');
    }

    public function destroy(\$id)
    {
        \$this->service->delete(\$id);
        return redirect()->route('\${LOWER_MODEL_NAME}.index');
    }
}
EOL

# Create Service
echo "Creating Service..."
mkdir -p $(dirname $SERVICE_PATH)
cat <<EOL > $SERVICE_PATH
<?php

namespace App\Services;

use App\Repositories\\${MODEL_NAME}Repository;

class \${MODEL_NAME}Service
{
    protected \${MODEL_NAME}Repository \$repository;

    public function __construct(\${MODEL_NAME}Repository \$repository)
    {
        \$this->repository = \$repository;
    }

    public function getAll()
    {
        return \$this->repository->getAll();
    }

    public function findById(\$id)
    {
        return \$this->repository->findById(\$id);
    }

    public function create(array \$data)
    {
        return \$this->repository->create(\$data);
    }

    public function update(\$id, array \$data)
    {
        return \$this->repository->update(\$id, \$data);
    }

    public function delete(\$id)
    {
        return \$this->repository->delete(\$id);
    }
}
EOL

# Create Repository
echo "Creating Repository..."
mkdir -p $(dirname $REPOSITORY_PATH)
cat <<EOL > $REPOSITORY_PATH
<?php

namespace App\Repositories;

use App\Models\\${MODEL_NAME};

class \${MODEL_NAME}Repository
{
    protected \${MODEL_NAME} \$model;

    public function __construct(\${MODEL_NAME} \$model)
    {
        \$this->model = \$model;
    }

    public function getAll()
    {
        return \$this->model::all();
    }

    public function findById(\$id)
    {
        return \$this->model::find(\$id);
    }

    public function create(array \$data)
    {
        return \$this->model::create(\$data);
    }

    public function update(\$id, array \$data)
    {
        \$item = \$this->model::find(\$id);
        if (\$item) {
            \$item->update(\$data);
            return \$item;
        }
        return null;
    }

    public function delete(\$id)
    {
        \$item = \$this->model::find(\$id);
        if (\$item) {
            \$item->delete();
            return true;
        }
        return false;
    }
}
EOL

# Create Views
echo "Creating Views..."
mkdir -p $VIEWS_PATH
cat <<EOL > $VIEWS_PATH/index.blade.php
@extends('layouts.app')

@section('title', '\${CAMEL_CASE_MODEL_NAME} List')

@section('content')
    <h1>\${CAMEL_CASE_MODEL_NAME} List</h1>
    <a href="{{ route('\${LOWER_MODEL_NAME}.create') }}" class="btn btn-primary">Create \${MODEL_NAME}</a>
    <table class="table table-striped mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach (\$items as \$item)
                <tr>
                    <td>{{ \$item->id }}</td>
                    <td>{{ \$item->name }}</td>
                    <td>
                        <a href="{{ route('\${LOWER_MODEL_NAME}.show', \$item->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('\${LOWER_MODEL_NAME}.edit', \$item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('\${LOWER_MODEL_NAME}.destroy', \$item->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
EOL

cat <<EOL > $VIEWS_PATH/create.blade.php
@extends('layouts.app')

@section('title', 'Create \${MODEL_NAME}')

@section('content')
    <h1>Create \${MODEL_NAME}</h1>
    <a href="{{ route('\${LOWER_MODEL_NAME}.index') }}" class="btn btn-secondary">Back to List</a>

    <form action="{{ route('\${LOWER_MODEL_NAME}.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <button type="submit" class="btn btn-success">Create</button>
    </form>
@endsection
EOL

cat <<EOL > $VIEWS_PATH/edit.blade.php
@extends('layouts.app')

@section('title', 'Edit \${MODEL_NAME}')

@section('content')
    <h1>Edit \${MODEL_NAME}</h1>
    <a href="{{ route('\${LOWER_MODEL_NAME}.index') }}" class="btn btn-secondary">Back to List</a>

    <form action="{{ route('\${LOWER_MODEL_NAME}.update', \$item->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ \$item->name }}" required>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
@endsection
EOL

cat <<EOL > $VIEWS_PATH/show.blade.php
@extends('layouts.app')

@section('title', '\${MODEL_NAME} Details')

@section('content')
    <h1>\${MODEL_NAME} Details</h1>
    <a href="{{ route('\${LOWER_MODEL_NAME}.index') }}" class="btn btn-secondary">Back to List</a>

    <table class="table table-bordered mt-3">
        <tr>
            <th>ID</th>
            <td>{{ \$item->id }}</td>
        </tr>
        <tr>
            <th>Name</th>
            <td>{{ \$item->name }}</td>
        </tr>
    </table>
@endsection
EOL

# Update Routes
echo "Updating routes..."
cat <<EOL >> routes/web.php

use App\Http\Controllers\\${MODEL_NAME}Controller;

Route::resource('\${LOWER_MODEL_NAME}', \${MODEL_NAME}Controller::class);
EOL

# Generate Migration
echo "Generating migration..."
php artisan make:migration create_\${LOWER_MODEL_NAME}_table --create=\${LOWER_MODEL_NAME}

echo "Setup complete!"
