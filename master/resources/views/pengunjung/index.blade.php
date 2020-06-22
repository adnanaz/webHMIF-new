@extends('layout.pengunjung')

@section('title','HMIF AMIKOM - Dashboard')

@section('content')

<body class="background">
<header>
        <div class="container-fluid mobileOn shadow" id="header-wrap">
            <div class="menu-btn">
                <span class="menu-btn__burger"></span>
            </div>
            <!-- <a class="navbar-brand p-2 float-right" href="#">
                <img class="rounded-circle" src="/assets/img/logo.png" width="40" height="40" alt="">
            </a> -->
        </div>

        <nav class="nav" id="navbar" style=" transition: top 0.5s;
        height: 65px; position: fixed; z-index:2;">
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
                      <a href="http://Bit.ly/LINEHMIF"><img src="assets/img/line.svg" alt="logo Line"> </a>
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

        <section class="head">
            <div class="container-fluid">
                <h5 class=" content__text">Menciptakan komunikasi yang baik dengan pihak
                    Program Studi Informatika Universitas AMIKOM Yogyakarta.</h5>
                <div class="flex-model">
                    <figure class="fig1"><img class="fig__img" src="/assets/img/model1.svg" alt="model figure 1">
                    </figure>
                    <figure class="fig2"><img class="fig__img2" src="/assets/img/model2.svg" alt="model figure 2">
                    </figure>
                </div>
            </div>
        </section>
    </header>

    <main>
        <section class="berita  background2" id="berita">
            <div class="container-fluid">
                <h5 class="color">BERITA ACARA</h5>

                <div class="swiper-container mt-5">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <article class="card-overlay">
                                <a href="{{ route('detailberitaacara.index') }}" class="hvr-outline-out">
                                    <div class="card">
                                        <div class="preview__img">
                                            <img width="100%" src="/assets/img/FotoSemnas19.jpg" alt="Event photos">
                                        </div>
                                        <h5>Seminar Nasional HMIF 2020</h5>
                                        <div class="textLimit">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam
                                                culpa
                                                blanditiis
                                                sit,
                                                laboriosam at praesentium maxime esse voluptas. Quos aliquid, possimus
                                                eum
                                                itaque
                                                accusamus nihil reprehenderit nesciunt excepturi quas sint.</p>
                                        </div>
                                    </div>
                                </a>
                            </article>
                        </div>
                        <div class="swiper-slide">
                            <article class="card-overlay">
                                <a href="{{ route('detailberitaacara.index') }}" class="hvr-outline-out">
                                    <div class="card">
                                        <div class="preview__img">
                                            <img width="100%" src="/assets/img/FotoSemnas19.jpg" alt="Event photos">
                                        </div>
                                        <h5>Seminar Nasional HMIF 2020</h5>
                                        <div class="textLimit">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam
                                                culpa
                                                blanditiis
                                                sit,
                                                laboriosam at praesentium maxime esse voluptas. Quos aliquid, possimus
                                                eum
                                                itaque
                                                accusamus nihil reprehenderit nesciunt excepturi quas sint.</p>
                                        </div>
                                    </div>
                                </a>
                            </article>
                        </div>
                        <div class="swiper-slide">
                            <article class="card-overlay">
                                <a href="{{ route('detailberitaacara.index') }}" class="hvr-outline-out">
                                    <div class="card">
                                        <div class="preview__img">
                                            <img width="100%" src="/assets/img/FotoSemnas19.jpg" alt="Event photos">
                                        </div>
                                        <h5>Seminar Nasional HMIF 2020</h5>
                                        <div class="textLimit">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam
                                                culpa
                                                blanditiis
                                                sit,
                                                laboriosam at praesentium maxime esse voluptas. Quos aliquid, possimus
                                                eum
                                                itaque
                                                accusamus nihil reprehenderit nesciunt excepturi quas sint.</p>
                                        </div>
                                    </div>
                                </a>
                            </article>
                        </div>
                        <div class="swiper-slide">
                            <article class="card-overlay">
                                <a href="{{ route('detailberitaacara.index') }}" class="hvr-outline-out">
                                    <div class="card">
                                        <div class="preview__img">
                                            <img width="100%" src="/assets/img/FotoSemnas19.jpg" alt="Event photos">
                                        </div>
                                        <h5>Seminar Nasional HMIF 2020</h5>
                                        <div class="textLimit">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam
                                                culpa
                                                blanditiis
                                                sit,
                                                laboriosam at praesentium maxime esse voluptas. Quos aliquid, possimus
                                                eum
                                                itaque
                                                accusamus nihil reprehenderit nesciunt excepturi quas sint.</p>
                                        </div>
                                    </div>
                                </a>
                            </article>
                        </div>
                        <div class="swiper-slide">
                            <article class="card-overlay">
                                <a href="{{ route('detailberitaacara.index') }}" class="hvr-outline-out">
                                    <div class="card">
                                        <div class="preview__img">
                                            <img width="100%" src="/assets/img/FotoSemnas19.jpg" alt="Event photos">
                                        </div>
                                        <h5>Seminar Nasional HMIF 2020</h5>
                                        <div class="textLimit">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam
                                                culpa
                                                blanditiis
                                                sit,
                                                laboriosam at praesentium maxime esse voluptas. Quos aliquid, possimus
                                                eum
                                                itaque
                                                accusamus nihil reprehenderit nesciunt excepturi quas sint.</p>
                                        </div>
                                    </div>
                                </a>
                            </article>
                        </div>
                    </div>

                    <div class="swiper-pagination"></div>

                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>

            </div>
        </section>

        <section id="visi" class="visi mt-5">
            <div class="container-fluid">
                <h5 class="color">VISI & MISI</h5>

                <div class="visi__txt">
                    <h5 class="color">VISI</h5>
                    <p>Mewujudkan HMIF sebagai organisasi yang
                        berintegritas dan berkarakter sebagai wajah bagi
                        mahasiswa yang responsive, progresif, dan aktif
                        demi tercapainya visi misi prodi Informatika.
                    </p>
                </div>

                <div class="misi__txt">
                    <h5 class="color">MISI</h5>
                    <ul>
                        <li>
                            <p>Membangun sinergitas antara anggota dan
                                pengurus dalam memajukan Informatika.
                            </p>
                        </li>
                        <li>
                            <p>Berperan aktif dalam menyaring dan menindak
                                lanjuti aspirasi dari mahasiswa.
                            </p>
                        </li>
                        <li>
                            <p>Memelihara hubungan dan komunikasi yang baik
                                guna terciptanya kinerja kepengurusan yang efektif.

                            </p>
                        </li>
                        <li>
                            <p>Menjalin hubungan baik dengan lembaga
                                lembaga dialam maupun diluar Universitas AMIKOM Yk.
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <section id="struktur" class="struktur text-center mt-5">
            <h5 class="color">STRUKTUR ORGANISASI</h5>
            <p>Susunan Dalam Organisasi HMIF 2019/2020</p>
            <a href="#"><img class="img__struktur" width="100%" src="/assets/img/struktur.png"
                    alt="Foto Struktur Organisasi HMIF"></a>
        </section>

        <section id="divisi" class="divisi mt-5">
            <div class="flex text-center">
                <h5 class="color mb-4">DIVISI HMIF</h5>
                <div class="flex-dynamic">
                    <a href="#" class="hvr-pulse-shrink">
                        <figure>
                            <img class="img__divisi" src="/assets/img/LITBANG@2x.png" alt="divisi litbang">
                            <figcaption>Keilmuan,Penelitian <br>,dan Pengembangan</figcaption>
                        </figure>
                    </a>
                    <a href="#" class="hvr-pulse-shrink">
                        <figure>
                            <img class="img__divisi" src="/assets/img/Humas@2x.png" alt="divisi Humas">
                            <figcaption>Hubungan Masyarakat</figcaption>
                        </figure>
                    </a>
                    <a href="#" class="hvr-pulse-shrink">
                        <figure>
                            <img class="img__divisi" src="/assets/img/aspirasi@2x.png" alt="divisi Aspirasi">
                            <figcaption>Aspirasi dan Advokasi</figcaption>
                        </figure>
                    </a>
                    <a href="#" class="hvr-pulse-shrink">
                        <figure>
                            <img class="img__divisi" src="/assets/img/Keor@2x.png" alt="divisi Keorganisasian">
                            <figcaption>Keorganisasian</figcaption>
                        </figure>
                    </a>
                </div>
            </div>
        </section>

        <section id="artikel" class="artikel mt-5">
            <div class="container-fluid text-center">
                <h5 class="color">ARTIKEL HMIF</h5>
                <p>Berisikan Informasi Kuliah,Tips,Artikel yang bermanfaat</p>

                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <article class="card-overlay">
                                <a href="{{ route('detailartikel.index') }}" class="hvr-outline-out">
                                    <div class="card">
                                        <div class="preview__img">
                                            <img width="100%" src="/assets/img/FotoSemnas19.jpg" alt="Event photos">
                                        </div>
                                        <h5>Seminar Nasional HMIF 2020</h5>
                                        <div class="textLimit">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam
                                                culpa
                                                blanditiis
                                                sit,
                                                laboriosam at praesentium maxime esse voluptas. Quos aliquid, possimus
                                                eum
                                                itaque
                                                accusamus nihil reprehenderit nesciunt excepturi quas sint.</p>
                                        </div>
                                    </div>
                                </a>
                            </article>
                        </div>
                        <div class="swiper-slide">
                            <article class="card-overlay">
                                <a href="{{ route('detailartikel.index') }}" class="hvr-outline-out">
                                    <div class="card">
                                        <div class="preview__img">
                                            <img width="100%" src="/assets/img/FotoSemnas19.jpg" alt="Event photos">
                                        </div>
                                        <h5>Seminar Nasional HMIF 2020</h5>
                                        <div class="textLimit">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam
                                                culpa
                                                blanditiis
                                                sit,
                                                laboriosam at praesentium maxime esse voluptas. Quos aliquid, possimus
                                                eum
                                                itaque
                                                accusamus nihil reprehenderit nesciunt excepturi quas sint.</p>
                                        </div>
                                    </div>
                                </a>
                            </article>
                        </div>
                        <div class="swiper-slide">
                            <article class="card-overlay">
                                <a href="{{ route('detailartikel.index') }}" class="hvr-outline-out">
                                    <div class="card">
                                        <div class="preview__img">
                                            <img width="100%" src="/assets/img/FotoSemnas19.jpg" alt="Event photos">
                                        </div>
                                        <h5>Seminar Nasional HMIF 2020</h5>
                                        <div class="textLimit">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam
                                                culpa
                                                blanditiis
                                                sit,
                                                laboriosam at praesentium maxime esse voluptas. Quos aliquid, possimus
                                                eum
                                                itaque
                                                accusamus nihil reprehenderit nesciunt excepturi quas sint.</p>
                                        </div>
                                    </div>
                                </a>
                            </article>
                        </div>
                        <div class="swiper-slide">
                            <article class="card-overlay">
                                <a href="{{ route('detailartikel.index') }}" class="hvr-outline-out">
                                    <div class="card">
                                        <div class="preview__img">
                                            <img width="100%" src="/assets/img/FotoSemnas19.jpg" alt="Event photos">
                                        </div>
                                        <h5>Seminar Nasional HMIF 2020</h5>
                                        <div class="textLimit">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam
                                                culpa
                                                blanditiis
                                                sit,
                                                laboriosam at praesentium maxime esse voluptas. Quos aliquid, possimus
                                                eum
                                                itaque
                                                accusamus nihil reprehenderit nesciunt excepturi quas sint.</p>
                                        </div>
                                    </div>
                                </a>
                            </article>
                        </div>
                        <div class="swiper-slide">
                            <article class="card-overlay">
                                <a href="{{ route('detailartikel.index') }}" class="hvr-outline-out">
                                    <div class="card">
                                        <div class="preview__img">
                                            <img width="100%" src="/assets/img/FotoSemnas19.jpg" alt="Event photos">
                                        </div>
                                        <h5>Seminar Nasional HMIF 2020</h5>
                                        <div class="textLimit">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam
                                                culpa
                                                blanditiis
                                                sit,
                                                laboriosam at praesentium maxime esse voluptas. Quos aliquid, possimus
                                                eum
                                                itaque
                                                accusamus nihil reprehenderit nesciunt sdsdlj djsvdks sjbd excepturi quas sint.</p>
                                        </div>
                                    </div>
                                </a>
                            </article>
                        </div>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>

        <section id="aspirasi" class="aspirasiOnline text-center  mt-5">
            <h5 class="color">KOLOM ASPIRASI</h5>
            <p>Aspirasikan Suaramu disini guna Informatika yang lebih baik</p>
            <article class="card-overlay">
                <div class="card">
                    <form action="{{ route('adminaspirasi.store') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="pengirim">Dari : </label>
                            <input type="text" class="form-control" name="dari" id="pengirim" aria-describedby="emailHelp">

                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Aspirasi/Komentar</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="aspirasi" rows="10"></textarea>
                        </div>
                          <!-- Button trigger modal -->
                        <button type="submit"  data-toggle="modal" data-target="#staticBackdrop" class="btn btn-primary">Kirim</button>
                    </form>
                </div>
            </article>

          

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Informasi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Aspirasi Telah Terkirim

        <br>

        Terimakasih telah memberikan aspirasi untuk Prodi informatika yang lebih baik
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>
        </section>

        <section id="ofc" class="ofc  mt-5">
            <div class="flex-row">
                <h5 class="color text-center mb-4">OFFICIAL YOUTUBE</h5>
                <div class="youtube mb-3 w-100 text-center">
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/QmhI520kq10" frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen  style="width: 100%; min-width: 300px;  max-width:500px; height: 100%;
              min-height:350px; max-height:550px;"></iframe>
                </div>
            </div>
            <div class="swiper-container swiper3">
            <div class="text-center">
        <h5 class="color text-center mb-4">MERCHANDISE</h5>
        </div>
    <div class="swiper-wrapper"> 
      <div class="swiper-slide slide__merch"><a href="#"> <img class="img__merch" src="/assets/img/merchant1.svg" alt="merchandise endorsement 1"></a></div>
      <div class="swiper-slide slide__merch"> <a href="#"> <img class="img__merch" src="/assets/img/merchant2.svg" alt="merchandise endorsement 2"></a></div>
      <div class="swiper-slide slide__merch"> <a href="#"> <img class="img__merch" src="/assets/img/merchant3.svg" alt="merchandise endorsement 3"></a></div>
      <div class="swiper-slide slide__merch"> <a href="#"><img class="img__merch" src="/assets/img/merchant4.png" alt="merchandise endorsement 4"></a></div>
      <div class="swiper-slide slide__merch"><a href="#"> <img class="img__merch" src="/assets/img/merchant1.svg" alt="merchandise endorsement 1"></a></div>
      <div class="swiper-slide slide__merch"> <a href="#"> <img class="img__merch" src="/assets/img/merchant2.svg" alt="merchandise endorsement 2"></a></div>
      <div class="swiper-slide slide__merch"> <a href="#"> <img class="img__merch" src="/assets/img/merchant3.svg" alt="merchandise endorsement 3"></a></div>
      <div class="swiper-slide slide__merch"> <a href="#"><img class="img__merch" src="/assets/img/merchant4.png" alt="merchandise endorsement 4"></a></div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div>
        </section>

        <footer class="footer border mt-5 shadow-sm">
        <div class="container-fluid">
           <div class="footer__flex">
               <div class="footer__flex-items">
                   <h5>Direction</h5>
                   <p>Gedung BSC Lt. 3 Universitas Amikom Yogyakarta</p>
                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.2835233294077!2d110.40669181534786!3d-7.7597258944074055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a599bd3bdc4ef%3A0x6f1714b0c4544586!2sUniversitas%20Amikom%20Yogyakarta!5e0!3m2!1sid!2sid!4v1592828063709!5m2!1sid!2sid" 
                width="100%" height="auto" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                 <div class="footer__socmed">
                      <a href="https://www.youtube.com/channel/UCYIDh8u2A3fJ0Lzbmodf4ZQ"><img src="assets/img/yt.png" alt="logo Youtube"> </a>
                      <a href="https://www.instagram.com/hmifamikom/"><img src="assets/img/IG.png" alt="logo Instagram"> </a>
                      <a href="https://www.facebook.com/HMIF.AMIKOM"><img src="assets/img/FB.png" alt="logo Facebook"> </a>
                      <a href="https://twitter.com/HMIF_amikom"><img src="assets/img/Twitter.png" alt="logo Twitter"> </a>
                      <a href="http://Bit.ly/LINEHMIF"><img src="assets/img/line.svg" alt="logo Line"> </a>
                      <a href="hmif@amikom.ac.id"><img src="assets/img/email.png" alt="logo Email"> </a>
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
                       <li><a href="#">LATIHAN DASAR KEPEMIMPINAN DAN MANAJEMEN ORGANISASI HMIF 2019/2020</a></li>
                       <li><a href="#">BELAJAR BARENG BERSAMA HMIF UAS GANJIL</a></li>
                       <li><a href="#">BELAJAR BARENG BERSAMA HMIF UAS GANJIL</a></li>
                       <li><a href="#">SEMINAR DAN WORKSHOP METOPEN INFORMATIKA 2019</a></li>
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
    
    <script>
    var swiper = new Swiper('.swiper3', {
      slidesPerView: 1,
      spaceBetween: 30,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
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
                spaceBetween: 30,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 40,
            },

            1400: {
                slidesPerView: 4,
                spaceBetween: 50,
            },

            1600: {
                slidesPerView: 5,
                spaceBetween: 50,
            }
        }
    });
  </script>
</body>



@endsection