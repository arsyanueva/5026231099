<!-- filepath: resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'Default Title')</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-red.css">
    @stack('styles')
</head>
<body>
    @yield('content')
    <script src="https://unpkg.com/feather-icons"></script>
    @stack('scripts')
</body>
</html>
