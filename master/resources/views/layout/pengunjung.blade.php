<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/node_modules/swiper/css/swiper.css">
    <link rel="stylesheet" href="/node_modules/swiper/css/swiper.min.css">

    <link rel="stylesheet" href="/assets/css/hover-min.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
</head>
    <body class="background">
        <header>
            <div class="container-fluid mobileOn shadow" id="header-wrap">
                <div class="menu-btn">
                    <span class="menu-btn__burger"></span>
                </div>
            </div>

            <nav class="menu">
                <div class="title">MENU</div>
                <ul class="nav">
                    <li class="li-item"><a href="#" class="navbar-brand"><img class="logo" src="/assets/img/logo@2x.png"
                                alt="logo-HMIF"></a></li>
                    <li class="li-item"><a href="#">Home</a></li>
                    <li class="li-item"><a href="#">About</a></li>
                    <li class="li-item"><a href="#">Work</a></li>
                    <li class="li-item"><a href="#">Resources</a></li>
                    <li class="li-item"><a href="#">Contact</a></li>
                    <li class="socmed"><img src="assets/img/loc.png" width="17%" alt="Logo-Location"><br>
                        <p class="mt-2">Gedung BSC Lt. 3
                            Universitas Amikom Yk
                            Yogyakarta</p>
                    </li>
                    <li class="socmed"><a class="" href="#"><img src="assets/img/yt.png" alt="Logo-Youtube" width="30%"></a>
                    </li>
                    <li class="socmed"><a class="" href="#"><img src="assets/img/IG.png" alt="Logo-Youtube" width="30%"></a>
                    </li>
                    <li class="socmed"><a class="" href="#"><img src="assets/img/FB.png" alt="Logo-facebook"
                                width="30%"></a>
                    </li>
                    <li class="socmed"><a class="" href="#"><img src="assets/img/Twitter.png" alt="Logo-Twitter"
                                width="30%"></a>
                    </li>
                    <li class="socmed"><a class="" href="#"><img src="assets/img/Line.png" alt="Logo-Line" width="30%"></a>
                    </li>
                    <li class="socmed"><a class="" href="#"><img src="assets/img/email.png" alt="Logo-email"
                                width="30%"></a>
                    </li>
                </ul>
            </nav>
    
            <nav class="navbar hide navbar-light bg-none">
                <a class="pl-2 navbar-brand">
                    <img src="/assets/img/logohmif.svg" width="100" height="100" alt="">
                </a>
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#divisi">Divisi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://www.banksoal.hmifamikom.org/">Bank Soal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#berita">Berita Acara</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#artikel">Artikel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#visi">VISI & MISI</a>
                    </li>
                </ul>
            </nav>
        </header>

            <main>
                
                @yield('content')

                <footer class="footer mt-5 shadow-sm">
                    <div class="container-fluid">
                        <div class="footer__flex">
                            <div class="footer__flex-items">
                                <h5>Direction</h5>
                                <a>Gedung BSC Lt. 3 Universitas Amikom Yogyakarta</a>
                                <iframe class="pt-2" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.2835233294077!2d110.40669181534786!3d-7.7597258944074055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a599bd3bdc4ef%3A0x6f1714b0c4544586!2sUniversitas%20Amikom%20Yogyakarta!5e0!3m2!1sid!2sid!4v1592828063709!5m2!1sid!2sid" 
                            width="100%" height="auto" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                <div class="footer__socmed">
                                    <a href="https://www.youtube.com/channel/UCYIDh8u2A3fJ0Lzbmodf4ZQ"><img src="/assets/img/yt2.svg" alt="logo Youtube"> </a>
                                    <a href="https://www.instagram.com/hmifamikom/"><img src="/assets/img/ig2.svg" alt="logo Instagram"> </a>
                                    <a href="https://www.facebook.com/HMIF.AMIKOM"><img src="/assets/img/fb2.svg" alt="logo Facebook"> </a>
                                    <a href="https://twitter.com/HMIF_amikom"><img src="/assets/img/twitter2.svg" alt="logo Twitter"> </a>
                                    <a href="http://Bit.ly/LINEHMIF"><img src="/assets/img/line2.svg" alt="logo Line"> </a>
                                    <a href="hmif@amikom.ac.id"><img src="/assets/img/gmail2.svg" alt="logo Email"> </a>
                                </div>
                            </div>
                            <div class="footer__flex-items">
                                <h5>Menu</h5>
                                <ul>
                                    <li><a href="/">Home</a></li>
                                    <li><a href="#">Divisi</a></li>
                                    <li><a href="#">Bank Soal</a></li>
                                    <li><a href="#">Bank Judul</a></li>
                                    <li><a href="#">Visi & Misi</a></li>
                                </ul>
                                
                            </div>
            
                            <div class="footer__flex-items">
                                <h5>Berita Acara</h5>
                                <ul>
                                    @foreach ($beritaAcara as $item)
                                        <li><a href="{{ route('detailberitaacara.index', $item->slug) }}">{{$item->judul}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
            
            
                            <div class="footer__flex-items">
                                <h5>Article HMIF</h5>
                                <ul>
                                    @foreach ($articles as $item)
                                        <li><a href="{{ route('detailartikel.index', $item->slug) }}">{{$item->judul}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
            
            
                        </div>
                    
                        <div class="text-center">
                            <small>HMIF AMIKOM</small>
                            <br>
                            <small> &copy All right reserved - 2020</small>
                        </div>
                    </div>
                </footer>
            </main>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
            </script>
        <script src="/assets/js/bootstrap.min.js"></script>
        <script src="/assets/js/main.js"></script>
        <script src="https://unpkg.com/swiper/js/swiper.js"></script>
        <script src="https://unpkg.com/swiper/js/swiper.min.js"></script>

        <script>
            //berita acara swiper
            var swiper = new Swiper('.swiper-container', {
                pagination: {
                    el: '.swiper-pagination',
                    type: 'fraction',
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                breakpoints: {
                    350: {
                        slidesPerView: 1,
                        spaceBetween: 10,
                    },

                    640: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 40,
                    },
                    1024: {
                        slidesPerView: 3,
                        spaceBetween: 1,
                    },

                    1400: {
                        slidesPerView: 3,
                        spaceBetween: 1,
                    },

                    1600: {
                        slidesPerView: 4,
                        spaceBetween: 1,
                    }
                }
            });

            var swiper = new Swiper('.swiper2', {
                slidesPerView: 1,
                spaceBetween: 20,
                freeMode: true,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: true
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
            });

            //text limiter 
            $('.textLimit').each(function () {
                var $pTag = $(this).find('p');
                if ($pTag.text().length > 100) {
                    var shortText = $pTag.text();
                    shortText = shortText.substring(0, 200);
                    $pTag.addClass('fullArticle').hide();
                    shortText += '<a href="#" class="read-more-link">baca lebih banyak..</a>';
                    $pTag.append('<a href="#" class="read-less-link"> &lt- baca lebih sedikit..</a>');
                    $(this).append('<p class="preview">' + shortText + '</p>');
                }
            });

            $(document).on('click', '.read-more-link', function () {
                $(this).parent().hide().prev().show();
            });

            $(document).on('click', '.read-less-link', function () {
                $(this).parent().hide().next().show();
            });

            $(document).ready(function () {
                if (window.location.hash) {
                    var hash = window.location.hash;
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 10000);
                };
            });

            var prevScrollpos = window.pageYOffset;
            window.onscroll = function () {
                var currentScrollPos = window.pageYOffset;
                if (prevScrollpos > currentScrollPos) {
                    document.getElementById("navbar").style.top = "0";
                    document.getElementById("header-wrap").style.top = "0";
                } else {
                    document.getElementById("navbar").style.top = "-9%";
                    document.getElementById("header-wrap").style.top = "-9%";

                }
                prevScrollpos = currentScrollPos;
            }

        </script>
    </body>

</html>