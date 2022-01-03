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
            <h3 class="text-blue font-bolder font-weight-bold mb-5">Form Permohonan Plasma</h3>
            <form action="#" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="recipient" class="text-title1 text-blue">Nama Lengkap Penerima</label>
                    <input type="text" class="form-control mt-1 text-title1 text-blue" id="recipient" name="recipient"
                           placeholder="Masukkan Nama Lengkap Penerima" required>
                </div>
                <div class="form-group mb-3">
                    <label for="applicant" class="text-title1 text-blue">Nama Lengkap Pemohon</label>
                    <input type="text" class="form-control mt-1 text-title1 text-blue" id="applicant" name="applicant"
                           placeholder="Masukkan Nama Lengkap Pemohon" required>
                </div>
                <div class="form-group mb-3">
                    <label for="bloodType" class="text-title1 text-blue">Masukkan Golongan Darah</label>
                    <select class="custom-select text-title1 text-blue mt-1" id="bloodType" name="bloodType" required>
                        <option value="" disabled selected>Golongan Darah</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="AB">AB</option>
                        <option value="O">O</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="rhesusType" class="text-title1 text-blue">Masukkan Jenis Rhesus</label>
                    <select class="custom-select text-title1 text-blue mt-1" id="rhesusType" name="rhesusType" required>
                        <option value="" disabled selected>Rhesus</option>
                        <option value="positive">Positif (+)</option>
                        <option value="negatif">Negatif (-)</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="quantity" class="text-title1 text-blue">Jumlah Kantong</label>
                    <input type="number" class="form-control mt-1 text-title1 text-blue" id="quantity" name="quantity"
                           placeholder="Masukkan Jumlah Kantung" required>
                </div>
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
                    <label for="ktp" class="text-title1 text-blue">KTP</label>
                    <div class="custom-file mt-1">
                        <input type="file" accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps"
                               class="custom-file-input" id="customFile" name="ktp" required>
                        <label class="custom-file-label text-title1 text-blue" for="customFile">Choose file</label>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label for="letter" class="text-title1 text-blue">Surat Rujukan</label>
                    <div class="custom-file mt-1">
                        <input type="file" accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps"
                               class="custom-file-input" id="customFile" name="letter" required>
                        <label class="custom-file-label text-title1 text-blue" for="customFile">Choose file</label>
                    </div>
                </div>
                <button class="btn bg-red text-white mt-4 w-100 text-title2 mb-5" type="submit">Daftar</button>
            </form>
        </div>
    </div>
@endsection
@section('custom-script')
    <script type="text/javascript">
        $(".custom-file-input").on("change", function () {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
    </script>
@endsection

