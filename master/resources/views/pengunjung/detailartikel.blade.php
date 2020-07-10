@extends('layout.pengunjung')

@section('title','Detail Artikel')

@section('content')
    <section class="berita mt-2 background2" id="berita">
        <div class="container-fluid">
            <h5 class="color">ARTICLE HMIF</h5>

            <article class="container">
                    <figure>
                    <?php foreach (json_decode($artikel->gambar)as $picture) { ?>
                                    <div class="swiper-slide"> 
                                        <img width="100%" src="{{ asset('storage/artikel/'.$picture) }}" alt="Event photos">
                                    </div>
                                <?php } ?>
                    </figure>
                    <div class="jdl text-center">
                    <h1>{{ $artikel->judul }}</h1>
                    </div>
                   
                    <div class="">
                        <p>{!! $artikel->artikel !!}</p>
                    </div>

            </article>

        </div>
    </section>
@endsection