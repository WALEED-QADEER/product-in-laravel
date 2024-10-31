<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel App')</title>
    <!-- Add any other shared styles or scripts here -->
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
</head>
<body>
    <header>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
    </footer>

</body>
</html>
