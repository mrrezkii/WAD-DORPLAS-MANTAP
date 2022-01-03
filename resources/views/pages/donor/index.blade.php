@extends('layouts.main')
@section('custom-head')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
@endsection
@section('container')
    <div class="row">
        @include('partials.overview')
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
