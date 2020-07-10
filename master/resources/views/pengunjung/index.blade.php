@extends('layout.pengunjung')

@section('title','HMIF AMIKOM - Dashboard')

@section('content')

    <section class="head">
        <div class="container-fluid">
            <div class="lgOn">  
                <img src="/assets/img/logo.png" alt="logo HMIF">
                <h4>Himpunan Mahasiswa Informatika</h4>
            </div>
            <h5 class=" content__text">{{ $header->kata_bijak }}</h5>
            <div class="flex-model">
                <figure class="fig1"><img class="fig__img" src="/assets/img/model1.svg" alt="model figure 1">
                </figure>
                <figure class="fig2"><img class="fig__img2" src="/assets/img/model2.svg" alt="model figure 2">
                </figure>
            </div>
        </div>
    </section>

    <section class="berita background2" id="berita">
        <div class="container-fluid">
            <h5 class="color">BERITA ACARA</h5>

            <div class="swiper-container">
                <div class="swiper-wrapper">

                    @foreach ($beritaAcara as $item)
                        <div class="swiper-slide">
                            <article class="card-overlay">
                                <a href="{{ route('detailberitaacara.index', $item->slug) }}" class="hvr-outline-out">
                                    <div class="card">
                                        <div class="preview__img">
                                            <?php $image = json_decode($item->gambar)[0]; ?>
                                            <img width="100%" src="{{ asset('storage/event/'.$image) }}" alt="Event photos">
                                        </div>
                                        <h5>{{ $item->judul }}</h5>
                                        <div class="textLimit">
                                            <p>{!! Str::limit($item->berita_acara, 200, ' <strong class="text-primary">Read more...</strong>') !!}</p>
                                        </div>
                                    </div>
                                </a>
                            </article>
                        </div>
                    @endforeach

                </div>

                <div class="swiper-pagination"></div>

                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>

        </div>
    </section>

    <section class="visi my-5" id="visi">
        <div class="container-fluid">
            <h5 class="color">VISI & MISI</h5>

            <div class="visi__txt mt-5">
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

    <section class="struktur text-center mt-5" id="struktur">
        <h5 class="color">STRUKTUR ORGANISASI</h5>
        <p>Susunan Dalam Organisasi HMIF 2019/2020</p>
        <a href="#"><img class="img__struktur" width="100%" src="/assets/img/struktur.png"
                alt="Foto Struktur Organisasi HMIF"></a>
    </section>

    <section class="divisi mt-5" id="divisi">
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

    <section  class="artikel mt-5" id="artikel">
        <div class="container-fluid text-center">
            <h5 class="color">ARTIKEL HMIF</h5>
            <p>Berisikan Informasi Kuliah,Tips,Artikel yang bermanfaat</p>

            <div class="swiper-container">
                <div class="swiper-wrapper">

                    @foreach ($articles as $item)
                        
                        <div class="swiper-slide">
                            <article class="card-overlay">
                                <a href="{{ route('detailartikel.index', $item->slug) }}" class="hvr-outline-out">
                                    <div class="card">
                                        <div class="preview__img">
                                            <?php $image = json_decode($item->gambar)[0]; ?>
                                            <img width="100%" src="{{ asset('storage/artikel/'.$image) }}" alt="Event photos">
                                        </div>
                                        <h2>{{ $item->judul }}</h2>
                                        <div class="textLimit">
                                            <p>{!! Str::limit($item->artikel, 144, ' <strong class="text-primary">Read more...</strong>') !!}</p>
                                        </div>
                                    </div>
                                </a>
                            </article>
                        </div>

                    @endforeach
                    
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <section class="aspirasiOnline text-center mt-5" id="aspirasi">
        <h5 class="color">KOLOM ASPIRASI</h5>
        <p>Aspirasikan Suaramu disini guna Informatika yang lebih baik</p>
        
        <div class="aspirasi__flex">
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

            <div class="dummies__img">
                <img src="/assets/img/dummies.svg" alt="Image Aspirasi">
            </div>
        </div>  
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

    <section  class="ofc mt-5" id="ofc">
        <div class="text-center my-5">
        <h5 class="color">OFFICIAL YOUTUBE</h5>
        <p>Ikuti kegiatan resmi HMIF Amikom di Official Account kami.</p>
        </div>
            <div class="yt__flex">
                <div class="dummies__img2">
                    <img src="/assets/img/dummies2.svg" alt="image illustration Youtube">
                </div>
                <div class="ytframe mb-3">
                    @foreach ($youtube as $item)
                        <iframe width="100%" height="100%" src="{{$item->url}}" frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                    @endforeach
                    
                </div>
            </div>
            <div class="swiper-container swiper3">
            <div class="text-center my-5">
        <h5 class="color">MERCHANDISE</h5>
        <p>HMIF Amikom juga memiliki merchandise Khas dan unik yang wajib kamu miliki</p>
        </div>
        <div class="swiper-wrapper"> 

            @foreach ($merchandise as $item)
                <div class="swiper-slide text-center slide__merch"><a href="{{$item->url}}"> <img class="img__merch" src="{{ asset('storage/merchandise/'.$item->gambar) }}" alt="merchandise endorsement 1"></a></div>
            @endforeach
            
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        </div>
    </section>
    
</body>



@endsection