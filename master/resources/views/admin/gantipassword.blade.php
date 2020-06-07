@extends('layout.admin')

@section('title','Ganti Password')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @if (session('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
        @endif
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <span class="msg">Hai Edit Your Account</span>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Account</a></li>
                            <li class="breadcrumb-item active">Settings</li>
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
                        <div class="account border rounded p-5">
                            <div class="leftside">
                                <h5>Change Your Password </h5>
                                <form action="{{ route('gantipassword.changePassword') }}" method="post" class="formpassword">
                                    {{ csrf_field() }}
                    
                                    <div class="form-group">
                                        <label for="current_password">Password Sekarang</label>
                                        <input type="password" class="form-control" id="current_password" name="current_password" required>
                                    </div>
                    
                                    <div class="form-group">
                                        <label for="new_password">Password Baru</label>
                                        <input type="password" class="form-control" id="new_password" name="new_password" required>
                                    </div>
                    
                                    <div class="form-group">
                                        <label for="new_password_confirmation">Ulangi Password Baru</label>
                                        <input type="password" class="form-control" id="new_password_confirmation" name="new_password_confirmation" required>
                                    </div>
                                    <button type="submit"
                                        class="btn btn-primary mt-3 mb-3 w-100 text-center">Simpan</button>
                                </form>
                            </div>
                            <div class="rightside">
                                <h5>Password Must Contain : </h5>
                                <p class="">At least 1 upper case letter (A-Z)</p>
                                <p class="">At least 1 number (0-9)</p>
                                <p class="">At least 8 character</p>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection