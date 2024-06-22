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
    <h3 class="sub-title-home">Halo👋. </h3>
    <h1><span id="title"></span></h1>
    <a href="/about" class="get">Get Started 👇</a>
    <div class="footer">
        <p class="copyright">© Muhammad Nur Rizky | 2024</p>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.1.0/typed.umd.js"></script>
<script>
    var typed = new Typed("#title", {
        strings: ["Selamat Datang di Website Portfolio saya😁.", "Nama saya adalah Muhammad Nur Rizky."],
        typeSpeed: 62,
        loop: true
    })
</script>

</body>
</html>

@endsection