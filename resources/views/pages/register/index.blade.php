@extends('layouts.auth')
@section('custom-head')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
@endsection
@section('container')
    <div class="row">
        <div class="col-md-6 col-sm-12 d-flex">
            <div class=" flex-column mx-auto" style="padding-top: 200px">
                <p class="text-left text-blue text-title1 pb-2"
                   style="font-size: 50px;line-height: 30px;font-family: 'Montserrat', sans-serif;">Welcome to <img
                        src="{{ url('/images/logo.png') }}" alt="logo" width="145px"></p>
                <p class="text-left text-body1 pb-2 my-2" style="max-width: 500px">Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit. Tristique quis consequat feugiat luctus mauris enim mi.</p>
                <img class="img-fluid mt-3" src="{{ url('/images/nurse_with_medicine.png') }}" alt="nurse">
            </div>
        </div>
        <div class="col-md-6 col-sm-12 d-flex flex-column m-auto pt-5">
            <h3 class="text-blue font-bolder font-weight-bold mb-5">Daftar</h3>
            <form action="#" method="POST">
                @csrf
                <p class="text-title2 text-blue">Nama</p>
                <div class="input-group mb-3 w-75">
                    <input class="form-control" type="text" name="name" placeholder="Masukkan nama">
                </div>
                <p class="text-title2 text-blue">Email</p>
                <div class="input-group mb-3 w-75">
                    <input class="form-control" type="email" name="email" placeholder="Masukkan email">
                </div>
                <p class="text-title2 text-blue">Alamat</p>
                <div class="input-group mb-3 w-75">
                    <input class="form-control" type="text" name="address" placeholder="Masukkan alamat">
                </div>
                <p class="text-title2 text-blue">Password</p>
                <div class="input-group mb-3 w-75" id="show_hide_password">
                    <input class="form-control" type="password" name="password" id="password"
                           placeholder="Masukkan password">
                    <div class="input-group-append">
                        <a href="" class="input-group-text text-decoration-none"><i class="fa fa-eye-slash"
                                                                                    aria-hidden="true"></i></a>
                    </div>
                </div>
                <p class="text-title2 text-blue">Ulangi Password</p>
                <div class="input-group mb-3 w-75" id="show_hide_password">
                    <input class="form-control" type="password" id="recheck-password" placeholder="Ulangi Password">
                    <div class="input-group-append">
                        <a href="" class="input-group-text text-decoration-none"><i class="fa fa-eye-slash"
                                                                                    aria-hidden="true"></i></a>
                    </div>
                </div>
                <button class="btn bg-red text-white mt-4 w-75 text-title2" type="submit">Masuk</button>
            </form>
            <p class="text-title2 text-blue"> Sudah punya akun ? <a href=" {{ url('/login') }}"
                                                                    class="text-decoration-none">
                    <span class="text-red">Masuk</span>
                </a></p>
        </div>
    </div>
@endsection
@section('custom-script')
    <script src="{{ url('/js/show-password.js') }}"></script>
    <script src="{{ url('/js/check-password.js') }}"></script>
@endsection
