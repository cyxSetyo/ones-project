<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Link CSS -->
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <!-- Father Icon -->
    <script src="https://unpkg.com/feather-icons"></script>
    <title>{{ $title }}</title>
</head>
<body>
    <!-- Top Navbar -->
    @include('template.topNavbar')
    <!-- Top Navbar -->
    @include('template.leftNavbar')

    @include('template.content')



</body>
<!-- Father Icon -->
<script>
    feather.replace()
</script>
<script src="{{ asset('js/scripts.js') }}"></script>
</html>