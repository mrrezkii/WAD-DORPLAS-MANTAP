@extends('layouts.main')

@section('container')
    <div class="d-flex flex-column">
        <h3 class="text-center">{{ $title }}</h3>
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Institusi</th>
                <th scope="col">Email</th>
                <th scope="col">Kontak</th>
                <th scope="col">Alamat</th>
            </tr>
            </thead>
            <tbody>
            @php($count=1)
            @foreach($arrays as $data)
                <tr>
                    <th scope="row">{{ $count++ }}</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
