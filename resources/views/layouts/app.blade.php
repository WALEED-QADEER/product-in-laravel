<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel App')</title>
    <!-- Add any other shared styles or scripts here -->
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>
<body>
    <header>
        <h1>@yield('header', 'Product Management System')</h1>
    </header>

    <main>
        <div class="main-container">
            @yield('content')
        </div>
    </main>

</body>
</html>
