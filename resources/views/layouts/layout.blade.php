<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])</head>
<body>
<div class="container mt-2">
    @yield('content')
</div>
</body>
</html>
