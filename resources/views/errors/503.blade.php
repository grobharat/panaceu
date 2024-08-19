<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>We'll Be Back Soon | Maintenance Mode</title>
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
        <h1>We'll Be Back Soon!</h1>
        <p>Sorry for the inconvenience, but we’re performing some maintenance at the moment. We’ll be back online shortly!</p>
        <p class="timer">Estimated time remaining: <span id="countdown">00:15:00</span></p>

        <div class="social-icons">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
        </div>

        <footer>
            &copy; 2024 PANACEU. All rights reserved.
        </footer>
    </div>

    <!-- Optional JavaScript for Countdown Timer -->
    <script>
        // Simple countdown timer (optional)
        let countdownElement = document.getElementById('countdown');
        let countdownTime = 15 * 60; // 15 minutes

        let timer = setInterval(function() {
            let minutes = Math.floor(countdownTime / 60);
            let seconds = countdownTime % 60;

            seconds = seconds < 10 ? '0' + seconds : seconds;
            countdownElement.textContent = `${minutes}:${seconds}`;

            if (countdownTime <= 0) {
                clearInterval(timer);
            } else {
                countdownTime--;
            }
        }, 1000);
    </script>
</body>
</html>
