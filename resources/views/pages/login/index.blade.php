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
                        src="{{ url('/images/logo.png') }}" alt="logo" width="175px"></p>
                <p class="text-left text-body1 pb-2 my-2" style="max-width: 500px">“Kebaikan yang kita berikan pada orang lain sesungguhnya adalah kebaikan yang kita tanam untuk diri sendiri”</p>
                <img class="img-fluid mt-3" src="{{ url('/images/nurse_with_medicine.png') }}" alt="nurse">
            </div>
        </div>
        <div class="col-md-6 col-sm-12 d-flex flex-column m-auto pt-5">
            @if(session()->has('registrationSuccess'))
                <div class="alert alert-success alert-dismissible fade show w-75" role="alert">
                    {{ session('registrationSuccess') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            @if(session()->has('loginFailed'))
                <div class="alert alert-warning alert-dismissible fade show w-75" role="alert">
                    {{ session('loginFailed') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <h3 class="text-blue font-bolder font-weight-bold mb-5">Masuk</h3>
            <form action="{{ url('/login') }}" method="POST">
                @csrf
                <div class="form-group mb-3 w-75">
                    <label for="email_donators" class="text-title1 text-blue">Email</label>
                    <input type="email"
                           class="form-control mt-1 text-title1 text-blue @error('email_donators') is-invalid @enderror"
                           id="email_donators" name="email_donators"
                           placeholder="Masukkan Email" required autofocus value="{{ old('email_donators') }}">
                    @error('email_donators')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <label for="password_donators" class="text-title1 text-blue">Password</label>
                <div class="input-group mb-3 w-75" id="show_hide_password">
                    <input class="form-control text-title1 text-blue @error('password_donators') is-invalid @enderror"
                           type="password" name="password_donators" id="password_donators"
                           placeholder="Masukkan password" required value="{{ old('password_donators') }}">
                    <div class="input-group-append">
                        <a href="" class="input-group-text text-decoration-none"><i class="fa fa-eye-slash"
                                                                                    aria-hidden="true"></i></a>
                    </div>
                    @error('password_donators')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <button class="btn bg-red text-white mt-4 w-75 text-title2" type="submit">Masuk</button>
            </form>
            <p class="text-title2 text-blue"> Belum punya akun ? <a href=" {{ url('/register') }}"
                                                                    class="text-decoration-none">
                    <span class="text-red">Daftar</span>
                </a></p>
        </div>
    </div>
@endsection
@section('custom-script')
    <script src="{{ url('/js/show-password.js') }}"></script>
@endsection
