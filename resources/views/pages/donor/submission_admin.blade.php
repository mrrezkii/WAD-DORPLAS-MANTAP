@extends('layouts.main')
@section('custom-head')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.11.3/datatables.min.css"/>
@endsection
@section('container')
    <div class="row">
        <div class="col-md-12 mt-5 ">
            <table id="myTable" class="table table-stripped text-grey">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Penerima</th>
                    <th>Pemohon</th>
                    <th>Gol. Darah</th>
                    <th>Rhesus</th>
                    <th>Jumlah</th>
                    <th>Digunakan</th>
                    <th>KTP</th>
                    <th>Surat</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form id="deleteAction" method="POST">
                    @csrf
                    @method("DELETE")
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body" id="hidden-value"></div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('custom-script')
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.11.3/datatables.min.js"></script>
    <script>
        $('#myTable').DataTable({
            processing: true,
            serverSide: true,
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
                {data: 'action', name: 'action'},
            ]
        });
    </script>
    <script>
        const modal = document.getElementById("deleteModal");
        modal.addEventListener('hidden.bs.modal', function (_) {
            document.getElementById("id").remove();
            document.getElementById("deleteModalLabel").innerText = "";
        });

        function btnDelete(data) {
            console.log(data)
            $('#deleteModal').modal('show');
            document.getElementById("deleteModalLabel").innerText = "Apakah Anda yakin akan hapus request plasma dari \t" + data['donators']['name_donators'] + " ?";
            document.getElementById("deleteAction").action = "/_submission/" + data['id_donor_submissions'];
        }
    </script>
@endsection
