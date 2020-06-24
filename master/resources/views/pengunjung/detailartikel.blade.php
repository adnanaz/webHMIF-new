@extends('layout.pengunjung')

@section('title','Detail Artikel')

@section('content')

<body class="background">
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
                    <a href="index.html" class="menu-nav__link">
                        Home
                    </a>
                </li>
                <li class="menu-nav__item">
                    <a href="portofolio.html" class="menu-nav__link">
                        Divisi
                    </a>
                </li>
                <li class="menu-nav__item">
                    <a href="contact.html" class="menu-nav__link">
                        Bank Soal
                    </a>
                </li>
                <li class="menu-nav__item">
                    <a href="contact.html" class="menu-nav__link">
                        Bank Judul
                    </a>
                </li>
                <li class="menu-nav__item">
                    <a href="contact.html" class="menu-nav__link">
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



        <footer class="footer mt-5 shadow-sm">
        <div class="container-fluid">
           <div class="footer__flex">
               <div class="footer__flex-items">
                   <h5>Direction</h5>
                   <a>Gedung BSC Lt. 3 Universitas Amikom Yogyakarta</a>
                   <iframe class="pt-2" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.2835233294077!2d110.40669181534786!3d-7.7597258944074055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a599bd3bdc4ef%3A0x6f1714b0c4544586!2sUniversitas%20Amikom%20Yogyakarta!5e0!3m2!1sid!2sid!4v1592828063709!5m2!1sid!2sid" 
                width="100%" height="auto" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                 <div class="footer__socmed">
                      <a href="https://www.youtube.com/channel/UCYIDh8u2A3fJ0Lzbmodf4ZQ"><img src="assets/img/yt2.svg" alt="logo Youtube"> </a>
                      <a href="https://www.instagram.com/hmifamikom/"><img src="assets/img/ig2.svg" alt="logo Instagram"> </a>
                      <a href="https://www.facebook.com/HMIF.AMIKOM"><img src="assets/img/fb2.svg" alt="logo Facebook"> </a>
                      <a href="https://twitter.com/HMIF_amikom"><img src="assets/img/twitter2.svg" alt="logo Twitter"> </a>
                      <a href="http://Bit.ly/LINEHMIF"><img src="assets/img/line2.svg" alt="logo Line"> </a>
                      <a href="hmif@amikom.ac.id"><img src="assets/img/gmail2.svg" alt="logo Email"> </a>
                  </div>
                </div>
               <div class="footer__flex-items">
                   <h5>Menu</h5>
                   <ul>
                       <li><a href="#">Home</a></li>
                       <li><a href="#">Divisi</a></li>
                       <li><a href="#">Bank Soal</a></li>
                       <li><a href="#">Bank Judul</a></li>
                       <li><a href="#">Visi & Misi</a></li>
                   </ul>
                  
                </div>

               <div class="footer__flex-items">
                   <h5>Berita Acara</h5>
                   <ul>
                       <li><a href="#">Latihan Dasar Kepemimpinan Manajemen Organisasi 2020</a></li>
                       <li><a href="#">Belajar Bareng Bersama HMIF UAS Ganjil</a></li>
                       <li><a href="#">Belajar Bareng Bersama HMIF UAS Ganjil</a></li>
                       <li><a href="#"> Seminar dan workshop metopen informatika 2019</a></li>
                   </ul>
                </div>


               <div class="footer__flex-items">
                   <h5>Article HMIF</h5>
                   <ul>
                       <li><a href="#"> Tips Tetap Produktif Disaat Corona</a></li>
                       <li><a href="#"> Cara manajemen waktu antara tugas dan organisasi</a></li>
                       <li><a href="#"> Punya penghasilan tetap walaupun</a></li>
                       <li><a href="#"> Tips Tetap Produktif Disaat Corona</a></li>
                       <li><a href="#"> Tips Tetap Produktif Disaat Corona</a></li>
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
</body>

@endsection