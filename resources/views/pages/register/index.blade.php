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
                <p class="text-left text-body1 pb-2 my-2" style="max-width: 500px">“Kebaikan sejati dan tulus adalah kebaikan yang dilakukan tanpa diketahui orang yang menerima kebaikan.”</p>
                <img class="img-fluid mt-3" src="{{ url('/images/nurse_with_medicine.png') }}" alt="nurse">
            </div>
        </div>
        <div class="col-md-6 col-sm-12 d-flex flex-column m-auto pt-5">
            <h3 class="text-blue font-bolder font-weight-bold mb-5">Daftar</h3>
            <form action="{{ url('/register') }}" method="POST">
                @csrf
                <div class="form-group mb-3 w-75">
                    <label for="name_donators" class="text-title1 text-blue">Nama Lengkap</label>
                    <input type="text"
                           class="form-control mt-1 text-title1 text-blue @error('name_donators') is-invalid @enderror"
                           id="name_donators" name="name_donators"
                           placeholder="Masukkan Nama Lengkap" required value="{{ old('name_donators') }}">
                    @error('name_donators')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group mb-3 w-75">
                    <label for="email_donators" class="text-title1 text-blue">Email</label>
                    <input type="email"
                           class="form-control mt-1 text-title1 text-blue @error('email_donators') is-invalid @enderror"
                           id="email_donators" name="email_donators"
                           placeholder="Masukkan alamat" required value="{{ old('email_donators') }}">
                    @error('email_donators')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group mb-3 w-75">
                    <label for="blood_type_donators" class="text-title1 text-blue">Masukkan Golongan Darah</label>
                    <select
                        class="custom-select text-title1 text-blue mt-1 @error('blood_type_donators') is-invalid @enderror"
                        id="blood_type_donators" name="blood_type_donators" required>
                        <option value="" disabled selected>Golongan Darah</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="AB">AB</option>
                        <option value="O">O</option>
                    </select>
                    @error('blood_type_donators')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group mb-3 w-75">
                    <label for="rhesus_type_donators" class="text-title1 text-blue">Masukkan Jenis Rhesus</label>
                    <select
                        class="custom-select text-title1 text-blue mt-1 @error('rhesus_type_donators') is-invalid @enderror"
                        id="rhesus_type_donators" name="rhesus_type_donators" required>
                        <option value="" disabled selected>Rhesus</option>
                        <option value="positive">Positif (+)</option>
                        <option value="negative">Negatif (-)</option>
                    </select>
                    @error('rhesus_type_donators')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group mb-3 w-75">
                    <label for="address_donators" class="text-title1 text-blue">Alamat</label>
                    <textarea class="form-control text-title1 text-blue @error('address_donators') is-invalid @enderror"
                              id="address_donators" name="address_donators"
                              rows="3">{{ old('address_donators') }}</textarea>
                    @error('address_donators')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group mb-3 w-75">
                    <label for="contact_donators" class="text-title1 text-blue">No. Telp / WA</label>
                    <input type="text"
                           class="form-control mt-1 text-title1 text-blue @error('contact_donators') is-invalid @enderror"
                           id="contact_donators" name="contact_donators"
                           placeholder="Masukkan No. Telp / WA" required value="{{ old('contact_donators') }}">
                    @error('contact_donators')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <label for="password" class="text-title1 text-blue">Password Baru</label>
                <div class="input-group mb-3 w-75" id="show_hide_password">
                    <input class="form-control text-title1 text-blue @error('password_donators') is-invalid @enderror"
                           type="password" name="password_donators" id="password"
                           placeholder="*****" minlength="5" required value="{{ old('password_donators') }}">
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
                <label for="recheck-password" class="text-title1 text-blue">Konfirmasi Password Baru</label>
                <div class="input-group mb-3 w-75" id="show_hide_password">
                    <input class="form-control text-title1 text-blue" type="password" id="recheck-password"
                           placeholder="*****" minlength="5" required>
                    <div class="input-group-append">
                        <a href="" class="input-group-text text-decoration-none"><i class="fa fa-eye-slash"
                                                                                    aria-hidden="true"></i></a>
                    </div>
                </div>
                <button class="btn bg-red text-white mt-4 w-75 text-title2" type="submit">Daftar</button>
            </form>
            <p class="text-title2 text-blue mb-5"> Sudah punya akun ? <a href=" {{ url('/login') }}"
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
