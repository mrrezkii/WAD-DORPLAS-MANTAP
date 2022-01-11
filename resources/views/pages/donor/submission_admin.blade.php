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
                    <th>Pengubah terakhir</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
        @if(session()->has('info'))
            <div class="position-fixed" style="right: 10px;bottom: 50px">
                <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="5000">
                    <div class="toast-header d-flex justify-content-between">
                        <img src="{{ url('/images/logo.png') }}" class="rounded mr-2 img-fluid w-25" alt="...">
                        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="toast-body">
                        {{ session('info') }}
                    </div>
                </div>
            </div>
    @endif
    <!-- Modal -->
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form id="deleteAction" method="POST">
                    @csrf
                    @method("DELETE")
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Apakah Anda yakin akan hapus request plasma dari <strong
                                    id="deleteModalLabel"></strong> ?</h5>
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
                {data: 'modified_by', name: 'modified_by'},
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
            document.getElementById("deleteModalLabel").innerText = data['donators']['name_donators'];
            document.getElementById("deleteAction").action = "/_submission/" + data['id_donor_submissions'];
        }
    </script>
    <script>
        $('.toast').toast('show');
    </script>
@endsection
