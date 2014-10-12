<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$title}}</title>
    <link rel="stylesheet" href="{{ URL::asset('css/metro-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/theme.css')}}">
    <link href="{{ URL::asset('css/iconFont.min.css')}}" rel="stylesheet">

</head>
<body>
@yield('content')


<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="{{ URL::asset('js/metro.min.js')}}"></script>
</body>
</html>