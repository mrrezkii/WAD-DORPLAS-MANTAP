@extends('layouts.main')
@section('custom-head')
    <link href="{{ url('/vendor/powerful-calendar/style.css') }}" rel="stylesheet">
    <link href="{{ url('/vendor/powerful-calendar/theme.css') }}" rel="stylesheet">
@endsection
@section('container')
    <div class="row">
        <div class="col-12 mt-4 pb-4 border-bottom">
            <div class="row">
                <div class="col-4">
                    <div class="row">
                        <div class="col-3">
                            <img src="{{ url('/images/avatar.jpg') }}" class="rounded-circle" width="70px"
                                 height="70px" alt="avatar">
                        </div>
                        <div class="col-9">
                            <p class="text-title1 text-blue mb-1">Muhammad Diky Jaka</p>
                            <img src="{{ url('/images/icon/ic_star.svg') }}" alt="point">
                            <span class="text-body1 text-blue">255</span>
                        </div>
                    </div>

                </div>
                <div class="col-4">
                    <div class="row no-gutters">
                        <div class="col-3 m-0 p-0">
                            <img src="{{ url('/images/icon/ic_drop_white.svg') }}" height="60px" alt="blood">
                        </div>
                        <div class="col-9">
                            <p class="text-subtitle1 text-blue">Diperbarui 28/10/2021</p>
                            <p class="text-title1 text-red">Stok Plasma</p>
                            <p class="text-body1 text-blue">59 Kantung</p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="row">
                        <div class="col-6">
                            <p class="text-title1 text-red mt-2">Permintaan</p>
                            <img src="{{ url('/images/icon/ic_search.svg') }}" alt="search">
                            <span class="text-body1 text-blue">210</span>
                        </div>
                        <div class="col-6">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 mt-5">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4" style="width: 100%;">
                        <div class="card-header py-3">
                            <div class="d-flex justify-content-between">
                                <h6 class="m-0 text-title1 text-blue">Trend Donor Plasma</h6>
                                <p class="text-body">30 hari terakhir</p>
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
                                <a href="#" class="text-decoration-none">
                                    <p class="text-body">Lihat selengkapnya</p>
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row no-gutters mb-3">
                                <div class="col-2">
                                    <img class="rounded"
                                         src="https://d324bm9stwnv8c.cloudfront.net/7-penyebab-nyeri-dada-sebelah-kiri-halodoc.jpg"
                                         width="80px" height="80px" alt="article">
                                </div>
                                <div class="col-10">
                                    <p class="ml-2 p-0 text-title1 text-blue d-inline-block text-truncate"
                                       style="max-width: 400px;">Cari tahu kenapa hati anda
                                        kosong ? Cek ulasan lengkapnya</p>
                                    <p class="ml-2 text-body1 text-dark d-inline-block text-truncate"
                                       style="max-width: 400px;">Hal ini diungkapkan oleh ilmuwan
                                        terkenal Prof. Rere, bahwasannya hati kosong itu...</p>
                                    <span class="ml-2 text-body2 text-red">Rezki</span>
                                    <span class="ml-2 text-body2 text-dark">&bull;</span>
                                    <span class="ml-2 text-body2 text-blue">10 Okt 2021</span>

                                </div>
                            </div>
                            <div class="row no-gutters mb-3">
                                <div class="col-2">
                                    <img class="rounded"
                                         src="https://d324bm9stwnv8c.cloudfront.net/7-penyebab-nyeri-dada-sebelah-kiri-halodoc.jpg"
                                         width="80px" height="80px" alt="article">
                                </div>
                                <div class="col-10">
                                    <p class="ml-2 p-0 text-title1 text-blue d-inline-block text-truncate"
                                       style="max-width: 400px;">Cari tahu kenapa hati anda
                                        kosong ? Cek ulasan lengkapnya</p>
                                    <p class="ml-2 text-body1 text-dark d-inline-block text-truncate"
                                       style="max-width: 400px;">Hal ini diungkapkan oleh ilmuwan
                                        terkenal Prof. Rere, bahwasannya hati kosong itu...</p>
                                    <span class="ml-2 text-body2 text-red">Rezki</span>
                                    <span class="ml-2 text-body2 text-dark">&bull;</span>
                                    <span class="ml-2 text-body2 text-blue">10 Okt 2021</span>

                                </div>
                            </div>

                            <hr>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-6 mt-5">
            <div class="card mb-4" style="width: 100%;">
                <div class="card-header py-3">
                    <h6 class="m-0 text-title1 text-blue">Jadwal Donor</h6>
                </div>
                <div class="card-body">
                    <div class="calendar-container"></div>
                    <div class="detail-schedule">
                        <h6 class="m-0 text-title1 text-blue mb-5">Detail acara</h6>
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
                                    <img class="img-fluid my-auto" src="{{ url('/images/icon/ic_arrow_right.svg') }}"
                                         alt="next">
                                </div>
                            </div>
                        </div>
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
                                    <img class="img-fluid my-auto" src="{{ url('/images/icon/ic_arrow_right.svg') }}"
                                         alt="next">
                                </div>
                            </div>
                        </div>
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
