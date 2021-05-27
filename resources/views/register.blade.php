<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <meta name="csrf-token" content="{{csrf_token()}}" >
    <title>Register</title>
      <link rel="stylesheet" href="{{url('css/register.css')}}">
</head>
<body>

<h1> 🤗Welcome to our page 🤗 </h1>
<p> If you don't have an account please register...</p>
<h2> Fill in the fields! </h2>
<div> 

 <div id="app">
     <input type="text" placeholder="Enter your first name" id="name" name="firstName" v-model="firstName"> <span class="required"> *</span> </br>
     <input type="text" placeholder="Enter your last name" id="username" name="lastName" v-model="lastName"> <span class="required"> *</span> </br>
     <input type="email" placeholder="Enter your email" id="email" name="email" v-model="email"> <span class="required"> *</span> </br>
     <input type="password" placeholder="Enter your password" name="password" id="password1" v-model="password"> <span class="required"> *</span> </br> 
     <input type="password" placeholder="Retype your password" id="password2" v-model="passwrodRepeat"> <span class="required"> *</span> </br>
     <button type="submit" @click.prevent="register()" class="btn-success" id="button"> Sign Up </button>
    </div>
    <p>If you have an account click <a href="/login"> here </a> to login. </p>

</div>   
<script src="{{url('js/register.js')}}" ></script>
</body>
</html>