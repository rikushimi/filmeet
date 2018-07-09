<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Filmeet</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ url('css/style.css') }}">
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" href="{{ url('js/slick/slick-theme.css') }}" type="text/css">
 　　     <link rel="stylesheet" href="{{ url('slick.css') }}" type="text/css">
    
    </head>
    <body>
     
    @include('commons.navbar')
        <div class="container">
            @include('commons.error_messages')

            @yield('content')
        </div>
        
    
 　 <script src="{{ url('js/slick/slick.js') }}" type="text/javascript"></script>
 　 <script type="text/javascript" src="http://code.jquery.com/jquery-3.1.0.min.js"></script>
    </body>
</html>