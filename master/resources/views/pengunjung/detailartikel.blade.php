@extends('layout.pengunjung')

@section('title','Detail Artikel')

@section('content')

    <section class="berita mt-2 background2" id="berita">
        <div class="container-fluid">
            <h5 class="color">ARTICLE HMIF</h5>

            <article class="card-overlay__detail">
                <div class="card__detail">
                    <div class="preview__img">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">

                                <?php foreach (json_decode($artikel->gambar)as $picture) { ?>
                                    <div class="swiper-slide"> 
                                        <img width="100%" src="{{ asset('storage/artikel/'.$picture) }}" alt="Event photos">
                                    </div>
                                <?php } ?>

                            </div>
                            <!-- Add Pagination -->
                            <div class="swiper-pagination"></div>
                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>


                    </div>
                    <h5>{{ $artikel->judul }}</h5>
                    <div class="">
                        <p>{!! $artikel->artikel !!}</p>
                    </div>
                </div>
            </article>

        </div>
    </section>

@endsection