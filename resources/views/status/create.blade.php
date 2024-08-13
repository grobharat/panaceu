@extends('layouts.app')

@section('title', 'Create ${MODEL_NAME}')

@section('content')
    <h1>Create ${MODEL_NAME}</h1>
    <a href="{{ route('${LOWER_MODEL_NAME}.index') }}" class="btn btn-secondary">Back to List</a>

    <form action="{{ route('${LOWER_MODEL_NAME}.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <button type="submit" class="btn btn-success">Create</button>
    </form>
@endsection
