@extends('master')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body class="contact">
    <div class="container-contact">
        <p class="sub-contact-content">-Contact-</p>
        <form class="contact-form" action="https://formspree.io/f/xdorvrzn" method="POST">
            <div>
                <input type="text" placeholder="Name" name="name" />
            </div>
            <div>
                <input type="email" placeholder="Email" name="email" />
            </div>
            <div>
                <textarea
                name="massage"
                id="massage"
                placeholder="Massage"
                cols="30"
                rows="10"
                ></textarea>
            </div>
            <div>
                <button class="btn-sumbit">Send Massage</button>
            </div>
        </form>
    </div>
</body>
</html>

@endsection
