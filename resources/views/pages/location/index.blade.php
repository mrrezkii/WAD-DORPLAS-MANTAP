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
                    <a class="text-decoration-none" data-toggle="modal" data-target="#exampleModal" href="#">
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
                    <a class="text-decoration-none" data-toggle="modal" data-target="#exampleModal" href="#">
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
                    <a class="text-decoration-none" data-toggle="modal" data-target="#exampleModal" href="#">
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
                <div id="map" class="map rounded vh-100"></div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-title1 text-blue text-truncate" id="exampleModalLabel">Informasi
                        Detail</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="d-flex flex-column">
                        <small class="text-center mx-auto text-grey">Informasi Bank Darah</small>
                        <div class="container">
                            <div class="row w-75 mx-auto mt-2">
                                <div class="col-md-6 col-sm-12 mb-3">
                                    <div class="bg-red bank-blood">
                                        <div class="row">
                                            <div class="col-4 m-auto">
                                                <p class="text-center text-white text-title1 pl-2">A</p>
                                            </div>
                                            <div class="col-8">
                                                <div class="row">
                                                    <div class="col-12 bg-red-2 bank-blood-rhesus-top text-white pt-3">
                                                        <p class="text-truncate">
                                                            <i class="fas fa-plus-circle"></i>
                                                            <span class="">1202190044</span>
                                                        </p>
                                                    </div>
                                                    <div
                                                        class="col-12 col-12 bg-red-2 bank-blood-rhesus-bottom text-white text-white pt-3">
                                                        <p class="text-truncate">
                                                            <i class="fas fa-minus-circle"></i>
                                                            <span>12021</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 mb-3">
                                    <div class="bg-red bank-blood">
                                        <div class="row">
                                            <div class="col-4 m-auto">
                                                <p class="text-center text-white text-title1 pl-2">AB</p>
                                            </div>
                                            <div class="col-8">
                                                <div class="row">
                                                    <div class="col-12 bg-red-2 bank-blood-rhesus-top text-white pt-3">
                                                        <p class="text-truncate">
                                                            <i class="fas fa-plus-circle"></i>
                                                            <span class="">1202190044</span>
                                                        </p>
                                                    </div>
                                                    <div
                                                        class="col-12 col-12 bg-red-2 bank-blood-rhesus-bottom text-white text-white pt-3">
                                                        <p class="text-truncate">
                                                            <i class="fas fa-minus-circle"></i>
                                                            <span>12021</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 mb-3">
                                    <div class="bg-red bank-blood">
                                        <div class="row">
                                            <div class="col-4 m-auto">
                                                <p class="text-center text-white text-title1 pl-2">B</p>
                                            </div>
                                            <div class="col-8">
                                                <div class="row">
                                                    <div class="col-12 bg-red-2 bank-blood-rhesus-top text-white pt-3">
                                                        <p class="text-truncate">
                                                            <i class="fas fa-plus-circle"></i>
                                                            <span class="">1202190044</span>
                                                        </p>
                                                    </div>
                                                    <div
                                                        class="col-12 col-12 bg-red-2 bank-blood-rhesus-bottom text-white text-white pt-3">
                                                        <p class="text-truncate">
                                                            <i class="fas fa-minus-circle"></i>
                                                            <span>12021</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 mb-3">
                                    <div class="bg-red bank-blood">
                                        <div class="row">
                                            <div class="col-4 m-auto">
                                                <p class="text-center text-white text-title1 pl-2">O</p>
                                            </div>
                                            <div class="col-8">
                                                <div class="row">
                                                    <div class="col-12 bg-red-2 bank-blood-rhesus-top text-white pt-3">
                                                        <p class="text-truncate">
                                                            <i class="fas fa-plus-circle"></i>
                                                            <span class="">1202190044</span>
                                                        </p>

                                                    </div>
                                                    <div
                                                        class="col-12 col-12 bg-red-2 bank-blood-rhesus-bottom text-white text-white pt-3">
                                                        <p class="text-truncate">
                                                            <i class="fas fa-minus-circle"></i>
                                                            <span>12021</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <small>Lokasi</small>
                    <p class="ellipsis-1 text-blue text-title1">Kantor PMI Kota Kediri</p>
                    <small class="mt-2">Alamat</small>
                    <p class="ellipsis-2 text-blue text-title1">Jl. Mayor Bismo No.15, Mojoroto, Kec. Mojoroto, Kota
                        Kediri, Jawa Timur 64121</p>
                    <small class="mt-5">Kontak</small>
                    <p class="ellipsis-1 text-blue text-title1">085608845319</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn bg-red text-white">Donor Disini</button>
                </div>
            </div>
        </div>
@endsection
@section('custom-script')
            <script src='https://api.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.js'></script>
            <script src="/js/mapbox.js"></script>
@endsection
