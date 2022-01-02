@extends('layouts.main')
@section('custom-head')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
@endsection
@section('container')
    <div class="row">
        <div class="col-12 mt-4 pb-4 border-bottom">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <a href="#" class="text-decoration-none">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="{{ url('/images/avatar.jpg') }}" class="rounded-circle" width="70px"
                                     height="70px" alt="avatar">
                            </div>
                            <div class="col-md-9">
                                <p class="text-title1 text-blue mb-1 ml-3">Muhammad Rezki Ananda</p>
                                <img src="{{ url('/images/icon/ic_star.svg') }}" alt="point" class="img-fluid ml-3">
                                <span class="text-body1 text-blue">255</span>
                            </div>
                        </div>
                    </a>

                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="row no-gutters">
                        <div class="col-3 m-0 p-0">
                            <img src="{{ url('/images/icon/ic_drop_white.svg') }}" height="60px" alt="blood">
                        </div>
                        <div class="col-9">
                            <p class="text-subtitle1 text-blue">Diperbarui 28/10/2021</p>
                            <p class="text-title1 text-red">Stok Plasma</p>
                            <p class="text-body1 text-blue">59 Kantung</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 ">
                    <p class="text-title1 text-red mt-2">Permintaan</p>
                    <img src="{{ url('/images/icon/ic_search.svg') }}" alt="search" width="17px">
                    <span class="text-body1 text-blue">210</span>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <img class="img=fluid" src="{{ url('/images/woman.png') }}" alt="Woman">
            <p class="text-title1 text-blue mt-1"
               style="font-size: 30px;line-height: 30px;font-family: 'Montserrat', sans-serif;">Ajukan Donor</p>
            <p class="text-title2 text-blue mt-2" style="max-width: 500px">Lorem ipsum dolor sit amet, consectetur
                adipiscing elit. Tristique
                quis consequat feugiat luctus mauris enim mi.</p>
        </div>
        <div class="col-md-6 col-sm-12 d-flex flex-column my-auto pt-5">
            <h3 class="text-blue font-bolder font-weight-bold mb-5">Form Pengajuan Donor</h3>
            <form method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="gender" class="text-title1 text-blue">Lokasi Donor Plasma</label>
                    <select class="custom-select text-title1 text-blue mt-1" id="gender" name="gender" required>
                        <option value="" disabled selected>Pilih Lokasi Terdekat</option>
                        <option value="1">PMI Kota Kediri</option>
                        <option value="2">PMI Kota Malang</option>
                        <option value="3">PMI Kota Bandung</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="schedule" class="text-title1 text-blue">Jadwal Donor Plasma</label>
                    <input type="date" class="form-control mt-1 text-title1 text-blue" id="schedule" name="schedule"
                           required>
                </div>
                <button class="btn bg-red text-white mt-4 w-100 text-title2" type="submit">Daftar</button>
            </form>
        </div>
    </div>
@endsection
