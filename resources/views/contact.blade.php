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
    <h3 class="sub-contact-content">- Contact -</h3>
    
        <div class="container-contact">
            <div class="contact-left">
                <div class="social-media-info">
                    {{-- BUKAN LINK hanya sebagai pointer dan informasi nama Email --}}
                    <a href="" class="link-social-media-contact">
                        <div class="social-media-icon-contact-1">
                            <i class="fa-solid fa-envelope fa-2xl icon-1-contact ic-sc-1"></i>
                            <div class="container-text-contact-sc">
                                <h3>EMAIL</h3>
                                <p>nurrizkyr90@gmail.com</p>
                            </div>
                        </div>
                    </a>
                    {{-- LINK LINKED --}}
                    <a href="https://www.linkedin.com/in/muhammad-nur-rizky-47b366290/" class="link-social-media-contact">
                        <div class="social-media-icon-contact-1 second-sc">
                            <i class="fa-brands fa-linkedin fa-2xl icon-1-contact ic-sc-2"></i>
                            <div class="container-text-contact-sc">
                                <h3>LINKED</h3>
                                <p>Muhammd Nur Rizky</p>
                            </div>
                        </div>
                    </a>
                    {{-- LINK INSTAGRAM --}}
                    <a href="https://www.instagram.com/nurrizkky.v/#" class="link-social-media-contact">
                        <div class="social-media-icon-contact-1 third-sc">
                            <i class="fa-brands fa-instagram fa-2xl icon-1-contact ic-sc-3"></i>
                            <div class="container-text-contact-sc">
                                <h3>INSTAGRAM</h3>
                                <p>nurrizkky.v</p>
                            </div>
                        </div>
                    </a>
                    {{-- LINK GITHUB --}}
                    <a href="https://github.com/NrthSS" class="link-social-media-contact">
                        <div class="social-media-icon-contact-1">
                            <i class="fa-brands fa-github fa-2xl icon-1-contact ic-sc-4"></i>
                            <div class="container-text-contact-sc">
                                <h3>GITHUB</h3>
                                <p>NrthSS</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div> <!-- Akhir div dengan class container-contact -->
    

        <div class="contact-right">
            <p>Massege Me 👇</p>
            <br>
            <form class="contact-form" action="https://formspree.io/f/xdorvrzn" method="POST">
                <div class="input-name">
                    <input type="text" placeholder="Name" name="name" />
                </div>
                <div class="input-email">
                    <input type="email" placeholder="Email" name="email" />
                </div>
                <div class="input-massage">
                    <textarea
                    name="massage"
                    id="massage"
                    placeholder="Massage"
                    cols="30"
                    rows="10"
                    ></textarea>
                </div>
                <div class="btn-submit-parent">
                    <button class="btn-sumbit">Send Massage 🙌</button>
                </div>
            </form>
        </div>
        <footer>
            <p>Muhammad Nur Rizky | © 2024</p>
        </footer>
    </div>

    
    
</body>
</html>

@endsection
