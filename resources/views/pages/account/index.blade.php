@extends('layouts.main')
@section('container')
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="d-flex flex-column mb-5">
                <img src="{{ url('/images/avatar.jpg') }}" class="rounded-circle mx-auto mt-5" width="100px"
                     height="100px" alt="avatar">
                <a href="#" class="text-decoration-none">
                    <p class="mb-1 ml-3 text-center">
                        <span class="text-title1 text-blue">Ubah foto</span>
                        <i class="fas fa-edit text-red"></i>
                    </p>
                </a>
            </div>
        </div>
        <div class="col-md-8 offset-md-2 mt-5 pt-4">
            <h3 class="text-blue font-weight-bold mb-4">Identitas Pribadi</h3>
            <form>
                @csrf
                @method("PUT")
                <div class="form-group mb-3">
                    <label for="name" class="text-title1 text-blue">Nama Lengkap</label>
                    <input type="text" class="form-control mt-1 text-title1 text-blue" id="name" name="name"
                           placeholder="Nama Lengkap" required>
                </div>
                <div class="form-group mb-3">
                    <label for="gender" class="text-title1 text-blue">Jenis Kelamin</label>
                    <select class="custom-select text-title1 text-blue mt-1" id="gender" name="gender" required>
                        <option value="" disabled selected>Jenis Kelamin</option>
                        <option value="male">Laki - laki</option>
                        <option value="female">Perempuan</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="bloodType" class="text-title1 text-blue">Golongan Darah</label>
                    <select class="custom-select text-title1 text-blue mt-1" id="bloodType" name="bloodType" required>
                        <option value="" disabled selected>Golongan Darah</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="AB">AB</option>
                        <option value="O">O</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="rhesusType" class="text-title1 text-blue">Rhesus</label>
                    <select class="custom-select text-title1 text-blue mt-1" id="rhesusType" name="rhesusType" required>
                        <option value="" disabled selected>Rhesus</option>
                        <option value="positive">Positif (+)</option>
                        <option value="negatif">Negatif (-)</option>
                    </select>
                </div>
                <button class="btn bg-red text-white mt-4 w-25 text-title2" type="submit">Simpan</button>
            </form>
        </div>
        <div class="col-md-8 offset-md-2 mt-5 pt-4">
            <h3 class="text-blue font-weight-bold mb-4">Kontak</h3>
            <form>
                @csrf
                @method("PUT")
                <div class="form-group mb-3">
                    <label for="email" class="text-title1 text-blue">Email</label>
                    <input type="email" class="form-control mt-1 text-title1 text-blue" id="email" name="email"
                           placeholder="Email" required>
                </div>
                <div class="form-group">
                    <label for="address" class="text-title1 text-blue">Alamat</label>
                    <textarea class="form-control text-title1 text-blue" id="address" name="address"
                              rows="3"></textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="no_hp" class="text-title1 text-blue">No. Telp / WA</label>
                    <input type="text" class="form-control mt-1 text-title1 text-blue" id="no_hp" name="no_hp"
                           placeholder="No. Telp / WA" required>
                </div>
                <button class="btn bg-red text-white mt-4 w-25 text-title2" type="submit">Simpan</button>
            </form>
        </div>
        <div class="col-md-8 offset-md-2 mt-5 pt-4">
            <h3 class="text-blue font-weight-bold mb-4">Ubah Password</h3>
            <form>
                @csrf
                @method("PUT")
                <label for="current_password" class="text-title1 text-blue">Password Lama</label>
                <div class="input-group mb-3" id="show_hide_password">
                    <input class="form-control text-title1 text-blue" type="password" name="current_password"
                           id="current_password"
                           placeholder="*****" required>
                    <div class="input-group-append">
                        <a href="" class="input-group-text text-decoration-none"><i class="fa fa-eye-slash"
                                                                                    aria-hidden="true"></i></a>
                    </div>
                </div>
                <label for="password" class="text-title1 text-blue">Password Baru</label>
                <div class="input-group mb-3" id="show_hide_password">
                    <input class="form-control text-title1 text-blue" type="password" name="password" id="password"
                           placeholder="*****" required>
                    <div class="input-group-append">
                        <a href="" class="input-group-text text-decoration-none"><i class="fa fa-eye-slash"
                                                                                    aria-hidden="true"></i></a>
                    </div>
                </div>
                <label for="recheck-password" class="text-title1 text-blue">Konfirmasi Password Baru</label>
                <div class="input-group mb-3" id="show_hide_password">
                    <input class="form-control text-title1 text-blue" type="password" id="recheck-password"
                           placeholder="*****" required>
                    <div class="input-group-append">
                        <a href="" class="input-group-text text-decoration-none"><i class="fa fa-eye-slash"
                                                                                    aria-hidden="true"></i></a>
                    </div>
                </div>

                <button class="btn bg-red text-white mt-4 w-25 text-title2 mb-5" type="submit">Simpan</button>
            </form>
        </div>
    </div>
@endsection
@section('custom-script')
    <script src="{{ url('/js/show-password.js') }}"></script>
    <script src="{{ url('/js/check-password.js') }}"></script>
@endsection
