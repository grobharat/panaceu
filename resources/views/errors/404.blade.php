<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Not Found | Error 404</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f7f7f7;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }

        .container {
            max-width: 600px;
            background-color: #fff;
            padding: 40px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h1 {
            font-size: 36px;
            margin-bottom: 20px;
            color: #FF6347; /* Tomato color */
        }

        p {
            font-size: 18px;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .timer {
            font-size: 24px;
            color: #555;
            margin-top: 20px;
        }

        .logo {
            margin-bottom: 20px;
        }

        .logo img {
            max-width: 100px;
        }

        .social-icons {
            margin-top: 30px;
        }

        .social-icons a {
            margin: 0 10px;
            text-decoration: none;
            color: #555;
            font-size: 24px;
        }

        footer {
            margin-top: 40px;
            font-size: 14px;
            color: #888;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="{{url('logo.png')}}" alt="Logo">
        </div>
        <h1>Oops! This page does not exists.</h1>
        <p>Go back to Home <a href="{{url('/')}}">click here</a></p>
        <!-- <p class="timer">Estimated time remaining: <span id="countdown">00:15:00</span></p> -->

        <div class="social-icons">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
        </div>

        <footer>
            &copy; 2024 PANACEU. All rights reserved.
        </footer>
    </div>

 
</body>
</html>
