<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sal's Pizza</title>
    <link rel="stylesheet" href="{{ URL::asset('css/metro-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/theme.css')}}">
    <link href="{{ URL::asset('css/iconFont.min.css')}}" rel="stylesheet">

</head>
<body class="metro">
<div class="wrapper">
    <a href="/"><h1>Sal's Pizza</h1></a>
    <hr/>
    @yield('content')
</div>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="{{ URL::asset('js/validate.js')}}"></script>
</body>
</html>