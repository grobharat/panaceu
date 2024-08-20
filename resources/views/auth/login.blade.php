@extends('layoutsauth.default')
@section('customhead')
<title>{{ env('APP_NAME') }} | Login</title>
    <!-- Custom styles for this template -->
    <link href="bootstrap-4.1.3-dist/customcss/signin.css" rel="stylesheet">
@endsection

@section('content')
<form class="form-signin" method="POST" action="{{url('/login')}}">
  @csrf
      <a href="{{url('/home')}}"><img class="mb-4" src="{{url('logo.png')}}" alt=""  height="72"></a>
      <h1 class="h3 mb-3 font-weight-normal">Login</h1>
      <div style="margin-bottom: 10px;">
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
      </div>
      <div>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
      </div>
      
      <div class="checkbox mb-1">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block mb-2" type="submit">Sign in</button>
      <p>Don't have an account? <a href="{{url('/register')}}">Sign up</p></a>
      <p class="mt-5 mb-3 text-muted">&copy; 2010-<?php echo date("Y"); ?>
      </p>
    </form>
      
@endsection


@section('customfooter')

@endsection

