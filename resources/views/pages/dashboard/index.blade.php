@extends('layouts.main')
@section('custom-head')
    <link href="{{ url('/vendor/powerful-calendar/style.css') }}" rel="stylesheet">
    <link href="{{ url('/vendor/powerful-calendar/theme.css') }}" rel="stylesheet">
@endsection
@section('container')

    <div class="row">
        @include('partials.overview')
        <div class="col-md-6 col-sm-12 mt-5">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4" style="width: 100%;">
                        <div class="card-header py-3">
                            <div class="d-flex justify-content-between">
                                <h6 class="m-0 text-title1 text-blue">Trend Donor Plasma</h6>
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
                                                    class="ml-2 text-body2 text-blue">{{ Str::replace('+0700', 'WIB', $data['pubDate']) }}</span>
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
                    <h6 class="m-0 text-title1 text-blue">Jadwal Donor</h6>
                </div>
                <div class="card-body">
                    <div class="calendar-container"></div>
                    <div class="detail-schedule">
                        <h6 class="m-0 text-title1 text-blue mb-5">Detail acara</h6>
                        <a class="text-decoration-none" href="#">
                            <div class="bg-red rounded shadow-md mb-3">
                                <div class="row py-2">
                                    <div class="col-2">
                                        <div class="tile d-flex">
                                            <p class="m-auto text-title1 text-blue">19</p>
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <div class="box-event border-left">
                                            <h6 class="text-title1 text-white ml-3">Sabtu, 19 Nov 21</h6>
                                            <p class="text-body2 text-white ml-3 mt-1">Lokasi PMI Kota
                                                Kediri</p>
                                            <p class="text-body2 text-white ml-3">09.00 - 10.00</p>
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
                        <a class="text-decoration-none" href="#">
                            <div class="bg-red rounded shadow-md mb-3">
                                <div class="row py-2">
                                    <div class="col-2">
                                        <div class="tile d-flex">
                                            <p class="m-auto text-title1 text-blue">20</p>
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <div class="box-event border-left">
                                            <h6 class="text-title1 text-white ml-3">Minggu, 20 Nov 21</h6>
                                            <p class="text-body2 text-white ml-3 mt-1">Lokasi PMI Kota
                                                Kediri</p>
                                            <p class="text-body2 text-white ml-3">09.00 - 10.00</p>
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

                    </div>

                    <hr>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('custom-script')
    <script src="{{ url('/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ url('/js/chart-area-demo.js') }}"></script>
    <script src="{{ url('/vendor/powerful-calendar/calendar.min.js') }}"></script>
    <script src="{{ url('/js/calendar.js') }}"></script>
@endsection
