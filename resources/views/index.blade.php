<!DOCTYPE html>
<html lang="{{ config("app.locale")}}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <meta name="csrf-token" content="{{csrf_token()}}" >
        <title>{{env("APP_NAME")}}</title>
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="{{url('css/index.css')}}">
    </head>
    <body class="antialiased">
    <div id="app">

           @if(Auth::check())
                <index-component :user="{{Auth::user()}}" :permission="{{Auth::user()->role}}"></index-component>
            @else
                <index-component :user="false"></index-component>
            @endif
            </div>
        <script src="{{url('js/index.js')}}"></script>
    </body>
</html>
