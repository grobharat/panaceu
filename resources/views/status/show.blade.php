@extends('layouts.app')

@section('title', '${MODEL_NAME} Details')

@section('content')
    <h1>${MODEL_NAME} Details</h1>
    <a href="{{ route('${LOWER_MODEL_NAME}.index') }}" class="btn btn-secondary">Back to List</a>

    <table class="table table-bordered mt-3">
        <tr>
            <th>ID</th>
            <td>{{ $item->id }}</td>
        </tr>
        <tr>
            <th>Name</th>
            <td>{{ $item->name }}</td>
        </tr>
    </table>
@endsection
