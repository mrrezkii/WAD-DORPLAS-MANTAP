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
                <a class="text-decoration-none" href="{{ url("/_donor/") }}"><i class="fas fa-arrow-left text-red"></i>&emsp;&emsp;</a>
                Edit {{ $data->donators->name_donators }}
            </h3>
            <form action="{{ url("/_donor/$data->id_donor_notes") }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group mb-3">
                    <label for="name_donor_events" class="text-title1 text-blue">Nama Acara</label>
                    <input type="text"
                           class="form-control mt-1 text-title1 text-blue "
                           id="name_donor_events"
                           placeholder="Nama Acara" required value="{{ $data->donators->name_donators  }}" readonly>
                </div>
                <div class="form-group mb-3">
                    <label for="name_donor_events" class="text-title1 text-blue">Nama Acara</label>
                    <input type="text"
                           class="form-control mt-1 text-title1 text-blue "
                           id="name_donor_events"
                           placeholder="Nama Acara" required value="{{ $data->donor_events->name_donor_events ?? "-" }}"
                           readonly>
                </div>
                <div class="form-group mb-3">
                    <label for="status_donor_notes" class="text-title1 text-blue">Status</label>
                    @php
                        $text_condition = 'text-secondary';
                        if($data->status_donor_notes === 1) $text_condition = 'text-red';
                        elseif($data->status_donor_notes === 2) $text_condition = 'text-primary';
                        elseif($data->status_donor_notes === 3) $text_condition = 'text-success';
                        elseif($data->status_donor_notes === 4) $text_condition = 'text-red-2'
                    @endphp
                    <select
                        onchange="changeColor(this)"
                        class="custom-select text-title1 mt-1 @error('status_donor_notes') is-invalid @enderror {{ $text_condition }}"
                        id="status_donor_notes" name="status_donor_notes"
                        required>
                        @foreach($status as $status)
                            @php
                                $text_condition = 'text-secondary';
                                if($status->id_status_donor === 1) $text_condition = 'text-red';
                                elseif($status->id_status_donor === 2) $text_condition = 'text-primary';
                                elseif($status->id_status_donor === 3) $text_condition = 'text-success';
                                elseif($status->id_status_donor === 4) $text_condition = 'text-red-2'
                            @endphp
                            <option value="{{ $status->id_status_donor }}"
                                    {{ $data->status_donor_notes == $status->id_status_donor ? 'selected' : '' }} class="{{ $text_condition }}">{{ $status->name_status_donor }}</option>
                        @endforeach
                    </select>
                    @error('status_donor_notes')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="schedule_donor_notes" class="text-title1 text-blue">Jadwal</label>
                    <input type="text"
                           class="form-control mt-1 text-title1 text-blue "
                           id="schedule_donor_notes"
                           placeholder="Jadwal" required
                           value="{{ \Carbon\Carbon::parse($data->schedule_donor_notes)->translatedFormat("D, d-m-Y") }}"
                           readonly>
                </div>
                <input type="hidden" name="point_donor_events"
                       value="{{ $data->donor_events != null ? $data->donor_events->point_donor_events : 0 }}">
                <input type="hidden" name="id_donators" value="{{ $data->id_donators }}">
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
    <script>
        function changeColor(input) {
            if (input.classList.contains("text-red")) input.classList.remove("text-red")
            else if (input.classList.contains("text-primary")) input.classList.remove("text-primary")
            else if (input.classList.contains("text-success")) input.classList.remove("text-success")
            else if (input.classList.contains("text-red-2")) input.classList.remove("text-red-2")

            input.classList.add(input.options[input.selectedIndex].className)

        }
    </script>
@endsection

