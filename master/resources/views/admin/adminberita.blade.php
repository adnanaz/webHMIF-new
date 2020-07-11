@extends('layout.admin')

@section('title','Admin Berita Acara')

@section('content')
<style>
    .card__flex {
        display: flex;
        width: 100%;
        flex-direction: column;

        justify-content: center;
        padding: 1rem;
        margin: 1rem 0;
    }

    .card__flex figure {
        max-width: 18rem;
        margin: auto;
    }

    .card__flex figure img{
        width: 100%;
        height: 100%;
    }

    .anchor__icon a {
        margin: 0 1rem;
    }

    @media screen and (min-width: 768px) {
        

        .card__flex {
        text-align: center;
        display: flex;
        width: 697px;
        flex-direction: row;
        justify-content: center;
        padding: 1rem;
        margin: 1rem 0;
    }

    .card__flex figure img{
        width: 229.8px;
        height: 229.8px;
    }

    .card__flex figure {
        max-width: 18rem;
    }

    .card__caption {
        text-align: center;
    }

    .card__caption .textLimit {
        padding: 0 1rem;
    }

    .card__caption hr {
        margin: 1rem;
    }
    }

    @media screen and (min-width: 1024px) {
       .card__flex{
        width: 700px;
       }
       
        .card__flex figure img{
        width: 300px;
        height: 300px;
    }

    
    .card__flex figure {
        max-width: 20rem;
    }
    }

    @media screen and (min-width: 1200px) {
       .card__flex{
        width: 850px;
       }
       
        .card__flex figure img{
        width: 300px;
        height: 300px;
    }

    
    .card__flex figure {
        max-width: 20rem;
    }
    }

    @media screen and (min-width: 1400px) {
       .card__flex{
        width: 1000px;
       }
       
        .card__flex figure img{
        width: 300px;
        height: 300px;
    }

    
    .card__flex figure {
        max-width: 25rem;
    }
    }
</style>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <span class="msg">
                            <h5>Dashboard Berita Acara</h5>
                        </span>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard Berita Acara</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <span class="card-title">
                                <h5>Dashboard Berita Acara HMIF</h5>
                            </span>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body mx-auto">         
                            <div class="container">
                                @foreach ($events as $event)
                                <!-- ini yang nnti kmu perulanganin dim -->
                                <div class="border shadow card__flex">
                                    <figure class="shadow border tex-">
                                        <img src="/assets/img/FotoSemnas19.jpg" alt="preview photos">
                                    </figure>

                                    <div class="card__caption">
                                        <h2 class="judul">{{ $event->judul }}</h2>
                                        <h5 class="text-primary" ><small>{{ $event->tanggal_acara }}</small></h5>
                                        <div class="textLimit">
                                            <p>{!! Str::limit($event->berita_acara, 250, '...') !!}</p>
                                            </div>
                                                <hr>
                                                <div class="anchor__icon text-center">
                                                    <a href="{{ route('detailberitaacara.index', $event->slug) }}"><i class="fas fa-eye"></i></a>
                                                    <a href="#"><i class="fas fa-edit"></i></a>
                                                    <a href="{{ route('adminberita.delete', $event) }}"><i class="fas fa-trash-alt"></i></a>
                                                </div>
                                    
                                    </div>
                                </div>
                                <!-- end perulangan -->
                                @endforeach

                        
                                <!-- pagination -->
                                <nav aria-label="..." class=" d-flex justify-content-center">
                                    {{ $events->links() }}
                                </nav>
                                <!-- end pagination -->
                            </div>


                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection