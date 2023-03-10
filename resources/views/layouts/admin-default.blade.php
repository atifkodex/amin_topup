<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <title>Amin Topup</title>
    <!-- Toaster CDN  -->
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet"> -->
    

    @include('includes.admin-header')

</head>

<body>
@yield('content')

@include('includes.admin-footer')
@yield('javascriptwork')
@yield('inserfooter')
@include('sweetalert::alert')
</body>
<script>
    var localUrl = 'http://localhost/amin-topup/';
    var liveUrl = 'http://kodextech.net/amin-topup/';
</script>

</html>
