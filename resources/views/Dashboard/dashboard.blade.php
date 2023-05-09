<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <title>{{ $title }}</title>
</head>
<body>
    <!-- Top Navbar -->
    @include('template.topNavbar')
    <!-- Top Navbar -->
    @include('template.leftNavbar')

</body>
<script src="{{ asset('js/scripts.js') }}"></script>
</html>