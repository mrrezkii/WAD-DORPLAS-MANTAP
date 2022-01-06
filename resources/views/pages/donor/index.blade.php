@extends('layouts.main')
@section('custom-head')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
@endsection
@section('container')
{{--    @dd($param)--}}
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
            <form action="/donor" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="id_institutions" class="text-title1 text-blue">Lokasi Donor Plasma</label>
                    <select class="custom-select text-title1 text-blue mt-1" id="id_institutions" name="id_institutions"
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
                    <label for="schedule_donor_notes" class="text-title1 text-blue">Jadwal Donor Plasma</label>
                    <input type="date" class="form-control mt-1 text-title1 text-blue" id="schedule_donor_notes"
                           name="schedule_donor_notes"
                           required value="{{ old('schedule_donor_notes') }}">
                    @error('schedule_donor_notes')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <input type="hidden" value="{{ auth()->user()->id_donators }}" name="id_donators">
                <button class="btn bg-red text-white mt-4 w-100 text-title2" type="submit">Daftar</button>
            </form>
        </div>
        @if(session()->has('donorSuccess'))
            <div class="position-fixed" style="right: 10px;bottom: 50px">
                <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="5000">
                    <div class="toast-header d-flex justify-content-between">
                        <img src="{{ url('/images/logo.png') }}" class="rounded mr-2 img-fluid w-25" alt="...">
                        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="toast-body">
                        {{ session('donorSuccess') }}
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection
@section('custom-script')
    <script>
        $('.toast').toast('show');
    </script>
@endsection
