<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CubeMoons Laravel App</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <style>
        html, body {
            background-color: #f9f9f9;
            color: #333;
            font-family: 'Nunito', sans-serif;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .title {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .subtitle {
            font-size: 1.25rem;
            color: #555;
            margin-bottom: 30px;
        }

        .links > a {
            color: #fff;
            background-color: #3490dc;
            padding: 12px 25px;
            font-size: 1rem;
            font-weight: 600;
            letter-spacing: .05rem;
            text-decoration: none;
            border-radius: 8px;
            transition: 0.3s;
            margin: 0 10px;
        }

        .links > a:hover {
            background-color: #2779bd;
            transform: translateY(-2px);
        }

        .card {
            background-color: #fff;
            padding: 40px 60px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.08);
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="flex-center full-height">
        <div class="card animate__animated animate__fadeInDown">
            <div class="title">CubeMoons</div>
            <div class="subtitle">Your Laravel application is deployed and running!</div>
            <div class="links animate__animated animate__fadeInUp animate__delay-1s">
                <a href="/products">Products</a>
                <a href="/dashboard">Dashboard</a>
            </div>
        </div>
    </div>
</body>
</html>

