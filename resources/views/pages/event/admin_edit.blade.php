@extends('layouts.main')
@section('container')
    <div class="row">
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
            <h3 class="text-blue font-weight-bold mt-5 mb-5">
                <a class="text-decoration-none" href="{{ url("/_event/") }}"><i class="fas fa-arrow-left text-red"></i>&emsp;&emsp;</a>
                Edit {{ $data->name_donor_events }}
            </h3>
            <form action="{{ url("/_event/$data->id_donor_events") }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group mb-3">
                    <label for="name_donor_events" class="text-title1 text-blue">Nama Acara</label>
                    <input type="text"
                           class="form-control mt-1 text-title1 text-blue @error('name_donor_events') is-invalid @enderror"
                           id="name_donor_events" name="name_donor_events"
                           placeholder="Nama Acara" required value="{{ $data->name_donor_events  }}">
                    @error('name_donor_events')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="start_date_donor_events" class="text-title1 text-blue">Tanggal Mulai</label>
                    <input type="date"
                           class="form-control mt-1 text-title1 text-blue @error('start_date_donor_events') is-invalid @enderror"
                           id="start_date_donor_events" name="start_date_donor_events"
                           placeholder="Nama Acara" required value="{{ $data->start_date_donor_events  }}">
                    @error('start_date_donor_events')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="end_date_donor_events" class="text-title1 text-blue">Tanggal Selesai</label>
                    <input type="date"
                           class="form-control mt-1 text-title1 text-blue @error('end_date_donor_events') is-invalid @enderror"
                           id="end_date_donor_events" name="end_date_donor_events"
                           placeholder="Nama Acara" required value="{{ $data->end_date_donor_events }}">
                    @error('end_date_donor_events')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="start_time_donor_events" class="text-title1 text-blue">Waktu Mulai</label>
                    <input type="time"
                           class="form-control mt-1 text-title1 text-blue @error('start_time_donor_events') is-invalid @enderror"
                           id="start_time_donor_events" name="start_time_donor_events"
                           placeholder="Nama Acara" required value="{{ $data->start_time_donor_events }}">
                    @error('start_time_donor_events')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="end_time_donor_events" class="text-title1 text-blue">Waktu Selesai</label>
                    <input type="time"
                           class="form-control mt-1 text-title1 text-blue @error('end_time_donor_events') is-invalid @enderror"
                           id="end_time_donor_events" name="end_time_donor_events"
                           placeholder="Nama Acara" required value="{{ $data->end_time_donor_events }}">
                    @error('end_time_donor_events')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="desc_donor_events" class="text-title1 text-blue">Deksripsi</label>
                    <textarea
                        class="form-control text-title1 text-blue @error('desc_donor_events') is-invalid @enderror"
                        id="desc_donor_events" name="desc_donor_events"
                        rows="3">{{ $data->desc_donor_events }}</textarea>
                    @error('desc_donor_events')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="point_donor_events" class="text-title1 text-blue">Poin</label>
                    <input type="number"
                           class="form-control mt-1 text-title1 text-blue @error('point_donor_events') is-invalid @enderror"
                           id="point_donor_events" name="point_donor_events"
                           placeholder="Poin" required value="{{ $data->point_donor_events }}">
                    @error('point_donor_events')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group mb-3 d-flex flex-column">
                    <label for="output" class="text-title1 text-blue">Banner (Optional)</label>
                    <img id="output" src="{{ $data->thumbnail_donor_events }}" class="img-fluid w-25">
                    <div class="custom-file mt-1">
                        <input onchange="validateSize(this)" type="file"
                               accept="image/jpeg,image/gif,image/png"
                               class="custom-file-input @error('thumbnail_donor_events') is-invalid @enderror"
                               id="customFile" name="thumbnail_donor_events">
                        <label class="custom-file-label text-title1 text-blue" for="customFile">Choose file</label>
                    </div>
                    @error('thumbnail_donor_events')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <input type="hidden" name="modified_by" value="{{ auth()->user()->name_employees }}">
                <button class="btn bg-red text-white mt-4 w-25 text-title2" type="submit">Simpan</button>
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
    <script type="text/javascript">
        function validateSize(input) {
            const fileSize = input.files[0].size / 1024 / 1024;
            if (fileSize > 1) {
                alert('Ukuran maksimum 1 Mb');
                document.getElementById('customFile').value = "";
            }

            console.log(document.getElementById('output').src = window.URL.createObjectURL(input.files[0]))
        }
    </script>
@endsection

