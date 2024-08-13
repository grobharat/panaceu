@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Show Website</h1>
    <p><strong>ID:</strong> {{ $user->id }}</p>
    <p><strong>Name:</strong> {{ $user->name }}</p>
    <p><strong>Email:</strong> {{ $user->email }}</p>
</div>
@endsection
