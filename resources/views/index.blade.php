@extends('master')
@section('content')



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body class="index">

<div class="container-home">
    <img src="" alt="">
    <h1><span id="title"></span></h1>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.1.0/typed.umd.js"></script>
    <script>
        var typed = new Typed("#title", {
            strings: ["Halo.", "Selamat Datang di Website Portfolio saya."],
            typeSpeed: 50,
            loop: true
        })
    </script>

    <p>Muhammad Nur Rizky.</p>
    <a href="/about" class="get">Get Started</a>
</div>



</body>
</html>

@endsection