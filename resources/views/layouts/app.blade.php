<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hotel DP</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

</head>

<body>

</body>
<div class=" container p-4 mx-auto">
    @if (session('succes'))
        <div class=" bg-green-200 text-green-800 p-2 mb-4">
            {{ session('succes') }}
        </div>
    @endif
    @yield('content')
</div>

</html>
