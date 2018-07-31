<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Filmeet</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
         
         

         <!-- google font -->
         <link href="https://fonts.googleapis.com/css?family=Alegreya+SC|Hind|Josefin+Slab|Playfair+Display+SC|Allura|Arimo|Cinzel|Cookie|Crimson+Text|Gaegu|Julius+Sans+One|Lobster|Open+Sans|Source+Serif+Pro|Quicksand|Satisfy" rel="stylesheet">
         
         
         <link rel="stylesheet" href="{{ secure_asset('css/style.css') }}">
         
         <link href="{{ secure_asset('css/slick.css') }}" rel="stylesheet">
         <script src="src/cta.js"></script>
    </head>
        <body>
          

               @include('commons.navbar')
               
              
            <div class="container">
                @include('commons.error_messages')
    
                @yield('content')
            </div>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
            <script src="{{ secure_asset('js/slick.min.js') }}"></script>
            <script src="{{ secure_asset('js/style.js') }}"></script>
        </body>

</html>