@extends('layouts.app')

@section('title', '${CAMEL_CASE_MODEL_NAME} List')

@section('content')
    <h1>${CAMEL_CASE_MODEL_NAME} List</h1>
    <a href="{{ route('${LOWER_MODEL_NAME}.create') }}" class="btn btn-primary">Create ${MODEL_NAME}</a>
    <table class="table table-striped mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>
                        <a href="{{ route('${LOWER_MODEL_NAME}.show', $item->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('${LOWER_MODEL_NAME}.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('${LOWER_MODEL_NAME}.destroy', $item->id) }}" method="POST" class="d-inline">
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
