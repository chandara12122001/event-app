<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MassEvent</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body class=" bg-gray-100">
    @include('app-layout.header')
    @yield('content')
    @include('app-layout.footer')
</body>
</html>