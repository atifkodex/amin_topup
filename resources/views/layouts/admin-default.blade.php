<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <title>Amin Topup</title>
  

    @include('includes.admin-header')

</head>

<body>
@yield('content')
@include('sweetalert::alert')

@include('includes.admin-footer')
@yield('javascriptwork')
@yield('inserfooter')
</body>
<script>
    var localUrl = 'http://localhost/amin-topup/';
    var liveUrl = 'http://kodextech.net/amin-topup/';
</script>

</html>
