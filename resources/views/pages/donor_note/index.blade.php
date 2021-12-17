@extends('layouts.main')

@section('container')
        <div class="d-flex flex-column">
            <h3 class="text-center">{{ $title }}</h3>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Pendonor</th>
                    <th scope="col">Nama Institusi</th>
                    <th scope="col">Golongan Darah</th>
                    <th scope="col">Jenis Rhesus</th>
                    <th scope="col">Jadwal</th>
                    <th scope="col">Status</th>
                </tr>
                </thead>
                <tbody>
                @php($count=1)
                @foreach($arrays as $data)
                    <tr>
                        <th scope="row">{{ $count++ }}</th>
                        <td>{{ $data->donators->name_donators }}</td>
                        <td>{{ $data->institutions->name_institutions }}</td>
                        <td>{{ $data->blood_type_donor_notes }}</td>
                        <td>{{ $data->blood_rhesus_donor_notes }}</td>
                        <td>{{ $data->schedule_donor_notes }}</td>
                        <td>{{ $data->status->name_status }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

@endsection
