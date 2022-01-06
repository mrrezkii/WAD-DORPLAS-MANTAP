@extends('layouts.main')
@section('custom-head')
    <link href="{{ url('/vendor/powerful-calendar/style.css') }}" rel="stylesheet">
    <link href="{{ url('/vendor/powerful-calendar/theme.css') }}" rel="stylesheet">
@endsection
@section('container')
    {{--@dd($covidData)--}}
    <div class="row">
        @include('partials.overview')
        <div class="col-md-6 col-sm-12 mt-5">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4" style="width: 100%;">
                        <div class="card-header py-3">
                            <div class="d-flex justify-content-between">
                                <h6 class="m-0 text-title1 text-blue">Trend Covid Indonesia</h6>
                                <a class="text-decoration-none" href="#">
                                    <p class="text-body">30 hari terakhir</p>
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="chart-area">
                                <canvas id="myAreaChart"></canvas>
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card mb-4" style="width: 100%;">
                        <div class="card-header py-3">
                            <div class="d-flex justify-content-between">
                                <h6 class="m-0 text-title1 text-blue">Artikel Pilihan</h6>
                                <a href="{{ url('/article') }}" class="text-decoration-none">
                                    <p class="text-body">Lihat selengkapnya</p>
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            @foreach($articleData['channel']['item']  as $data)
                                @if ($loop->index == 5) @break @endif
                                @php($newDate = \Carbon\Carbon::parse($data['pubDate']))
                                <a href="{{ $data['link'] }}" target="_blank" class="text-decoration-none">
                                    <div class="row no-gutters mb-3 list-article">
                                        <div class="col-md-2 col-sm-12">
                                            <img class="rounded img-fluid"
                                                 src="{{ $data['enclosure']['@attributes']['url'] }}"
                                                 alt="article">
                                        </div>
                                        <div class="col-md-10 col-sm-12">
                                            <p class="ml-2 p-0 text-title1 text-blue"
                                               style="max-lines: 1">{{ $data['title'] }}</p>
                                            <p class="ml-2 text-body1 text-dark"
                                               style="max-lines: 1">{!! strip_tags($data['description']) !!}</p>
                                            <p>
                                                <span class="ml-2 text-body2 text-red">covid19.go.id</span>
                                                <span class="ml-2 text-body2 text-dark">&bull;</span>
                                                <span
                                                    class="ml-2 text-body2 text-blue">{{ $newDate->translatedFormat('D, d F Y') }}</span>
                                            </p>

                                        </div>
                                    </div>
                                </a>
                            @endforeach
                            <hr>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-md-6 col-sm-12 mt-5">
            <div class="card mb-4" style="width: 100%;">
                <div class="card-header py-3">
                    <h6 class="m-0 text-title1 text-blue">Jadwal Donor Terdekat</h6>
                </div>
                <div class="card-body">
                    <div class="calendar-container"></div>
                    <div class="detail-schedule">
                        @if($schedules->count())
                            <h6 class="m-0 text-title1 text-blue mb-5">Detail acara</h6>
                            @foreach($schedules as $schedule)
                                @php($newDate = \Carbon\Carbon::parse($schedule->schedule_donor_notes))
                                <a class="text-decoration-none" href="{{ url('/account') }}">
                                    <div class="bg-red rounded shadow-md mb-3">
                                        <div class="row py-2">
                                            <div class="col-2">
                                                <div class="tile d-flex">
                                                    <p class="m-auto text-title1 text-blue">{{ $newDate->translatedFormat('d') }}</p>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="box-event border-left">
                                                    <h6 class="text-title1 text-white ml-3">{{ $newDate->translatedFormat('D, d F Y') }}</h6>
                                                    <p class="text-body2 text-white ml-3 mt-1 text-truncate">{{ $schedule->institutions->name_institutions }}</p>
                                                    <p class="text-body2 text-white ml-3">{{ $newDate->translatedFormat('h:i') }}</p>
                                                </div>
                                            </div>
                                            <div class="col-2 d-flex">
                                                <img class="img-fluid my-auto"
                                                     src="{{ url('/images/icon/ic_arrow_right.svg') }}"
                                                     alt="next">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        @else
                            <p class="text-center">Belum melakukan pendaftaran donor</p>
                        @endif

                    </div>

                    <hr>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('custom-script')
    <script> let dataCovid = @json($covidData) </script>
    <script>
        let dataRaw = @json($schedules);
        const dataSchedule = [];
        for (let i = 0; i < dataRaw.length; i++) {
            dataSchedule.push(dataRaw[i]['schedule_donor_notes']);
        }
    </script>
    <script src="{{ url('/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ url('/js/chart-covid.js') }}"></script>
    <script src="{{ url('/vendor/powerful-calendar/calendar.min.js') }}"></script>
    <script src="{{ url('/js/calendar.js') }}"></script>
@endsection
