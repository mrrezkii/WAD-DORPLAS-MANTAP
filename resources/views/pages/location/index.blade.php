@extends('layouts.main')
@section('custom-head')
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.css' rel='stylesheet'/>
@endsection
@section('container')
    <div class="container-fluid">
        <div class="row no-gutters">
            <div class="col-md-6 col-sm-12 mt-5">
                <div class="input-wrapper">
                    <input type="search" class="input-search rounded" placeholder="Cari PMI Terdekat">

                    <svg xmlns="http://www.w3.org/2000/svg" class="input-icon" viewBox="0 0 20 20"
                         fill="currentColor">
                        <path fill-rule="evenodd"
                              d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                              clip-rule="evenodd"/>
                    </svg>
                </div>
                <div class="list-location mt-5">
                    <a href="#" class="text-decoration-none">
                        <div class="row mb-3">
                            <div class="col-1 d-flex">
                                <img class="m-3 m-auto" src="images/icon/ic_pin_location.svg" alt="location"
                                     height="32px">
                            </div>
                            <div class="col-8">
                                <p class="text-title1 text-blue" style="line-height: 20px;">Kantor PMI Kota
                                    Kediri</p>
                                <p class="text-body2 text-blue mt-1" style="line-height: 20px;">Jl. Mayor Bismo
                                    No. 15 Mojoroto</p>
                            </div>
                            <div class="col-2 d-flex">
                                <p class="m-auto text-body1 text-blue">0.5 KM</p>
                            </div>
                            <div class="col-12">
                                <hr>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="text-decoration-none">
                        <div class="row mb-3">
                            <div class="col-1 d-flex">
                                <img class="m-3 m-auto" src="images/icon/ic_pin_location.svg" alt="location"
                                     height="32px">
                            </div>
                            <div class="col-8">
                                <p class="text-title1 text-blue" style="line-height: 20px;">Kantor PMI Kota
                                    Kediri</p>
                                <p class="text-body2 text-blue mt-1" style="line-height: 20px;">Jl. Mayor Bismo
                                    No. 15 Mojoroto</p>
                            </div>
                            <div class="col-2 d-flex">
                                <p class="m-auto text-body1 text-blue">0.5 KM</p>
                            </div>
                            <div class="col-12">
                                <hr>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="text-decoration-none">
                        <div class="row mb-3">
                            <div class="col-1 d-flex">
                                <img class="m-3 m-auto" src="images/icon/ic_pin_location.svg" alt="location"
                                     height="32px">
                            </div>
                            <div class="col-8">
                                <p class="text-title1 text-blue" style="line-height: 20px;">Kantor PMI Kota
                                    Kediri</p>
                                <p class="text-body2 text-blue mt-1" style="line-height: 20px;">Jl. Mayor Bismo
                                    No. 15 Mojoroto</p>
                            </div>
                            <div class="col-2 d-flex">
                                <p class="m-auto text-body1 text-blue">0.5 KM</p>
                            </div>
                            <div class="col-12">
                                <hr>
                            </div>
                        </div>
                    </a>


                </div>
            </div>
            <div class="col-md-6 col-sm-12 mt-5">
                <div id="map" class="map rounded"></div>
            </div>
        </div>
    </div>
@endsection
@section('custom-script')
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.js'></script>
    <script src="js/mapbox.js"></script>
@endsection
