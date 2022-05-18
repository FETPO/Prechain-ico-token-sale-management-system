<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }} | {{$title}}</title>

    <!-- Google Fonts -->
    <link href="{{ asset('css/fontgoogle.css') }}"
        rel="stylesheet">
    <script src="{{asset('dash/js/jquery.js')}}"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
     <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
    <script defer src="{{asset('dash/js/alpine.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
</head>
 <body class="d-flex flex-column h-100 auth-page">
      {{ $slot }}
</body>
</html>
