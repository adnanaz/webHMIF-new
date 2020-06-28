@extends('layout.admin')

@section('title','Tambah Youtube')

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
              <h5>Tambah Data MERCHANDISE</h5>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">MERCHANDISE</a></li>
                <li class="breadcrumb-item active">Tambah Data</li>
              </ol>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-12">
            <div class="container">
              <form action="{{ route('adminyoutube.store') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                  <label for="form__youtube">Link Youtube</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="url">
                  <small id="youtube__help" class="form-text text-muted"
                    >Pastikan link youtube sudah di embed</small
                  >
                </div>
                <!-- Button trigger modal -->
                <button
                  type="submit"
                  data-toggle="modal"
                  data-target="#exampleModal"
                  class="btn btn-primary w-100"
                >
                  Simpan Data
                </button>
              </form>
            </div>
            <!-- Modal -->
            <div
              class="modal fade"
              id="exampleModal"
              tabindex="-1"
              role="dialog"
              aria-labelledby="exampleModalLabel"
              aria-hidden="true"
            >
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5>Informasi</h5>
                    <button
                      type="button"
                      class="close"
                      data-dismiss="modal"
                      aria-label="Close"
                    >
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <h5 class="text-danger">Data Tersimpan!</h5>
                  </div>
                  <div class="modal-footer">
                    <button
                      type="button"
                      class="btn btn-secondary"
                      data-dismiss="modal"
                    >
                      Close
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <!-- END MODAL -->
            
            <div class="preview w-100 text-center my-5">
            <h2>Preview Video</h2>
            <!-- sing src itu dinamis dim ngikut inputan dar atas itu -->
            <iframe
              @foreach ($preview as $item)
                src="{{ $item->url}}"
              @endforeach
              frameborder="0"
              allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen
              style="width: 100%; min-width: 300px;  max-width:500px; height: 100%;
            min-height:350px; max-height:550px;"
            ></iframe>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection