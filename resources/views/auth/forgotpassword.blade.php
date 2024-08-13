@extends('auth.layouts.default')
@section('customhead')
<title>{{ env('APP_NAME') }} | Login</title>
    <!-- Custom styles for this template -->
    <link href="bootstrap-4.1.3-dist/customcss/signin.css" rel="stylesheet">
@endsection

@section('content')
<form class="form-signin">
      <img class="mb-4" src="{{url('logo.jpg')}}" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Forgot Password</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2010-<?php echo date("Y"); ?>
      </p>
    </form>
@endsection


@section('customfooter')

@endsection

