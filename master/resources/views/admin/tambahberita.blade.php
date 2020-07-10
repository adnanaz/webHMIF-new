@extends('layout.admin')

@section('title','Tambah Berita Acara')

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
                        <span class="msg">Input Berita Acara</span>
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
                            <span class="card-title">Berita acara</span>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="{{ route('adminberita.store') }}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="judul">Judul</label>
                                    <input type="text" class="form-control" id="judul" name="judul" aria-describedby="judulhelp">
                                </div>
                                <div class="form-group">
                                    <label for="tanggal">tanggal kegiatan</label>
                                    <input type="text" class="form-control" id="tanggal" name="tanggal_kegiatan"
                                        aria-describedby="tanggalhelp">
                                </div>
                                <div class="form-group">
                                    <label for="berita">berita acara</label>
                                    <textarea class="form-control" id="berita" name="berita_acara"
                                        rows="4"></textarea>
                                </div>
                                <div class="custom-file mb-2">
                                    <input type="file" class="custom-file-input" id="customFile" name="uploadFile[]" multiple>
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                    <small id="uploadhelp" class="form-text text-muted">upload bisa lebih dari 1
                                        file.</small>
                                </div>

                                <!-- ini form yang ada previewnya dim -->
                                <!-- <div>
                                        <div class="form-group hirehide is-empty is-fileinput width100">
                                            <div class="socialmediaside2">
                                                <input class="fileUpload" accept="image/jpeg, image/jpg"
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
                                    <div>
                                        <div class="form-group hirehide is-empty is-fileinput width100">
                                            <div class="socialmediaside2">
                                                <input class="fileUpload" accept="image/jpeg, image/jpg"
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
                                    <div>
                                        <div class="form-group hirehide is-empty is-fileinput width100">
                                            <div class="socialmediaside2">
                                                <input class="fileUpload" accept="image/jpeg, image/jpg"
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
                                    <div>
                                        <div class="form-group hirehide is-empty is-fileinput width100">
                                            <div class="socialmediaside2">
                                                <input class="fileUpload" accept="image/jpeg, image/jpg"
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
                                    </div> -->
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

    <script src="/plugins/jquery/jquery.min.js"></script>
    <script>
        CKEDITOR.replace( 'berita' , {
            width: 1120,
            height: 600,

            filebrowserBrowseUrl: '/ckfinder/ckfinder.html',
            filebrowserImageBrowseUrl: '/ckfinder/ckfinder.html?type=Images',
            filebrowserUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
            filebrowserImageUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images'
        });

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