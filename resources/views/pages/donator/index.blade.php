@extends('layouts.main')

@section('container')
    <div class="d-flex flex-column">
        <h3 class="text-center">{{ $title }}</h3>
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Pendonor</th>
                <th scope="col">Email</th>
                <th scope="col">Golongan Darah</th>
                <th scope="col">Jenis Rhesus</th>
                <th scope="col">Kontak</th>
                <th scope="col">Alamat</th>
            </tr>
            </thead>
            <tbody>
            @php($count=1)
            @foreach($arrays as $data)
                <tr>
                    <th scope="row">{{ $count++ }}</th>
                    <td>{{ $data->name_donators }}</td>
                    <td>{{ $data->email_donators }}</td>
                    <td>{{ $data->blood_type_donators }}</td>
                    <td>{{ $data->blood_rhesus_donators }}</td>
                    <td>{{ $data->contact_donators }}</td>
                    <td>{{ $data->address_donators }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
