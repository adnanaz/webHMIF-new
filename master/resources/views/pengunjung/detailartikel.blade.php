@extends('layout.pengunjung')

@section('title','Detail Artikel')

@section('content')

<body class="background">
    <header class="">
        <nav class="menu">
            <div class="title">MENU</div>
            <ul class="nav">
                <li class="li-item"><a href="#" class="navbar-brand"><img class="logo" src="//assets/img/logo@2x.png"
                            alt="logo-HMIF"></a></li>
                <li class="li-item"><a href="/">Home</a></li>
                <li class="li-item"><a href="#">About</a></li>
                <li class="li-item"><a href="#">Work</a></li>
                <li class="li-item"><a href="#">Resources</a></li>
                <li class="li-item"><a href="#">Contact</a></li>
                <li class="socmed"><img src="/assets/img/loc.png" width="17%" alt="Logo-Location"><br>
                    <p class="mt-2">Gedung BSC Lt. 3
                        Universitas Amikom Yk
                        Yogyakarta</p>
                </li>
                <li class="socmed"><a class="" href="#"><img src="/assets/img/yt.png" alt="Logo-Youtube" width="30%"></a>
                </li>
                <li class="socmed"><a class="" href="#"><img src="/assets/img/IG.png" alt="Logo-Youtube" width="30%"></a>
                </li>
                <li class="socmed"><a class="" href="#"><img src="/assets/img/FB.png" alt="Logo-facebook"
                            width="30%"></a>
                </li>
                <li class="socmed"><a class="" href="#"><img src="/assets/img/Twitter.png" alt="Logo-Twitter"
                            width="30%"></a>
                </li>
                <li class="socmed"><a class="" href="#"><img src="/assets/img/Line.png" alt="Logo-Line" width="30%"></a>
                </li>
                <li class="socmed"><a class="" href="#"><img src="/assets/img/email.png" alt="Logo-email"
                            width="30%"></a>
                </li>
            </ul>
        </nav>

        <nav class="navbar hide navbar-light bg-none">
            <a class="pl-2 navbar-brand">
                <img src="//assets/img/logohmif.svg" width="100" height="100" alt="">
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
        <section class="berita mt-2 background2" id="berita">
            <div class="container-fluid">
                <h5 class="color">ARTICLE HMIF</h5>

                <article class="card-overlay__detail">
                    <div class="card__detail">
                        <div class="preview__img">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide"> <img width="100%" src="/assets/img/FotoSemnas19.jpg"
                                            alt="Event photos"></div>
                                    <div class="swiper-slide"> <img width="100%" src="/assets/img/FotoSemnas19.jpg"
                                            alt="Event photos"></div>
                                    <div class="swiper-slide"> <img width="100%" src="/assets/img/FotoSemnas19.jpg"
                                            alt="Event photos"></div>
                                    <div class="swiper-slide"> <img width="100%" src="/assets/img/FotoSemnas19.jpg"
                                            alt="Event photos"></div>
                                    <div class="swiper-slide">Slide 5</div>
                                    <div class="swiper-slide">Slide 6</div>
                                    <div class="swiper-slide">Slide 7</div>
                                    <div class="swiper-slide">Slide 8</div>
                                    <div class="swiper-slide">Slide 9</div>
                                    <div class="swiper-slide">Slide 10</div>
                                </div>
                                <!-- Add Pagination -->
                                <div class="swiper-pagination"></div>
                                <!-- Add Arrows -->
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>


                        </div>
                        <h5>TIPS MENGHADAPI CORONA TANPA SESAL</h5>
                        <div class="">
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. A ipsum optio maiores velit
                                reprehenderit quisquam nesciunt, quod explicabo deleniti sapiente rem architecto ut
                                minima adipisci sunt? Eos deserunt fugit consequatur blanditiis obcaecati praesentium ab
                                rem dicta animi, suscipit ratione autem minima laudantium quibusdam. Itaque tenetur
                                velit quae, saepe, cumque molestiae harum tempore exercitationem a eligendi quas in
                                officia doloremque autem mollitia ipsum laudantium beatae optio? Quaerat blanditiis
                                mollitia officia et nesciunt quas minima eligendi, porro beatae aliquam aspernatur ipsa
                                dignissimos rem distinctio qui hic consequatur sint recusandae magni asperiores maxime
                                nihil, eum labore totam. Sequi nihil harum maiores aut unde!
                                <br><br>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda suscipit quo facere
                                autem numquam amet laboriosam velit asperiores veritatis cum.
                                <br><br>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse, eum odit expedita,
                                eligendi asperiores unde dolor tempore nulla praesentium repudiandae facere quidem,
                                reprehenderit earum iusto? Ea ex voluptate assumenda debitis!
                                <br><br>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, facilis.</p>
                        </div>
                    </div>
                </article>

            </div>
        </section>


        <footer class="footer mt-5 shadow border">
            <div class="container-fluid">
                <div class="footer__flex">

                    <div class="footer__item">
                        <div class="footer__item--head">
                            <h3>Tentang HMIF AMIKOM</h3>
                            <hr class="footer__hr hr-1">
                        </div>

                        <div class="footer__item--body1">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam in quisquam accusantium
                                est neque. Placeat repellendus assumenda porro et dolore?</p>
                            <div class="social">
                                <img class="address__img" src="/assets/img/address.png" alt="icon-alamat">
                                <span class="body__span">Gedung BSC Lt. 3 Universitas Amikom Yk Yogyakarta</span>
                                <br>
                                <img class="phone__img" src="/assets/img/phone.png" alt="icon-alamat">
                                <span class="body__span">+628 777 111 </span>
                                <br>
                                <img class="email__img" src="/assets/img/email.png" alt="icon-alamat">
                                <span class="body__span">www.hmifamikom.org </span>
                            </div>


                        </div>
                    </div>

                    <div class="footer__item">
                        <div class="footer__item--head">
                            <h3>Menu Featured</h3>
                            <hr class="footer__hr hr-2">
                        </div>

                        <div class="footer__item--body2">
                            <ul class="body__ul">
                                <li class="body__li"><a href="#"><span class="body__span">Landing Page</span></a></li>
                                <li class="body__li"><a href="#"><span class="body__span">Divisi</span></a></li>
                                <li class="body__li"><a href="#"><span class="body__span">Youtube </span></a>
                                </li>
                                <li class="body__li"><a href="#"><span class="body__span">Official
                                            Merchandise</span></a></li>
                                <li class="body__li"><a href="#"><span class="body__span">Visi & Misi </span></a>
                                <li class="body__li"><a href="#"><span class="body__span">Visi & Misi </span></a>
                                </li>
                            </ul>


                        </div>
                    </div>

                    <div class="footer__item">
                        <div class="footer__item--head">
                            <h3>TRACK HMIF ON</h3>
                            <hr class="footer__hr hr-4">
                        </div>


                        <div class="footer__item--body4">
                            <div class="social">
                                <img class="fb__img" src="/assets/img/fb.png" alt="icon-fb">
                                <a href="#"><span class="body__span">hmifamikom</span></a>
                                <br>
                                <img class="ig__img" src="/assets/img/ig.png" alt="icon-ig">
                                <a href="#"><span class="body__span">@hmifamikom </span></a>
                                <br>
                                <img class="twitter__img" src="/assets/img/twitter.png" alt="icon-twitter">
                                <a href="#"><span class="body__span">hmifamikom@org.com </span></a>
                                <br>

                            </div>
                        </div>
                    </div>

                    <div class="footer__item special">
                        <div class="footer__item--flex">
                            <ul class="">
                                Sitemaps </li>
                                <li>SearchUs </li>
                                <li>Advance </li>
                                <li>Contact HMIF </li>
                            </ul>
                            <div class="box2">
                                <span class="copy">2020 - HMIF Universitas Amikom Yogyakarta
                                </span>

                                <span class="copy"> &copy All Rights Reserved.</span>
                            </div>
                        </div>
                    </div>
                </div>
        </footer>
    </main>
</body>

@endsection