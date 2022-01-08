@extends('layouts.main')
@section('container')
    <div class="row">
        @if(isset($errorMsg))
            @dd($errorMsg)
        @endif
        <div class="col-md-6 offset-md-3">
            <div class="d-flex flex-column mb-5" id="lightgallery">
                <img src="{{ url('/images/doctor_avatar.png') }}"
                     class="rounded-circle mx-auto mt-5"
                     width="100px"
                     height="100px" alt="avatar">
            </div>
        </div>
        <div class="col-md-8 offset-md-2 mt-2">
            @if($errors->any())
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <h3 class="text-blue font-weight-bold mb-4">Identitas Pribadi</h3>
            <form action="{{ url('/_updateIdentity') }}" method="POST">
                @csrf
                @method("PUT")
                <div class="form-group mb-3">
                    <label for="name_employees" class="text-title1 text-blue">Nama Lengkap</label>
                    <input type="text"
                           class="form-control mt-1 text-title1 text-blue @error('name_employees') is-invalid @enderror"
                           id="name_employees" name="name_employees"
                           placeholder="Nama Lengkap" required value="{{ auth()->user()->name_employees }}">
                    @error('name_employees')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="name_institutions" class="text-title1 text-blue">Nama Institusi</label>
                    <input type="text"
                           class="form-control mt-1 text-title1 text-blue"
                           id="name_institutions"
                           placeholder="Nama Institusi" required
                           value="{{ auth()->user()->institutions->name_institutions }}" readonly>
                </div>

                <button class="btn bg-red text-white mt-4 w-25 text-title2" type="submit">Simpan</button>
            </form>
        </div>
        <div class="col-md-8 offset-md-2 mt-5 pt-4">
            <h3 class="text-blue font-weight-bold mb-4">Kontak</h3>
            <form action="{{ url('/_updateContact') }}" method="POST">
                @csrf
                @method("PUT")
                <div class="form-group mb-3">
                    <label for="email_employees" class="text-title1 text-blue">Email</label>
                    <input type="email"
                           class="form-control mt-1 text-title1 text-blue @error('email_employees') is-invalid @enderror"
                           id="email_employees" name="email_employees"
                           placeholder="Email" required value="{{ auth()->user()->email_employees }}">
                    @error('email_employees')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="address_employees" class="text-title1 text-blue">Alamat</label>
                    <textarea
                        class="form-control text-title1 text-blue @error('address_employees') is-invalid @enderror"
                        id="address_employees" name="address_employees"
                        rows="3">{{ auth()->user()->address_employees }}</textarea>
                    @error('address_employees')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="contact_employees" class="text-title1 text-blue">No. Telp / WA</label>
                    <input type="text"
                           class="form-control mt-1 text-title1 text-blue @error('contact_employees') is-invalid @enderror"
                           id="contact_employees" name="contact_employees"
                           placeholder="No. Telp / WA" required value="{{ auth()->user()->contact_employees }}">
                    @error('contact_employees')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <button class="btn bg-red text-white mt-4 w-25 text-title2" type="submit">Simpan</button>
            </form>
        </div>
        <div class="col-md-8 offset-md-2 mt-5 pt-4">
            <h3 class="text-blue font-weight-bold mb-4">Ubah Password</h3>
            <form action="{{ url('/_updatePassword') }}" method="POST">
                @csrf
                @method("PUT")
                <label for="current_password" class="text-title1 text-blue">Password Lama</label>
                <div class="input-group mb-3" id="show_hide_password">
                    <input
                        class="form-control text-title1 text-blue @error('old_password_employees') is-invalid @enderror"
                        type="password" name="old_password_employees"
                        id="current_password"
                        placeholder="*****" required minlength="5">
                    <div class="input-group-append">
                        <a href="" class="input-group-text text-decoration-none"><i class="fa fa-eye-slash"
                                                                                    aria-hidden="true"></i></a>
                    </div>
                    @error('old_password_employees')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <label for="password" class="text-title1 text-blue">Password Baru</label>
                <div class="input-group mb-3" id="show_hide_password">
                    <input
                        class="form-control text-title1 text-blue  @error('new_password_employees') is-invalid @enderror"
                        type="password" name="new_password_employees" id="password"
                        placeholder="*****" required minlength="5">
                    <div class="input-group-append">
                        <a href="" class="input-group-text text-decoration-none"><i class="fa fa-eye-slash"
                                                                                    aria-hidden="true"></i></a>
                    </div>
                    @error('new_password_employees')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <label for="recheck-password" class="text-title1 text-blue">Konfirmasi Password Baru</label>
                <div class="input-group mb-3" id="show_hide_password">
                    <input class="form-control text-title1 text-blue" type="password" id="recheck-password"
                           placeholder="*****" required minlength="5">
                    <div class="input-group-append">
                        <a href="" class="input-group-text text-decoration-none"><i class="fa fa-eye-slash"
                                                                                    aria-hidden="true"></i></a>
                    </div>
                </div>
                <button class="btn bg-red text-white mt-4 w-25 text-title2 mb-5" type="submit">Simpan</button>
            </form>
        </div>
            @if(session()->has('updateSuccess'))
            <div class="position-fixed" style="right: 10px;bottom: 50px">
                <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="5000">
                    <div class="toast-header d-flex justify-content-between">
                        <img src="{{ url('/images/logo.png') }}" class="rounded mr-2 img-fluid w-25" alt="...">
                        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="toast-body">
                        {{ session('updateSuccess') }}
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection
@section('custom-script')
    <script src="{{ url('/js/show-password.js') }}"></script>
    <script src="{{ url('/js/check-password.js') }}"></script>
    <script>
        $('.toast').toast('show');
    </script>
@endsection
