@extends('layouts.main')
@section('custom-head')
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.css' rel='stylesheet'/>
@endsection
@section('container')
    <div class="container-fluid">
        <div class="row no-gutters">
            <div class="col-md-6 col-sm-12 mt-5">
                <div class="input-wrapper">
                    <form action="{{ url('/location') }}" method="GET" id="search-form">
                        <input type="search" class="input-search rounded" placeholder="Cari PMI Terdekat" name="search"
                               id="query" autocomplete="off" value="{{ request('search') }}">
                    </form>
                    <svg xmlns="http://www.w3.org/2000/svg" class="input-icon" viewBox="0 0 20 20"
                         fill="currentColor">
                        <path fill-rule="evenodd"
                              d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                              clip-rule="evenodd"/>
                    </svg>
                </div>
                <div class="list-location mt-5">
                    @foreach($datas as $data)
                        <a class="text-decoration-none" data-toggle="modal" data-target="#detailModal" href="#"
                           onclick="btnDetail(
                               '{{$data->a_positive_blood_bank}}',
                               '{{$data->a_negative_blood_bank}}',
                               '{{$data->b_positive_blood_bank}}',
                               '{{$data->b_negative_blood_bank}}',
                               '{{$data->ab_positive_blood_bank}}',
                               '{{$data->ab_negative_blood_bank}}',
                               '{{$data->o_positive_blood_bank}}',
                               '{{$data->o_negative_blood_bank}}',
                               '{{$data->institutions->id_institutions}}',
                               '{{$data->institutions->name_institutions}}',
                               '{{$data->institutions->address_institutions}}',
                               '{{$data->institutions->contact_institutions}}',
                               '{{$data->institutions->email_institutions}}'
                               )">
                            <div class="row mb-3">
                                <div class="col-1 d-flex">
                                    <img class="m-3 m-auto" src="{{ url('images/icon/ic_pin_location.svg') }}"
                                         alt="location"
                                         height="32px">
                                </div>
                                <div class="col-8">
                                    <p class="text-title1 text-blue"
                                       style="line-height: 20px;">{{ $data->institutions->name_institutions }}</p>
                                    <p class="text-body2 text-blue mt-1"
                                       style="line-height: 20px;">{{ $data->institutions->address_institutions }}</p>
                                </div>
                                <div class="col-2 d-flex">
                                    <p class="m-auto text-body1 text-blue d-none">- Km</p>
                                </div>
                                <div class="col-12">
                                    <hr>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
            <div class="col-md-6 col-sm-12 mt-5">
                <div id="map" class="map rounded vh-100"></div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-title1 text-blue text-truncate" id="detailModalLabel">Informasi
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
                                                            <span id="a_positive">1202190044</span>
                                                        </p>
                                                    </div>
                                                    <div
                                                        class="col-12 col-12 bg-red-2 bank-blood-rhesus-bottom text-white text-white pt-3">
                                                        <p class="text-truncate">
                                                            <i class="fas fa-minus-circle"></i>
                                                            <span id="a_negative">1202190044</span>
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
                                                            <span id="ab_positive">1202190044</span>
                                                        </p>
                                                    </div>
                                                    <div
                                                        class="col-12 col-12 bg-red-2 bank-blood-rhesus-bottom text-white text-white pt-3">
                                                        <p class="text-truncate">
                                                            <i class="fas fa-minus-circle"></i>
                                                            <span id="ab_negative">1202190044</span>
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
                                                            <span id="b_positive">1202190044</span>
                                                        </p>
                                                    </div>
                                                    <div
                                                        class="col-12 col-12 bg-red-2 bank-blood-rhesus-bottom text-white text-white pt-3">
                                                        <p class="text-truncate">
                                                            <i class="fas fa-minus-circle"></i>
                                                            <span id="b_negative">1202190044</span>
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
                                                            <span id="o_positive">1202190044</span>
                                                        </p>

                                                    </div>
                                                    <div
                                                        class="col-12 col-12 bg-red-2 bank-blood-rhesus-bottom text-white text-white pt-3">
                                                        <p class="text-truncate">
                                                            <i class="fas fa-minus-circle"></i>
                                                            <span id="o_negative">1202190044</span>
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
                    <p id="location" class="ellipsis-1 text-blue text-title1">Kantor PMI Kota Kediri</p>
                    <small class="mt-2">Alamat</small>
                    <p id="address" class="ellipsis-2 text-blue text-title1">Jl. Mayor Bismo No.15, Mojoroto, Kec.
                        Mojoroto, Kota
                        Kediri, Jawa Timur 64121</p>
                    <small class="mt-5">Kontak</small>
                    <p id="contact" class="ellipsis-1 text-blue text-title1">085608845319</p>
                    <small class="mt-5">Email</small>
                    <p id="email" class="ellipsis-1 text-blue text-title1">muhammad.rezki.ananda@gmail.com</p>
                </div>
                <div class="modal-footer">
                    <form action="{{ url('/donor') }}" method="GET">
                        <input type="hidden" id="id_institutions" name="location">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn bg-red text-white">Donor Disini</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('custom-script')
    <script> let data = @json($datas) </script>
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.js'></script>
    <script src="/js/mapbox.js"></script>
    <script type="text/javascript">
        const modal = document.getElementById("deleteModal");
        modal.addEventListener('hidden.bs.modal', function (_) {
            document.getElementById("id").remove();
            document.getElementById("deleteModalLabel").innerText = "";
        });

        function btnDetail(a_positive, a_negative, b_positive, b_negative, ab_positive, ab_negative, o_positive, o_negative, id, name, address, contact, email) {
            document.getElementById("a_positive").innerText = a_positive;
            document.getElementById("a_negative").innerText = a_negative;
            document.getElementById("b_positive").innerText = b_positive;
            document.getElementById("b_negative").innerText = b_negative;
            document.getElementById("ab_positive").innerText = ab_positive;
            document.getElementById("ab_negative").innerText = ab_negative;
            document.getElementById("o_positive").innerText = o_positive;
            document.getElementById("o_negative").innerText = o_negative;
            document.getElementById("id_institutions").value = id;
            document.getElementById("location").innerText = name;
            document.getElementById("address").innerText = address;
            document.getElementById("contact").innerText = contact;
            document.getElementById("email").innerText = email;
        }
    </script>
    <script>
        let timeout = null;
        $("input[type='search']").keyup(function () {
            clearTimeout(timeout);
            timeout = setTimeout(() => {
                $('#search-form').submit();
            }, 1000);
        });
    </script>
@endsection
