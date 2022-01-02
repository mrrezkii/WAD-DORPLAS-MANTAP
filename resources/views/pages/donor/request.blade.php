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
            <p class="text-title2 text-blue mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tristique
                quis consequat feugiat luctus mauris enim mi.</p>
        </div>
        <div class="col-md-6 col-sm-12 d-flex flex-column my-auto pt-5">
            <h3 class="text-blue font-bolder font-weight-bold mt-5">Form Permohonan Plasma</h3>
            <form action="#" METHOD="POST">
                @csrf
                <p class="text-title2 text-blue mt-4">Nama Lengkap</p>
                <div class="input-group mb-3">
                    <input class="form-control" type="text" name="name" placeholder="Masukknan Nama Lengkap" required>
                </div>
                <p class="text-title2 text-blue">NIK</p>
                <div class="input-group mb-3">
                    <input class="form-control" type="number" name="nik" placeholder="Masukkan NIK" required>
                </div>
                <p class="text-title2 text-blue">Tipe Darah</p>
                <div class="input-group mb-3">
                    <input class="form-control" type="text" name="bloodType" placeholder="Masukkan Tipe Darah" required>
                </div>
                <p class="text-title2 text-blue">Tipe Rhesus</p>
                <div class="input-group mb-3">
                    <input class="form-control" type="text" name="rhesusType" placeholder="Masukkan Tipe Rhesus"
                           required>
                </div>
                <p class="text-title2 text-blue">Kumorbid</p>
                <div class="input-group mb-3">
                    <input class="form-control" type="text" name="kumorbid" placeholder="(Optional) Masukkan Kumorbid">
                </div>
                <p class="text-title2 text-blue">Catatan</p>
                <div class="input-group mb-3">
                    <input class="form-control" type="text" name="note" placeholder="Masukkan Catatan" required>
                </div>
                <button class="btn bg-red text-white mt-4 w-100 text-title2" type="submit">Daftar</button>
            </form>
        </div>
    </div>
@endsection
