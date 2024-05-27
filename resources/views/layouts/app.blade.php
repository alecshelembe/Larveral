<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Application Title</title>
    <!-- Include any CSS or JavaScript files -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Additional styles or scripts -->
</head>
<body>
    <header>
        <!-- Your navigation bar or header content -->
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <!-- Add other navigation links as needed -->
            </ul>
        </nav>
    </header>

    <main>
        <!-- Content section -->
        @yield('content')
    </main>

    <footer>
        <!-- Footer content -->
        &copy; {{ date('Y') }} Your Company Name
    </footer>

    <!-- Include any JavaScript files -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- Additional scripts -->
</body>
</html>
