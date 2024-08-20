@extends('layoutsauth.default')

@section('customhead')
    <title>{{ env('APP_NAME') }} | Register</title>
    <!-- Custom styles for this template -->
    <link href="{{ asset('bootstrap-4.1.3-dist/customcss/signin.css') }}" rel="stylesheet">
@endsection

@section('content')
    <form class="form-signin" action="{{ route('register') }}" method="POST" id="registerForm">
        @csrf
        <a href="{{url('/home')}}"><img class="mb-4" src="{{ url('logo.png') }}" alt=""  height="72"></a>
        <h1 class="h3 mb-3 font-weight-normal">Register</h1>

        <div style="margin-bottom: 10px;">
            <label for="inputName" class="sr-only">Name</label>
            <input type="text" id="inputName" name="name" class="form-control" placeholder="Name" required autofocus>
        </div>

        <div style="margin-bottom: 10px;">
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required>
        </div>

        <div style="margin-bottom: 10px;">
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
        </div>

        <div style="margin-bottom: 10px;">
            <label for="inputConfirmPassword" class="sr-only">Confirm Password</label>
            <input type="password" id="inputConfirmPassword" name="password_confirmation" class="form-control" placeholder="Confirm Password" required>
            <div id="passwordHelpBlock" class="form-text text-danger d-none">Passwords do not match.</div>
        </div>
      
        <div class="checkbox mb-1">
            <label>
                <input type="checkbox" name="remember" value="1"> Remember me
            </label>
        </div>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign-in</button>
        <p>Already have an account? <a href="{{url('/login')}}">Login</p></a>
        <p class="mt-5 mb-3 text-muted">&copy; 2010-<?php echo date("Y"); ?></p>
    </form>

    <script>
        document.getElementById('registerForm').addEventListener('submit', function(event) {
            var password = document.getElementById('inputPassword').value;
            var confirmPassword = document.getElementById('inputConfirmPassword').value;
            if (password !== confirmPassword) {
                event.preventDefault(); // Prevent form submission
                document.getElementById('passwordHelpBlock').classList.remove('d-none'); // Show error message
            }
        });
    </script>
    
@endsection

@section('customfooter')
    
@endsection
