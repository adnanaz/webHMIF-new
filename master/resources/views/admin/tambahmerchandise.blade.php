@extends('layout.admin')

@section('title','Tambah Merchandise')

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
      </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
      <div class="row">
          <div class="col-12">
              <div class="container">
                <form action="{{ route('adminmerchandise.store') }}" method="POST" enctype="multipart/form-data">
                  {{ csrf_field() }}
                      <div class="form-group">

                          <div>
                              <div class="form-group hirehide is-empty is-fileinput width100">
                                  <div class="socialmediaside2">
                                      <input class="fileUpload" name="gambar" accept="image/jpeg, image/jpg"
                                          name="profilepic[]" type="file" value="Choose a file">
                                      <div class="input-group">
                                          <input class="form-control" id="uploadre"
                                              placeholder="Please select your profile picture" readonly>
                                          <span class="input-group-btn input-group-sm"></span>
                                      </div>
                                  </div>
                              </div>
                              <div class="upload-demo">
                                  <div class="upload-demo-wrap"><img alt="your image" class="portimg" src="#">
                                  </div>
                              </div>
                          </div>

                          <div class="form-group">
                              <label for="exampleInputEmail1">Url</label>
                              <input type="text" class="form-control" id="exampleInputEmail1" name="url">
                          </div>

                              <button type="submit" class="btn btn-primary w-100">Simpan Perubahan</button>

                      </div>
                    </form>
              </div>
              <!-- /.col -->
          </div>
          <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script>
      // uplaod image function
       function readURL() {
      var $input = $(this);
      var $newinput = $(this).parent().parent().parent().find('.portimg ');
      if (this.files && this.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
              reset($newinput.next('.delbtn'), true);
              $newinput.attr('src', e.target.result).show();
              $newinput.after('<input type="button" class="delbtn removebtn" value="remove">');
          }
          reader.readAsDataURL(this.files[0]);
      }
  }
  $(".fileUpload").change(readURL);
  $("form").on('click', '.delbtn', function (e) {
      reset($(this));
  });

  function reset(elm, prserveFileName) {
      if (elm && elm.length > 0) {
          var $input = elm;
          $input.prev('.portimg').attr('src', '').hide();
          if (!prserveFileName) {
              $($input).parent().parent().parent().find('input.fileUpload ').val("");
              //input.fileUpload and input#uploadre both need to empty values for particular div
          }
          elm.remove();
      }
  }
</script>

@endsection