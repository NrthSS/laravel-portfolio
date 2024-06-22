@extends('master')
@section('content')

    



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body class="about">
    <div class="container-about">
        <h2 class="title-about">About Me.</h2>
            <div class="container-information">
                <div class="card-user">
                    <p>Halo, nama saya <span style="font-size: 16px; font-weight: 700;">Muhammad Nur Rizky</span> . Saya seorang siswa di <span style="font-size: 16px; font-weight: 700;"> SMK Wikrama Bogor </span> dengan jurusan Pengembangan Perangkat Lunak dan Gim (PPLG). <br> Saya memiliki minat yang mendalam dalam bidang teknologi informasi dan pemrograman, terutama dalam pengembangan aplikasi dan gim. <br> <br> Di sekolah, saya aktif mengikuti kegiatan ekstrakurikuler, seperti voli dan seni budaya seni lukis. Selain itu, saya juga memiliki hobi berenang, yang membantu saya menjaga kebugaran dan keseimbangan hidup. <br> <br> Saya selalu bersemangat untuk belajar hal baru dan berkolaborasi dengan teman-teman dalam tim. </p>
                    {{-- <p> Kemampuan Dalam Coding yang saya Miliki : <br>
                        - HTML5. <br>
                        - CSS3. <br>
                        - JavaScript. <br>
                        - PHP. <br>
                        - Laravel.
                    </p> --}}
                    <h4 class="sub-title-media">Sosial Media saya :</h4>
                    <div class="icon-media-social-about">
                        <a href="https://www.instagram.com/nurrizkky.v/#">
                            <div class="background-sos ke-1">
                                <i class="fa-brands fa-instagram fa-xl"></i>
                            </div>
                        </a>
                        <a href="www.linkedin.com/in/muhammad-nur-rizky-47b366290">
                            <div class="background-sos ke-2">
                                <i class="fa-brands fa-linkedin-in fa-xl"></i>
                            </div>
                        </a>
                        <a href="https://github.com/NrthSS">
                            <div class="background-sos ke-3">
                                <i class="fa-brands fa-github fa-xl"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="card-user" style="margin-left: 10px">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro, perferendis cumque? Alias reprehenderit blanditiis consequuntur? Quae praesentium earum fuga laborum. Laudantium quam deleniti quidem. Aspernatur dolore adipisci eaque soluta culpa! Atque dolorem harum impedit sequi ullam, possimus dolores illum voluptatum. Ullam ipsa officiis, aliquid voluptates totam voluptatum dolorem magni. <br> <br> Nostrum corrupti alias delectus voluptas, incidunt neque, beatae qui unde nihil modi voluptatum suscipit adipisci fugiat id ipsa!. <br> <br> Esse quam dignissimos nesciunt sint, autem quas! Illum quia voluptas distinctio autem beatae asperiores, similique placeat odit officia ipsam harum modi itaque doloremque, numquam reiciendis, sapiente eligendi velit quas? Nobis ipsam molestiae veritatis.</p>
                </div>
                <div class="container-side-right">
                    <div class="sertifikat-container">
                        <h3 class="sub-judul">Sertifikat.</h3>
                        <img src="/images/sertifikat.png" alt="Sertifikat" class="sertifikat">
                    </div>
                    <div class="icon-container">
                        <h3>My Skills.</h3>
                        <div class="icon-bahasa">
                            <div class="background-icon satu">
                                <i id="icon-1" class="fa-brands fa-html5 fa-2xl"></i>
                            </div>
                            <div class="background-icon dua">
                                <i id="icon-2" class="fa-brands fa-css3-alt fa-2xl"></i>
                            </div>
                            <div class="background-icon tiga">
                                <i id="icon-3" class="fa-brands fa-js fa-2xl"></i>
                            </div>
                            <div class="background-icon empat">
                                <i id="icon-4" class="fa-brands fa-php fa-2xl"></i>
                            </div>
                            <div class="background-icon lima">
                                <i id="icon-5" class="fa-brands fa-laravel fa-2xl"></i>
                            </div>
                        </div>
                    </div>
                    <div class="btn-about">
                        <a href="/contact" class="btn-contact-about">Contact</a>
                    </div>
                </div>
            </div>  
    </div>
</body>
</html>
@endsection