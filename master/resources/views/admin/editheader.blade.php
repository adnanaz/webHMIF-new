@extends('layout.admin')

@section('title','Tambah Artikel')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h5>Edit Your Header Here</h5>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="preview" style="background: url('/assets/img/preview__header.png') center top;
                background-size: cover; padding: 17rem 5rem 20rem 5rem; width:100%">
                    <h5 class="text-center">{{ $header->kata_bijak }}</h5>
                </div>
                <!-- /.col -->
            </div>
            <div class="col-12">
              <form action="{{ route('adminheader.update', $header) }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                    <div class="form-group">
                        <label for="judul">Header-Post</label>
                        <input type="text" class="form-control" id="judul" name="kata_bijak" value="{{ $header->kata_bijak }}" aria-describedby="judulhelp">
                        <small id="judulhelp" class="form-text text-muted">Isi Tulisan yang ingin
                            dirubah</small>
                    </div>

                    <button type="submit" class="btn btn-warning mt-2 w-100">Preview</button>
                    <button type="submit" class="btn btn-primary mt-2 w-100">Submit</button>
                </form>
                <!-- /.col -->
            </div>
            <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection