@extends('layouts.main')
@section('custom-head')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
@endsection
@section('container')
    <div class="row no-gutters">
        <div class="col-6 mt-5">
            <div class="input-wrapper mb-5">
                <input type="search" class="input-search rounded" placeholder="Cari Acara Lainnya">

                <svg xmlns="http://www.w3.org/2000/svg" class="input-icon" viewBox="0 0 20 20"
                     fill="currentColor">
                    <path fill-rule="evenodd"
                          d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                          clip-rule="evenodd"/>
                </svg>
            </div>
            <div class="list-event card py-2 mb-3" style="width: 465px;">
                <div class="row">
                    <div class="col-8">
                        <p style="max-lines: 2;" class="text-title1 text-blue ml-2">Dibutuhkan Segera
                            Puluhan Stok Plasma Konvalen di wilayah Piltover!</p>
                        <span class="text-primary text-body1 mt-2 ml-2">Merdeka</span>
                        <span class="text-secondary text-body1 ml-2">&bull;</span>
                        <span class="text-secondary text-body1 ml-2">20-10-2021</span>
                    </div>
                    <div class="col-4">
                        <img class="img-fluid rounded-right"
                             src="https://statik.tempo.co/data/2020/03/05/id_920662/920662_720.jpg"
                             width="130px" alt="event">
                    </div>
                </div>
            </div>
            <div class="list-event card py-2 mb-3" style="width: 465px;">
                <div class="row">
                    <div class="col-8">
                        <p style="max-lines: 2;" class="text-title1 text-blue ml-2">Dibutuhkan Segera
                            Puluhan Stok Plasma Konvalen di wilayah Piltover!</p>
                        <span class="text-primary text-body1 mt-2 ml-2">Merdeka</span>
                        <span class="text-secondary text-body1 ml-2">&bull;</span>
                        <span class="text-secondary text-body1 ml-2">20-10-2021</span>
                    </div>
                    <div class="col-4">
                        <img class="img-fluid rounded-right"
                             src="https://statik.tempo.co/data/2020/03/05/id_920662/920662_720.jpg"
                             width="130px" alt="event">
                    </div>
                </div>
            </div>
            <div class="list-event card py-2 mb-3" style="width: 465px;">
                <div class="row">
                    <div class="col-8">
                        <p style="max-lines: 2;" class="text-title1 text-blue ml-2">Dibutuhkan Segera
                            Puluhan Stok Plasma Konvalen di wilayah Piltover!</p>
                        <span class="text-primary text-body1 mt-2 ml-2">Merdeka</span>
                        <span class="text-secondary text-body1 ml-2">&bull;</span>
                        <span class="text-secondary text-body1 ml-2">20-10-2021</span>
                    </div>
                    <div class="col-4">
                        <img class="img-fluid rounded-right"
                             src="https://statik.tempo.co/data/2020/03/05/id_920662/920662_720.jpg"
                             width="130px" alt="event">
                    </div>
                </div>
            </div>
            <div class="list-event card py-2 mb-3" style="width: 465px;">
                <div class="row">
                    <div class="col-8">
                        <p style="max-lines: 2;" class="text-title1 text-blue ml-2">Dibutuhkan Segera
                            Puluhan Stok Plasma Konvalen di wilayah Piltover!</p>
                        <span class="text-primary text-body1 mt-2 ml-2">Merdeka</span>
                        <span class="text-secondary text-body1 ml-2">&bull;</span>
                        <span class="text-secondary text-body1 ml-2">20-10-2021</span>
                    </div>
                    <div class="col-4">
                        <img class="img-fluid rounded-right"
                             src="https://statik.tempo.co/data/2020/03/05/id_920662/920662_720.jpg"
                             width="130px" alt="event">
                    </div>
                </div>
            </div>
            <div class="list-event card py-2 mb-3" style="width: 465px;">
                <div class="row">
                    <div class="col-8">
                        <p style="max-lines: 2;" class="text-title1 text-blue ml-2">Dibutuhkan Segera
                            Puluhan Stok Plasma Konvalen di wilayah Piltover!</p>
                        <span class="text-primary text-body1 mt-2 ml-2">Merdeka</span>
                        <span class="text-secondary text-body1 ml-2">&bull;</span>
                        <span class="text-secondary text-body1 ml-2">20-10-2021</span>
                    </div>
                    <div class="col-4">
                        <img class="img-fluid rounded-right"
                             src="https://statik.tempo.co/data/2020/03/05/id_920662/920662_720.jpg"
                             width="130px" alt="event">
                    </div>
                </div>
            </div>

        </div>
        <div class="col-6 mt-5">
            <div class="d-flex flex-column">
                <img class="img-fluid mt-5 pt-1 pb-4" src="{{ url('images/doctor.svg') }}" alt="Dokter">
                <p class="text-left m-auto text-blue text-title1 pb-2"
                   style="font-size: 40px;line-height: 40px;font-family: 'Montserrat', sans-serif;">
                    Carilah Event Donor Di Sekitar Anda</p>
                <p class="text-left m-auto text-secondary text-title1">Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit. Tristique quis consequat feugiat luctus mauris enim mi.
                </p>
            </div>
        </div>
    </div>
@endsection
