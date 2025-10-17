<!doctype html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Neyu Roastery Coffee - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        /* vài style nhanh nếu không dùng Tailwind */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
        }

        header,
        footer {
            background: #222;
            color: #fff;
            padding: 12px 0;
        }

        nav a {
            color: #fff;
            margin-right: 12px;
            text-decoration: none;
        }

        .banner {
            background: #f3f3f3;
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