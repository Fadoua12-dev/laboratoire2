<!DOCTYPE html>
<html lang="{{ config("app.locale")}}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{csrf_token()}}" >
        <title>Welcome  to Login </title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
       <link href="{{url('css/login.css')}}" rel="stylesheet">
    </head>
    <body class="antialiased">
            <div id="app">
                <Login-component></Login-component>
            </div>
        <script src="{{url('js/login.js')}}"></script>
    </body>
</html>
