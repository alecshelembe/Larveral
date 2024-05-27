<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Include CSS, JavaScript, and other meta tags -->
</head>
<body>
    <header>
        <!-- Navigation bar, logo, etc. -->
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <!-- Other navigation links -->
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <!-- Footer content -->
    </footer>
</body>
</html>
