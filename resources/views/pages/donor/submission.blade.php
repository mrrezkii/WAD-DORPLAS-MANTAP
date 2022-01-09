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
            <p class="text-title2 text-blue mt-2" style="max-width: 500px"><i>"Kebugaran fisik bukan hanya salah satu kunci terpenting untuk tubuh yang sehat,
                tetapi juga dasar dari aktivitas intelektual yang dinamis dan kreatif."</i></p>
        </div>
        <div class="col-md-6 col-sm-12 d-flex flex-column my-auto pt-5">
            <h3 class="text-blue font-bolder font-weight-bold mb-5">Form Permohonan Plasma</h3>
            <form action="/submission" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-3">
                    <label for="recipient_donor_submissions" class="text-title1 text-blue">Nama Lengkap Penerima</label>
                    <input type="text"
                           class="form-control mt-1 text-title1 text-blue @error('recipient_donor_submissions') is-invalid @enderror"
                           id="recipient_donor_submissions"
                           name="recipient_donor_submissions"
                           placeholder="Masukkan Nama Lengkap Penerima" required
                           value="{{ old('recipient_donor_submissions') }}">
                    @error('recipient_donor_submissions')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="applicant_donor_submissions" class="text-title1 text-blue">Nama Lengkap Pemohon</label>
                    <input type="text"
                           class="form-control mt-1 text-title1 text-blue @error('applicant_donor_submissions') is-invalid @enderror"
                           id="applicant_donor_submissions"
                           name="applicant_donor_submissions"
                           placeholder="Masukkan Nama Lengkap Pemohon" required
                           value="{{ auth()->user()->name_donators }}" readonly>
                    @error('applicant_donor_submissions')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="blood_type_donor_submissions" class="text-title1 text-blue">Masukkan Golongan
                        Darah</label>
                    <select
                        class="custom-select text-title1 text-blue mt-1 @error('blood_type_donor_submissions') is-invalid @enderror"
                        id="blood_type_donor_submissions"
                        name="blood_type_donor_submissions" required>
                        <option value="" disabled selected>Golongan Darah</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="AB">AB</option>
                        <option value="O">O</option>
                    </select>
                    @error('blood_type_donor_submissions')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="rhesus_type_donor_submissions" class="text-title1 text-blue">Masukkan Jenis
                        Rhesus</label>
                    <select
                        class="custom-select text-title1 text-blue mt-1 @error('rhesus_type_donor_submissions') is-invalid @enderror"
                        id="rhesus_type_donor_submissions"
                        name="rhesus_type_donor_submissions" required>
                        <option value="" disabled selected>Rhesus</option>
                        <option value="positive">Positif (+)</option>
                        <option value="negative">Negatif (-)</option>
                    </select>
                    @error('rhesus_type_donor_submissions')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="quantity_donor_submissions" class="text-title1 text-blue">Jumlah Kantong</label>
                    <input type="number"
                           class="form-control mt-1 text-title1 text-blue @error('quantity_donor_submissions') is-invalid @enderror"
                           id="quantity_donor_submissions"
                           name="quantity_donor_submissions"
                           placeholder="Masukkan Jumlah Kantung" required
                           value="{{ old('quantity_donor_submissions') }}">
                    @error('quantity_donor_submissions')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="id_institutions" class="text-title1 text-blue">Lokasi Donor Plasma</label>
                    <select
                        class="custom-select text-title1 text-blue mt-1 @error('id_institutions') is-invalid @enderror"
                        id="id_institutions" name="id_institutions"
                        required>
                        <option value="" disabled selected>Pilih Lokasi Terdekat</option>
                        @foreach($institutions as $institution)
                            <option
                                value="{{ $institution->id_institutions }}">{{ $institution->name_institutions }}</option>
                        @endforeach
                    </select>
                    @error('id_institutions')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="ktp" class="text-title1 text-blue">KTP</label>
                    <div class="custom-file mt-1">
                        <input onchange="validateSize(this)" type="file"
                               accept="image/jpeg,image/gif,image/png"
                               class="custom-file-input @error('ktp_donor_submissions') is-invalid @enderror"
                               id="customFile" name="ktp_donor_submissions" required>
                        <label class="custom-file-label text-title1 text-blue" for="customFile">Choose file</label>
                    </div>
                    @error('ktp_donor_submissions')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="letter" class="text-title1 text-blue">Surat Rujukan</label>
                    <div class="custom-file mt-1">
                        <input onchange="validateSize(this)" type="file"
                               accept="image/jpeg,image/gif,image/png"
                               class="custom-file-input @error('letter_donor_submissions') is-invalid @enderror"
                               id="customFile" name="letter_donor_submissions" required>
                        <label class="custom-file-label text-title1 text-blue" for="customFile">Choose file</label>
                    </div>
                    @error('letter_donor_submissions')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <input type="hidden" value="{{ auth()->user()->id_donators }}" name="id_donators">
                <button class="btn bg-red text-white mt-4 w-100 text-title2 mb-5" type="submit">Daftar</button>
            </form>
        </div>
        @if(session()->has('submissionSuccess'))
            <div class="position-fixed" style="right: 10px;bottom: 50px">
                <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="5000">
                    <div class="toast-header d-flex justify-content-between">
                        <img src="{{ url('/images/logo.png') }}" class="rounded mr-2 img-fluid w-25" alt="...">
                        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="toast-body">
                        {{ session('submissionSuccess') }}
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection
@section('custom-script')
    <script type="text/javascript">
        $(".custom-file-input").on("change", function () {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
    </script>
    <script type="text/javascript">
        function validateSize(input) {
            const fileSize = input.files[0].size / 1024 / 1024;
            if (fileSize > 1) {
                alert('Ukuran maksimum 1 Mb');
                document.getElementById('customFile').value = "";
            }
        }
    </script>
    <script>
        $('.toast').toast('show');
    </script>
@endsection
