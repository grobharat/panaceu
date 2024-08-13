#!/bin/bash

# Variables
PROJECT_NAME="laravel_project"
DB_NAME="project_db"
DB_USER="root"
DB_PASS="password"

# Create Laravel Project
echo "Creating Laravel project: $PROJECT_NAME"
composer create-project --prefer-dist laravel/laravel $PROJECT_NAME

# Change Directory
cd $PROJECT_NAME

# Create Migrations
echo "Creating migrations..."
mkdir -p database/migrations
cat <<EOL > database/migrations/2024_01_01_000000_add_role_to_users_table.php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRoleToUsersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function(\$table) {
            \$table->string('role')->after('email');
        });
    }

    public function down()
    {
         Schema::table('users', function(\$table) {
            \$table->dropColumn('role');
        });
    }
}
EOL

cat <<EOL > database/migrations/2024_01_01_000001_create_stages_table.php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStagesTable extends Migration
{
    public function up()
    {
        Schema::create('stages', function (Blueprint \$table) {
            \$table->id();
            \$table->string('name');
            \$table->integer('sequence')->unsigned();
            \$table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('stages');
    }
}
EOL

cat <<EOL > database/migrations/2024_01_01_000002_create_tasks_table.php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    public function up()
    {
        Schema::create('tasks', function (Blueprint \$table) {
            \$table->id();
            \$table->unsignedBigInteger('stage_id');
            \$table->string('name');
            \$table->text('description')->nullable();
            \$table->date('due_date');
            \$table->timestamps();

            \$table->foreign('stage_id')->references('id')->on('stages')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
EOL

cat <<EOL > database/migrations/2024_01_01_000003_create_notifications_table.php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationsTable extends Migration
{
    public function up()
    {
        Schema::create('notifications', function (Blueprint \$table) {
            \$table->id();
            \$table->unsignedBigInteger('user_id');
            \$table->string('message');
            \$table->boolean('is_read')->default(false);
            \$table->timestamps();

            \$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('notifications');
    }
}
EOL

cat <<EOL > database/migrations/2024_01_01_000004_create_reports_table.php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    public function up()
    {
        Schema::create('reports', function (Blueprint \$table) {
            \$table->id();
            \$table->string('title');
            \$table->text('content');
            \$table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('reports');
    }
}
EOL

# Create Models
echo "Creating models..."
mkdir -p app/Models
cat <<EOL > app/Models/User.php
<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected \$fillable = [
        'name', 'email', 'password', 'role',
    ];

    protected \$hidden = [
        'password', 'remember_token',
    ];
}
EOL

cat <<EOL > app/Models/Stage.php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{
    protected \$fillable = ['name', 'sequence'];

    public function tasks()
    {
        return \$this->hasMany(Task::class);
    }
}
EOL

cat <<EOL > app/Models/Task.php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected \$fillable = ['stage_id', 'name', 'description', 'due_date'];

    protected \$casts = [
        'due_date' => 'datetime'
    ];

    public function stage()
    {
        return \$this->belongsTo(Stage::class);
    }
}
EOL

cat <<EOL > app/Models/Notification.php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected \$fillable = ['user_id', 'message', 'is_read'];

    public function user()
    {
        return \$this->belongsTo(User::class);
    }
}
EOL

cat <<EOL > app/Models/Report.php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected \$fillable = ['title', 'content'];
}
EOL

# Create Controllers
echo "Creating controllers..."
mkdir -p app/Http/Controllers
cat <<EOL > app/Http/Controllers/UserController.php
<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        \$users = User::all();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request \$request)
    {
        \$user = User::create(\$request->all());
        return redirect()->route('users.index');
    }

    public function show(User \$user)
    {
        return view('users.show', compact('user'));
    }

    public function edit(User \$user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(Request \$request, User \$user)
    {
        \$user->update(\$request->all());
        return redirect()->route('users.index');
    }

    public function destroy(User \$user)
    {
        \$user->delete();
        return redirect()->route('users.index');
    }
}
EOL

cat <<EOL > app/Http/Controllers/StageController.php
<?php

namespace App\Http\Controllers;

use App\Models\Stage;
use Illuminate\Http\Request;

class StageController extends Controller
{
    public function index()
    {
        \$stages = Stage::all();
        return view('stages.index', compact('stages'));
    }

    public function create()
    {
        return view('stages.create');
    }

    public function store(Request \$request)
    {
        Stage::create(\$request->all());
        return redirect()->route('stages.index');
    }

    public function show(Stage \$stage)
    {
        return view('stages.show', compact('stage'));
    }

    public function edit(Stage \$stage)
    {
        return view('stages.edit', compact('stage'));
    }

    public function update(Request \$request, Stage \$stage)
    {
        \$stage->update(\$request->all());
        return redirect()->route('stages.index');
    }

    public function destroy(Stage \$stage)
    {
        \$stage->delete();
        return redirect()->route('stages.index');
    }
}
EOL

cat <<EOL > app/Http/Controllers/TaskController.php
<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Stage;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        \$tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        \$stages = Stage::all();
        return view('tasks.create', compact('stages'));
    }

    public function store(Request \$request)
    {
        Task::create(\$request->all());
        return redirect()->route('tasks.index');
    }

    public function show(Task \$task)
    {
        return view('tasks.show', compact('task'));
    }

    public function edit(Task \$task)
    {
        \$stages = Stage::all();
        return view('tasks.edit', compact('task', 'stages'));
    }

    public function update(Request \$request, Task \$task)
    {
        \$task->update(\$request->all());
        return redirect()->route('tasks.index');
    }

    public function destroy(Task \$task)
    {
        \$task->delete();
        return redirect()->route('tasks.index');
    }

    public function addDependency(Request \$request, Task \$task)
    {
        // Add dependency logic here
    }

    public function removeDependency(Task \$task, \$dependency)
    {
        // Remove dependency logic here
    }
}
EOL

# Create Routes
echo "Creating routes..."
cat <<EOL > routes/web.php
<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\StageController;
use App\Http\Controllers\TaskController;

Route::get('/', function(){
    return view('welcome');
});

Route::resource('users', UserController::class);
Route::resource('stages', StageController::class);
Route::resource('tasks', TaskController::class);

Route::post('tasks/{task}/dependencies', [TaskController::class, 'addDependency'])->name('tasks.addDependency');
Route::delete('tasks/{task}/dependencies/{dependency}', [TaskController::class, 'removeDependency'])->name('tasks.removeDependency');
EOL

# Create Views
echo "Creating views..."
mkdir -p resources/views/layouts
mkdir -p resources/views/users
mkdir -p resources/views/stages
mkdir -p resources/views/tasks

cat <<EOL > resources/views/layouts/app.blade.php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Your Application</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ url('/') }}">Your Application</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('users.index') }}">Users</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('stages.index') }}">Stages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('tasks.index') }}">Tasks</a>
                </li>
            </ul>
        </div>
    </nav>
    
    <div class="container mt-5">
        @yield('content')
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
EOL

cat <<EOL > resources/views/users/index.blade.php
@extends('layouts.app')

@section('title', 'Users')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="h3">Users</h1>
        <a href="{{ route('users.create') }}" class="btn btn-primary">Create User</a>
    </div>
    
    @if (\$users->isEmpty())
        <div class="alert alert-warning">No users found.</div>
    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach (\$users as \$user)
                    <tr>
                        <td>{{ \$user->id }}</td>
                        <td>{{ \$user->name }}</td>
                        <td>{{ \$user->email }}</td>
                        <td>{{ \$user->role }}</td>
                        <td>
                            <a href="{{ route('users.show', \$user->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('users.edit', \$user->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('users.destroy', \$user->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
EOL

cat <<EOL > resources/views/users/create.blade.php
@extends('layouts.app')

@section('title', 'Create User')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="h3">Create User</h1>
        <a href="{{ route('users.index') }}" class="btn btn-secondary">Back to Users</a>
    </div>

    <form action="{{ route('users.store') }}" method="POST">
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
            <label for="role">Role</label>
            <select class="form-control" id="role" name="role" required>
                <option value="Super Admin">Super Admin</option>
                <option value="Admin">Admin</option>
                <option value="Teacher">Teacher</option>
                <option value="Student">Student</option>
                <option value="Parent">Parent</option>
            </select>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-success">Create</button>
    </form>
@endsection
EOL

cat <<EOL > resources/views/users/show.blade.php
@extends('layouts.app')

@section('title', 'User Details')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="h3">User Details</h1>
        <a href="{{ route('users.index') }}" class="btn btn-secondary">Back to Users</a>
    </div>

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <td>{{ \$user->id }}</td>
        </tr>
        <tr>
            <th>Name</th>
            <td>{{ \$user->name }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ \$user->email }}</td>
        </tr>
        <tr>
            <th>Role</th>
            <td>{{ \$user->role }}</td>
        </tr>
    </table>
@endsection
EOL

cat <<EOL > resources/views/users/edit.blade.php
@extends('layouts.app')

@section('title', 'Edit User')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="h3">Edit User</h1>
        <a href="{{ route('users.index') }}" class="btn btn-secondary">Back to Users</a>
    </div>

    <form action="{{ route('users.update', \$user->id) }}" method="POST">
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
            <label for="role">Role</label>
            <select class="form-control" id="role" name="role" required>
                <option value="Super Admin" {{ \$user->role == 'Super Admin' ? 'selected' : '' }}>Super Admin</option>
                <option value="Admin" {{ \$user->role == 'Admin' ? 'selected' : '' }}>Admin</option>
                <option value="Teacher" {{ \$user->role == 'Teacher' ? 'selected' : '' }}>Teacher</option>
                <option value="Student" {{ \$user->role == 'Student' ? 'selected' : '' }}>Student</option>
                <option value="Parent" {{ \$user->role == 'Parent' ? 'selected' : '' }}>Parent</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
@endsection
EOL

cat <<EOL > resources/views/stages/index.blade.php
@extends('layouts.app')

@section('title', 'Stages')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="h3">Stages</h1>
        <a href="{{ route('stages.create') }}" class="btn btn-primary">Create Stage</a>
    </div>
    
    @if (\$stages->isEmpty())
        <div class="alert alert-warning">No stages found.</div>
    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Sequence</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach (\$stages as \$stage)
                    <tr>
                        <td>{{ \$stage->id }}</td>
                        <td>{{ \$stage->name }}</td>
                        <td>{{ \$stage->sequence }}</td>
                        <td>
                            <a href="{{ route('stages.show', \$stage->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('stages.edit', \$stage->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('stages.destroy', \$stage->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
EOL

cat <<EOL > resources/views/stages/create.blade.php
@extends('layouts.app')

@section('title', 'Create Stage')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="h3">Create Stage</h1>
        <a href="{{ route('stages.index') }}" class="btn btn-secondary">Back to Stages</a>
    </div>

    <form action="{{ route('stages.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="sequence">Sequence</label>
            <input type="number" class="form-control" id="sequence" name="sequence" required>
        </div>
        <button type="submit" class="btn btn-success">Create</button>
    </form>
@endsection
EOL

cat <<EOL > resources/views/stages/show.blade.php
@extends('layouts.app')

@section('title', 'Stage Details')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="h3">Stage Details</h1>
        <a href="{{ route('stages.index') }}" class="btn btn-secondary">Back to Stages</a>
    </div>

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <td>{{ \$stage->id }}</td>
        </tr>
        <tr>
            <th>Name</th>
            <td>{{ \$stage->name }}</td>
        </tr>
        <tr>
            <th>Sequence</th>
            <td>{{ \$stage->sequence }}</td>
        </tr>
    </table>
@endsection
EOL

cat <<EOL > resources/views/stages/edit.blade.php
@extends('layouts.app')

@section('title', 'Edit Stage')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="h3">Edit Stage</h1>
        <a href="{{ route('stages.index') }}" class="btn btn-secondary">Back to Stages</a>
    </div>

    <form action="{{ route('stages.update', \$stage->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ \$stage->name }}" required>
        </div>
        <div class="form-group">
            <label for="sequence">Sequence</label>
            <input type="number" class="form-control" id="sequence" name="sequence" value="{{ \$stage->sequence }}" required>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
@endsection
EOL

cat <<EOL > resources/views/tasks/index.blade.php
@extends('layouts.app')

@section('title', 'Tasks')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="h3">Tasks</h1>
        <a href="{{ route('tasks.create') }}" class="btn btn-primary">Create Task</a>
    </div>
    
    @if (\$tasks->isEmpty())
        <div class="alert alert-warning">No tasks found.</div>
    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Stage</th>
                    <th>Due Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach (\$tasks as \$task)
                    <tr>
                        <td>{{ \$task->id }}</td>
                        <td>{{ \$task->name }}</td>
                        <td>{{ \$task->stage->name }}</td>
                        <td>{{ \$task->due_date->format('Y-m-d') }}</td>
                        <td>
                            <a href="{{ route('tasks.show', \$task->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('tasks.edit', \$task->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('tasks.destroy', \$task->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
EOL

cat <<EOL > resources/views/tasks/create.blade.php
@extends('layouts.app')

@section('title', 'Create Task')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="h3">Create Task</h1>
        <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Back to Tasks</a>
    </div>

    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="stage_id">Stage</label>
            <select class="form-control" id="stage_id" name="stage_id" required>
                @foreach (\$stages as \$stage)
                    <option value="{{ \$stage->id }}">{{ \$stage->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="due_date">Due Date</label>
            <input type="date" class="form-control" id="due_date" name="due_date" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Create</button>
    </form>
@endsection
EOL

cat <<EOL > resources/views/tasks/show.blade.php
@extends('layouts.app')

@section('title', 'Task Details')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="h3">Task Details</h1>
        <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Back to Tasks</a>
    </div>

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <td>{{ \$task->id }}</td>
        </tr>
        <tr>
            <th>Name</th>
            <td>{{ \$task->name }}</td>
        </tr>
        <tr>
            <th>Stage</th>
            <td>{{ \$task->stage->name }}</td>
        </tr>
        <tr>
            <th>Due Date</th>
            <td>{{ \$task->due_date->format('Y-m-d') }}</td>
        </tr>
        <tr>
            <th>Description</th>
            <td>{{ \$task->description }}</td>
        </tr>
    </table>
@endsection
EOL

cat <<EOL > resources/views/tasks/edit.blade.php
@extends('layouts.app')

@section('title', 'Edit Task')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="h3">Edit Task</h1>
        <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Back to Tasks</a>
    </div>

    <form action="{{ route('tasks.update', \$task->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ \$task->name }}" required>
        </div>
        <div class="form-group">
            <label for="stage_id">Stage</label>
            <select class="form-control" id="stage_id" name="stage_id" required>
                @foreach (\$stages as \$stage)
                    <option value="{{ \$stage->id }}" {{ \$task->stage_id == \$stage->id ? 'selected' : '' }}>{{ \$stage->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="due_date">Due Date</label>
            <input type="date" class="form-control" id="due_date" name="due_date" value="{{ \$task->due_date->format('Y-m-d') }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description">{{ \$task->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
@endsection
EOL

echo "Setup complete!"
