@extends('layout.detail')

@section('title','Detail Berita Acara')

@section('content')

    <section class="berita">
        <div class="container ">
            <h5 class="color">BERITA ACARA HMIF</h5>

            <article class="card-overlay__detail">
                <div class="card__detail">
                    <div class="preview__img2">
                        <div class="swiper-berita text-center">
                            <div class="swiper-wrapper">
                                <?php foreach (json_decode($berita->gambar)as $picture) { ?>
                                    <div class="swiper-slide"> 
                                        <img width="100%" height="100%" src="{{ asset('storage/event/'.$picture) }}" alt="Event photos">
                                    </div>
                                <?php } ?>

                            </div>
                            <!-- Add Pagination -->
                            <div class="swiper-pagination2"></div>
                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>


                    </div>
                    <h5>Seminar Nasional HMIF 2020</h5>
                    <div class="">
                        <p>{!! $berita->berita_acara !!}</p>
                    </div>
                </div>
            </article>

        </div>
    </section>

@endsection