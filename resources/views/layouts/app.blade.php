<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comics</title>
    @vite('resources/js/app.js')
</head>
<body>

    @include('partials.header')

    <main class="text-center p-5">
        @yield('content')
    </main>

    @include('partials.footer')
</body>
</html>