@extends('layout.admin')

@section('title','Edit Artikel')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <span class="msg">Edit Berita Acara</span>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard Admin</li>
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
                            <span class="card-title">Edit Berita acara</span>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="{{ route('adminberita.update', $event) }}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="judul">Judul</label>
                                    <input type="text" class="form-control" id="judul" name="judul" aria-describedby="judulhelp" value="{{ $event->judul }}">
                                </div>
                                <div class="form-group">
                                    <label for="tanggal">tanggal kegiatan</label>
                                    <input type="text" class="form-control" id="tanggal" name="tanggal_kegiatan"
                                        aria-describedby="tanggalhelp" value="{{ $event->tanggal_kegiatan }}">
                                </div>
                                <div class="form-group">
                                    <label for="berita">berita acara</label>
                                    <textarea class="form-control" id="berita" name="berita_acara"
                                        rows="4">{{ $event->berita_acara }}</textarea>
                                </div>
                                <div class="custom-file mb-2">
                                    <input type="file" class="custom-file-input" id="customFile" name="uploadFile[]" multiple>
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                    <small id="uploadhelp" class="form-text text-muted">upload bisa lebih dari 1
                                        file.</small>
                                </div>
                                    <!-- end upload yang ada previewnya -->
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
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
    <script>
        CKEDITOR.replace( 'berita' , {
            width: 1120,
            height: 600,

            filebrowserBrowseUrl: '/ckfinder/ckfinder.html',
            filebrowserImageBrowseUrl: '/ckfinder/ckfinder.html?type=Images',
            filebrowserUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
            filebrowserImageUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images'
        });
    </script>
@endsection