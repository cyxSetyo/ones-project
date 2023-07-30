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
    
    <!-- HEADER -->
        @include('template.header')

    <!-- Main content -->
        @include('template.content')
    
    <!-- FOOTER -->
        @include('template.footer')

</body>
<!-- Father Icon -->
<script>
    feather.replace()
</script>
<script src="{{ asset('js/scripts.js') }}"></script>
</html>