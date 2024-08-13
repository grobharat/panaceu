@extends('layouts.app')

@section('title', 'Edit ${MODEL_NAME}')

@section('content')
    <h1>Edit ${MODEL_NAME}</h1>
    <a href="{{ route('${LOWER_MODEL_NAME}.index') }}" class="btn btn-secondary">Back to List</a>

    <form action="{{ route('${LOWER_MODEL_NAME}.update', $item->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $item->name }}" required>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
@endsection
