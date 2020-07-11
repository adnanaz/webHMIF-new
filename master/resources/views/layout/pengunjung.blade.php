<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/assets/css/hover-min.css">

    <link rel="stylesheet" href="/assets/css/swiper.css">
    <link rel="stylesheet" href="/assets/css/swiper.min.css">
</head>
    <body  class="background">
    <header>
        <div class="container-fluid mobileOn shadow" id="header-wrap">
            <div class="menu-btn">
                <span class="menu-btn__burger"></span>
            </div>
        </div>

        <nav class="nav" id="navbar">
            <ul class="menu-nav lg-off">
                <li class="menu-nav__item">
                    <a class="navbar-brand mobileOn" href="#">
                        <img class="rounded-circle" src="/assets/img/logo.png" width="100" height="100" alt="">
                    </a>
                </li>
                <li class="menu-nav__item active">
                    <a href="#" class="menu-nav__link">
                        Home
                    </a>
                </li>
                <li class="menu-nav__item">
                    <a href="#divisi" class="menu-nav__link">
                        Divisi
                    </a>
                </li>
                <li class="menu-nav__item">
                    <a href="http://banksoal.hmifamikom.org/" class="menu-nav__link">
                        Bank Soal
                    </a>
                </li>
                <li class="menu-nav__item">
                    <a href="#" class="menu-nav__link">
                        Bank Judul
                    </a>
                </li>
                <li class="menu-nav__item">
                    <a href="#visi" class="menu-nav__link">
                        Visi & Misi
                    </a>
                </li>
                <li class="menu-nav__item mobileOn">
                  <div class="socmed">
                      <a href="https://www.youtube.com/channel/UCYIDh8u2A3fJ0Lzbmodf4ZQ"><img src="assets/img/yt.png" alt="logo Youtube"> </a>
                      <a href="https://www.instagram.com/hmifamikom/"><img src="assets/img/IG.png" alt="logo Instagram"> </a>
                      <a href="https://www.facebook.com/HMIF.AMIKOM"><img src="assets/img/FB.png" alt="logo Facebook"> </a>
                      <a href="https://twitter.com/HMIF_amikom"><img src="assets/img/Twitter.png" alt="logo Twitter"> </a>
                      <a href="http://Bit.ly/LINEHMIF"><img src="assets/img/linee.svg" alt="logo Line"> </a>
                      <a href="hmif@amikom.ac.id"><img src="assets/img/email.png" alt="logo Email"> </a>
                  </div>
                </li>
                <li class="menu-nav__item text-center spesial">
                    <a href="https://www.google.co.id/maps/place/Aula+BSC+Universitas+Amikom+Yogyakarta/@-7.7602201,110.4070384,17z/data=!3m1!4b1!4m5!3m4!1s0x2e7a59269674d7b7:0xb2541bf1571d1936!8m2!3d-7.7602254!4d110.4092271" class="menu-nav__link">
                    <small>Gedung BSC Lantai 3 Universitas Amikom Yogyakarta</small> 
                    </a>
                </li>
                <li class="menu-nav__item text-center">
                    <a href="#"> <small>&copy;2020 – HMIF AMIKOM. All rights reserved. </small></a>   
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
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#divisi">Divisi</a></li>
                                    <li><a href="http://banksoal.hmifamikom.org/">Bank Soal</a></li>
                                    <li><a href="#">Bank Judul</a></li>
                                    <li><a href="#visi">Visi & Misi</a></li>
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

        <script src="/assets/js/swiper.js"></script>
        <script src="/assets/js/swiper.min.js"></script>
        <script src="/assets/js/main.js"></script>
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
                        slidesPerView: 2,
                        spaceBetween: 40,
                    },

                    1400: {
                        slidesPerView: 3,
                        spaceBetween: 40,
                    },

                    1600: {
                        slidesPerView: 4,
                        spaceBetween: 50,
                    }
                }
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

<script>
               var swiper = new Swiper('.swiper-berita', {
                slidesPerView: 1,
                spaceBetween: 20,
                freeMode: true,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: true
                },
                pagination: {
                    el: '.swiper-pagination2',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                  breakpoints: {
                    350: {
                        slidesPerView: 1,
                        spaceBetween: 0,
                    },

                    640: {
                        slidesPerView:1,
                        spaceBetween: 0,
                    },
                    768: {
                        slidesPerView: 1,
                        spaceBetween: 0,
                    },
                    1024: {
                        slidesPerView: 1,
                        spaceBetween: 0,
                    },

                    1400: {
                        slidesPerView: 1,
                        spaceBetween: 0,
                    },

                    1600: {
                        slidesPerView: 1,
                        spaceBetween: 0,
                    }
                }
            });
    </script>
    </body>

</html>