@extends('layouts.main')
@section('container')

    <div class="row">
        @include('partials.overview')
        <div class="col-md-6 col-sm-12">
            <div class="d-flex flex-column ">
                <h3 class="text-blue font-weight-bold mt-5 pt-5 text-center m-auto">Data Pendonor</h3>
                <div id='donorNotesChart' class="m-auto"></div>
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="d-flex flex-column ">
                <h3 class="text-blue font-weight-bold mt-5 pt-5 text-center m-auto">Data Request Plasma</h3>
                <div id='donorSubmissionsChart' class="m-auto"></div>
            </div>
        </div>


    </div>
@endsection
@section('custom-script')
    <script src='https://cdn.plot.ly/plotly-2.8.3.min.js'></script>
    <script>
        const donorNotesData = @json($donorNotes);
        var data = [{
            type: "pie",
            values: [donorNotesData[0], donorNotesData[1], donorNotesData[2], donorNotesData[3]],
            labels: ["Menunggu", "Dijadwalkan", "Diterima", "Ditolak"],
            textinfo: "label+percent",
            textposition: "outside",
            automargin: true
        }]

        var layout = {
            height: 400,
            width: 400,
            margin: {"t": 0, "b": 0, "l": 0, "r": 0},
            showlegend: false
        }

        Plotly.newPlot('donorNotesChart', data, layout)
    </script>
    <script>
        const donorSubmissions = @json($donorSubmissions);
        var data = [{
            type: "pie",
            values: [donorSubmissions[0], donorSubmissions[1], donorSubmissions[2], donorSubmissions[3]],
            labels: ["Menunggu", "Dijadwalkan", "Diterima", "Ditolak"],
            textinfo: "label+percent",
            textposition: "outside",
            automargin: true
        }]

        var layout = {
            height: 400,
            width: 400,
            margin: {"t": 0, "b": 0, "l": 0, "r": 0},
            showlegend: false
        }

        Plotly.newPlot('donorSubmissionsChart', data, layout)
    </script>
@endsection
