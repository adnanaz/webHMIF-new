@extends('layout.pengunjung')

@section('title','HMIF AMIKOM - Dashboard')

@section('content')

<body class="background">
    <header class="">
        <nav class="menu">
            <div class="title">MENU</div>
            <ul class="nav">
                <li class="li-item"><a href="/" class="navbar-brand"><img class="logo" src="/assets/img/logo@2x.png"
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
        <section class="berita mt-2 background2" id="berita">
            <div class="container-fluid">
                <h5 class="color">BERITA ACARA</h5>

                <div class="swiper-container">
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
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>

            </div>
        </section>

        <section id="visi" class="visi mt-5">
            <div class="container-fluid">
                <h5 class="color">VISI & MISI</h5>
                <p> Ketua HMIF Angkatan 2019/2020</p>

                <div class="visi__txt">
                    <h5>VISI</h5>
                    <p>Mewujudkan HMIF sebagai organisasi yang
                        berintegritas dan berkarakter sebagai wajah bagi
                        mahasiswa yang responsive, progresif, dan aktif
                        demi tercapainya visi misi prodi Informatika.
                    </p>
                </div>

                <div class="misi__txt">
                    <h5>MISI</h5>
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
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </form>
                </div>
            </article>
        </section>

        <section id="ofc" class="ofc  mt-5">
            <div class="flex-row">
                <h5 class="color text-center mb-4">OFFICIAL ACCOUNT & MERCHANDISE</h5>
                <div class="youtube mb-3 w-100 text-center">
                    <iframe width="50%" height="350px" src="https://www.youtube.com/embed/QmhI520kq10" frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
                <div class="merchandise">
                    <a href="#"> <img src="/assets/img/merchant1.svg" alt="merchandise endorsement 1"></a>
                    <a href="#"> <img src="/assets/img/merchant2.svg" alt="merchandise endorsement 2"></a>
                    <a href="#"> <img src="/assets/img/merchant3.svg" alt="merchandise endorsement 3"></a>
                    <a href="#"><img src="/assets/img/merchant4.png" alt="merchandise endorsement 4"></a>
                </div>
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