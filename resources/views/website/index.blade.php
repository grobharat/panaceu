<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Panaceu</title>
        <!-- Meta Description -->
        <meta name="description" content="Discover Panaceu's innovative green energy solutions, including Compressed Bio Gas (CBG), solar, wind, and biomass. Transforming waste into energy, we help achieve a sustainable future with cutting-edge renewable technologies.">
    
    <!-- Meta Keywords -->
    <meta name="keywords" content="green energy, Compressed Bio Gas, CBG, renewable energy, waste to energy, sustainable energy, biogas, solar energy, wind energy, biomass, energy solutions, net-zero emissions, Panaceu">
    
    <!-- Meta Author -->
    <meta name="author" content="Panaceu">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Panaceu - Pioneers in Green Energy and CBG Solutions">
    <meta property="og:description" content="Panaceu offers comprehensive renewable energy solutions, specializing in Compressed Bio Gas (CBG) and sustainable technologies to reduce carbon emissions and promote a greener future.">
    <meta property="og:image" content="https://www.panaceu.com/path-to-image.jpg">
    <meta property="og:url" content="https://www.panaceu.com">
    <meta property="og:type" content="website">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Panaceu - Leaders in Green Energy Solutions">
    <meta name="twitter:description" content="Explore Panaceu's expertise in renewable energy and Compressed Bio Gas (CBG) to drive sustainability and innovation.">
    <meta name="twitter:image" content="https://www.panaceu.com/path-to-image.jpg">
    
    <!-- Schema.org Markup for Organization -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "Panaceu",
      "url": "https://www.panaceu.com",
      "logo": "https://www.panaceu.com/path-to-logo.jpg",
      "sameAs": [
        "https://www.facebook.com/Panaceu",
        "https://www.linkedin.com/company/Panaceu"
      ],
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+1-800-555-5555",
        "contactType": "Customer Service"
      }
    }
    </script>

    <!-- CSS for styling and animations -->
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Arial', sans-serif;
            overflow: hidden;
            /* background: #282c34; */
            background: #00FFFF;
            color: #000000;
            text-align: center;
        }

        .container {
            position: relative;
            z-index: 10;
            display: flex;
            flex-direction: column;
            align-items: center;
            animation: fadeIn 2s ease-in-out;
        }

        .container img {
            width: 200px;
            animation: popIn 2s ease-in-out forwards;
        }

        .tagline {
            margin-top: 2px;
            font-size: 1.0em;
            color:blue;
            opacity: 0;
            animation: fadeIn 2s 2s forwards;
        }

        .description {
            margin-top: 20px;
            font-size: 1.2em;
            max-width: 600px;
            opacity: 0;
            animation: fadeIn 2s 4s forwards;
        }

        .home-btn {
            margin-top: 30px;
            padding: 15px 30px;
            font-size: 1.2em;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            opacity: 0;
            animation: fadeIn 2s 6s forwards;
        }

        .home-btn:hover {
            background-color: #45a049;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes popIn {
            0% { transform: scale(0); }
            100% { transform: scale(1); }
        }

        /* Bubble background animation */
        .bubbles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
            overflow: hidden;
            pointer-events: none;
        }

        .bubble {
            position: absolute;
            bottom: -100px;
            width: 40px;
            height: 40px;
            background: rgba(0, 0, 0, 0.3);
            border-radius: 50%;
            animation: bubble 7s linear infinite;
        }
        .bubble2 {
            position: absolute;
            bottom: -100px;
            width: 40px;
            height: 40px;
            background: rgba(0, 0, 0, 0.3);
            border-radius: 50%;
            animation: bubble 15s linear infinite;
        }

        .bubble:nth-child(odd) {
            background: rgba(0, 0, 0, 0.1);
        }

        @keyframes bubble {
            0% {
                transform: translateX(0) translateY(0) scale(1);
            }
            50% {
                transform: translateX(50px) translateY(-500px) scale(0.5);
            }
            100% {
                transform: translateX(-50px) translateY(-1000px) scale(1.5);
            }
        }
        @keyframes bubble2 {
            0% {
                transform: translateX(0) translateY(0) scale(1);
            }
            50% {
                transform: translateX(500px) translateY(-50px) scale(0.5);
            }
            100% {
                transform: translateX(-500px) translateY(-100px) scale(1.5);
            }
        }
    </style>

    <!-- Script for redirecting -->
    <script>
        function redirectToHome() {
            window.location.href = '{{url('home')}}';
        }

        // Auto-redirect after 10 seconds
        setTimeout(redirectToHome, 10000);
    </script>
</head>
<body>
    <div class="bubbles">
        <div class="bubble" style="left: 10%; width: 20px; height: 20px;"></div>
        <div class="bubble" style="left: 22%;bottom: 50%; width: 30px; height: 20px;"></div>
        <div class="bubble" style="left: 20%;bottom: 20%; width: 30px; height: 30px;"></div>
        <div class="bubble2" style="left: 25%;"></div>
        <div class="bubble" style="left: 40%; width: 25px; height: 25px;"></div>
        <div class="bubble" style="left: 50%;"></div>
        <div class="bubble" style="left: 50%;bottom: 25%;"></div>
        <div class="bubble2" style="left: 70%; width: 20px; height: 20px;"></div>
        <div class="bubble" style="left: 80%; width: 30px; height: 30px;"></div>
        <div class="bubble" style="left: 80%;bottom: 25%; width: 30px; height: 30px;"></div>
        <div class="bubble2" style="left: 90%;"></div>
    </div>

    <div class="container">
        <!-- Logo -->
        <img src="logo.png" alt="Panaceu Logo">

        <!-- Tagline -->
        <div class="tagline">Engineering Beyond Thoughts</div>

        <!-- Description -->
        <div class="description">
        Panaceu led by <span style="color:red; font-size: 1.2em;">IITians</span> <br> is a leading consultancy and EPC company <br>specializing in the development of renewable energy projects <br> (CBG, Hydrogen, Solar, Wind, Hydro Power)<br> with a commitment to sustainable energy solutions,<br> we provide end-to-end services<br> from feasibility studies to plant commissioning and beyond.
        </div>

        <!-- Home Button -->
        <button class="home-btn" onclick="redirectToHome()">Home</button>
    </div>
</body>
</html>
