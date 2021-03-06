<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>@yield('title')</title>
    <link rel='stylesheet' type='text/css' href='https://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css' >
    @yield('styles')
    <style>
        body {
            padding-top: 40px;
            padding-bottom: 40px;
        }
    </style>
</head>
<body>
<div class='container'>
    @yield('content')
</div>
<script type='text/javascript' src='https://code.jquery.com/jquery-3.3.1.js'></script>
<script type='text/javascript' src='https://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
@routes
@yield('scripts')
</body>
</html>