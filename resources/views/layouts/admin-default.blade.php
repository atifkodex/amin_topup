<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <title>Amin Topup</title>
    <!-- Toaster CDN  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" 
     href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

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
