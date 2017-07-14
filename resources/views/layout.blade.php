<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- BOOTSTRAP FILE -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

        <!-- BOOTSTRAP CDN -->
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    </head>
    <body>

        @if(Auth::check())
            @include('includes.user_menunav')
        @else
            @include('includes.guest_menunav')
        @endif

        {{-- <h3 style="text-align: center;">@include('flash::message')</h3> --}}
        @if(Session::has('success'))
            <div class="alert alert-success text-center">
                <h2>{{ Session::get('success') }}</h2>
            </div>
        @endif
         
         
        @yield('mycontent')
 

        
        <script src="https://code.jquery.com/jquery.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       
        <script> 
            $('div.alert').not('.alert-important').not('.alert-danger').delay(3000).slideUp(300);
            {{--$('#flash-overlay-modal').modal();--}}
        </script>
    </body>
</html>
