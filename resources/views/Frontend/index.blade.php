<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-------------------- CSS  ----------------------->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/progressbar.css')}}">
    <link rel="stylesheet" href="{{asset('css/project.css')}}">
    <link rel="stylesheet" href="{{asset('css/testmonial.css')}}">
    <link rel="stylesheet" href="{{asset('css/contact.css')}}">
 
  

    <!-------------------- Icon  ----------------------->
    <link rel="shortcut icon" href="{{asset('upload/fav-icon/house.png')}}">
    <!-------------------- Bootstrap v.5  ----------------------->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-------------------- jquery  ----------------------->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    
    <!-------------------- FontAwesome  ----------------------->
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <!-------------------- Animate.css ----------------------->
    {{-- <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/> --}}


    <title>Alucard Home</title>
</head>
<body>
    <dir class="home">

        @include('Frontend.partials.nav')
        @include('Frontend.partials.header')
        @include('Frontend.partials.canvas')
        @include('Frontend.partials.section2')
        @include('Frontend.partials.progessbar')
        @include('Frontend.partials.project')
        @include('Frontend.partials.testemonial')
        @include('Frontend.partials.contact')

    </dir>    


    <section id="header">

    </section>



      <!-- Swiper JS file -->
  <script src="{{asset('js/nav.js')}}"></script>
      <!-- Bootstrap v.5 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



</body>
</html>