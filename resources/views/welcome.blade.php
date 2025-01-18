<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Vite -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            .landing-page {
                background: #f8f9fa;
                padding: 100px 0;
            }
            .landing-page .header {
                font-size: 3rem;
                font-weight: bold;
            }
            .landing-page .subheader {
                font-size: 1.2rem;
                color: #6c757d;
                margin-bottom: 30px;
            }
            .landing-page .cta-btn {
                font-size: 1.1rem;
                padding: 12px 30px;
                border-radius: 30px;
                transition: background-color 0.3s;
            }
            .landing-page .cta-btn:hover {
                background-color: #007bff;
            }
            .footer {
                background: #343a40;
                color: #fff;
                padding: 20px 0;
                text-align: center;
            }
        </style>
    </head>
    <body class="font-sans antialiased">
        <div class="landing-page text-center">
            <div class="container">
                <h1 class="header">Welcome to {{ config('app.name', 'Laravel') }}</h1>
                <p class="subheader">Manage your tasks efficiently and take control of your productivity.</p>
                <a href="{{ route('login') }}" class="btn btn-primary btn-lg cta-btn">Get Started</a>
            </div>
        </div>

        <div class="footer">
            <p>&copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}. All Rights Reserved.</p>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>
    </body>
</html>
