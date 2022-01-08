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
                    <th>Nama Penerima</th>
                    <th>Nama Pemohon</th>
                    <th>Gol. Darah</th>
                    <th>Jenis Rhesus</th>
                    <th>Jumlah</th>
                    <th>Digunakan pada</th>
                    <th>KTP</th>
                    <th>Surat</th>
                    <th>Status</th>
                    <th>Permintaan</th>
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
            "scrollY": 450,
            "scrollX": true,
            ajax: '{{ route('submission.data') }}',
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
                {data: 'recipient_donor_submissions', name: 'recipient_donor_submissions'},
                {data: 'applicant_donor_submissions', name: 'applicant_donor_submissions'},
                {data: 'blood_type_donor_submissions', name: 'blood_type_donor_submissions'},
                {data: 'rhesus_type_donor_submissions', name: 'rhesus_type_donor_submissions'},
                {data: 'quantity_donor_submissions', name: 'quantity_donor_submissions'},
                {data: 'time_used_donor_submissions', name: 'time_used_donor_submissions'},
                {data: 'ktp_donor_submissions', name: 'ktp_donor_submissions'},
                {data: 'letter_donor_submissions', name: 'letter_donor_submissions'},
                {data: 'status.name_status_donor', name: 'status.name_status_donor'},
                {data: 'donators.name_donators', name: 'donators.name_donators'},
            ]
        });
    </script>
@endsection
