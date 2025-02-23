<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Miranda DP</title>
    <link rel="icon" type="image/svg+xml" href="src/assets/icons/favicon.svg">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

</head>

<body>
    <div class=" container p-4 mx-auto">
        @if (session('succes'))
            <div class=" bg-green-200 text-green-800 p-2 mb-4">
                {{ session('success') }}
            </div>
        @endif
    </div>
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
