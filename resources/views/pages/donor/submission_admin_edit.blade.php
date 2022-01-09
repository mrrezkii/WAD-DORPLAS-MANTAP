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
                <a class="text-decoration-none" href="{{ url("/_submission/") }}"><i
                        class="fas fa-arrow-left text-red"></i>&emsp;&emsp;</a>
                Edit {{ $data->donators->name_donators }}
            </h3>
            <form action="{{ url("/_submission/$data->id_donor_submissions") }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group mb-3">
                    <label for="recipient_donor_submissions" class="text-title1 text-blue">Nama Penerima</label>
                    <input type="text"
                           class="form-control mt-1 text-title1 text-blue "
                           id="recipient_donor_submissions"
                           placeholder="Nama Penerima" required value="{{ $data->recipient_donor_submissions  }}"
                           readonly>
                </div>
                <div class="form-group mb-3">
                    <label for="applicant_donor_submissions" class="text-title1 text-blue">Nama Pemohon</label>
                    <input type="text"
                           class="form-control mt-1 text-title1 text-blue "
                           id="applicant_donor_submissions"
                           placeholder="Nama Pemohon" required value="{{ $data->applicant_donor_submissions  }}"
                           readonly>
                </div>
                <div class="form-group mb-3">
                    <label for="blood_type_donor_submissions" class="text-title1 text-blue">Golongan Darah</label>
                    <input type="text"
                           class="form-control mt-1 text-title1 text-blue "
                           id="blood_type_donor_submissions"
                           placeholder="Golongan Darah" required value="{{ $data->blood_type_donor_submissions  }}"
                           readonly>
                </div>
                <div class="form-group mb-3">
                    <label for="rhesus_type_donor_submissions" class="text-title1 text-blue">Rhesus</label>
                    <input type="text"
                           class="form-control mt-1 text-title1 text-blue "
                           id="rhesus_type_donor_submissions"
                           placeholder="Rhesus" required
                           value="{{ $data->rhesus_type_donor_submissions == 'positive' ? 'Positif (+)' : 'Negatif (-)' }}"
                           readonly>
                </div>
                <div class="form-group mb-3">
                    <label for="quantity_donor_submissions" class="text-title1 text-blue">Jumlah</label>
                    <input type="number"
                           class="form-control mt-1 text-title1 text-blue @error('quantity_donor_submissions') is-invalid @enderror"
                           id="quantity_donor_submissions" name="quantity_donor_submissions"
                           placeholder="Jumlah" required value="{{ $data->quantity_donor_submissions }}">
                    @error('quantity_donor_submissions')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror

                </div>
                <div class="form-group mb-3">
                    <label for="time_used_donor_submissions" class="text-title1 text-blue">Digunakan</label>
                    <input type="datetime-local"
                           class="form-control mt-1 text-title1 text-blue @error('time_used_donor_submissions') is-invalid @enderror"
                           id="time_used_donor_submissions" name="time_used_donor_submissions"
                           placeholder="Digunakan"
                           value="{{ $data->time_used_donor_submissions != null ? \Carbon\Carbon::parse($data->time_used_donor_submissions)->format('Y-m-d\TH:i') : null }}">
                    @error('time_used_donor_submissions')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group mb-3 d-flex flex-column">
                    <label for="output" class="text-title1 text-blue">KTP</label>
                    <img id="output" src="{{ $data->ktp_donor_submissions }}" class="img-fluid w-25">
                </div>
                <div class="form-group mb-3 d-flex flex-column">
                    <label for="output" class="text-title1 text-blue">Surat Rujukan</label>
                    <img id="output" src="{{ $data->letter_donor_submissions }}" class="img-fluid w-25">
                </div>
                <div class="form-group mb-3">
                    <label for="status_donor_submissions" class="text-title1 text-blue">Status</label>
                    @php
                        $text_condition = 'text-secondary';
                        if($data->status_donor_submissions === 1) $text_condition = 'text-red';
                        elseif($data->status_donor_submissions === 2) $text_condition = 'text-primary';
                        elseif($data->status_donor_submissions === 3) $text_condition = 'text-success';
                        elseif($data->status_donor_submissions === 4) $text_condition = 'text-red-2'
                    @endphp
                    <select
                        onchange="changeColor(this)"
                        class="custom-select text-title1 mt-1 @error('status_donor_submissions') is-invalid @enderror {{ $text_condition }}"
                        id="status_donor_notes" name="status_donor_submissions"
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
                                    {{ $data->status_donor_submissions == $status->id_status_donor ? 'selected' : '' }} class="{{ $text_condition }}">{{ $status->name_status_donor }}</option>
                        @endforeach
                    </select>
                    @error('status_donor_notes')
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

