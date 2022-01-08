@extends('layouts.main')
@section('custom-head')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.11.3/datatables.min.css"/>
@endsection
@section('container')
    <div class="row">
        <div class="col-md-10 offset-md-1 mt-5 ">
            <table id="myTable" class="table table-stripped text-grey">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Pendonor</th>
                    <th>Nama Acara</th>
                    <th>Status</th>
                    <th>Jadwal</th>
                </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
@endsection
@section('custom-script')
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.11.3/datatables.min.js"></script>
    <script>
        $('#myTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ route('donor.data') }}',
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
                {data: 'donators.name_donators', name: 'donators.name_donators'},
                {data: 'donor_events.name_donor_events', name: 'donor_events.name_donor_events'},
                {data: 'status.name_status_donor', name: 'status.name_status_donor'},
                {data: 'schedule_donor_notes', name: 'schedule_donor_notes'},
            ]
        });
    </script>
@endsection
