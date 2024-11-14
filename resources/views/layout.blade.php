<!-- resources/views/layout.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marketplace Katering</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <h1>Marketplace Katering</h1>
    </header>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>
