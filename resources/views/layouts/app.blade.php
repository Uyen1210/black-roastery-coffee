<!doctype html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BLACK Roastery Coffee - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #e0c4a0;
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
        }

        header,
        footer {
            background: #230808;
            color: #fff;
            padding: 12px 0;
        }

        nav a {
            color: #fff;
            margin-right: 12px;
            text-decoration: none;
        }

        .banner {
            background: url('https://i.pinimg.com/736x/84/68/21/846821f2a4c02ff5adb3599b00c4915a.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            color: rgb(248, 239, 229);
            padding: 40px;
            text-align: center;
            border-radius: 8px;
        }

        .card {
            border: 1px solid #eee;
            padding: 12px;
            border-radius: 8px;
        }

        img.responsive {
            max-width: 100%;
            height: auto;
            border-radius: 6px;
        }
    </style>
</head>

<body>
    @include('partials.header')

    <main class="container">
        @yield('content')
    </main>

    @include('partials.footer')
</body>

</html>