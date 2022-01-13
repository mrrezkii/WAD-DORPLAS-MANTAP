@extends('layouts.main')
@section('custom-head')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
@endsection
@section('container')
    <div class="row">
        <div class="col-md-5 col-sm-12 mt-5">
            <div class="input-wrapper mb-5">
                <form action="{{ url('/event') }}" method="GET" id="search-form">
                    <input type="search" class="input-search rounded" placeholder="Cari Acara Lainnya" name="search"
                           id="query" autocomplete="off" value="{{ request('search') }}">
                </form>
                <svg xmlns="http://www.w3.org/2000/svg" class="input-icon" viewBox="0 0 20 20"
                     fill="currentColor">
                    <path fill-rule="evenodd"
                          d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                          clip-rule="evenodd"/>
                </svg>
            </div>
            @foreach($datas as $data)
                <a href="#" class="text-decoration-none" data-toggle="modal" data-target="#detailModal{{$loop->index}}">
                    <div class="list-event card py-2 mb-3" style="max-width: 465px;">
                        <div class="row">
                            <div class="col-8">
                                <p style="max-lines: 2;"
                                   class="text-title1 text-blue ml-2">{{ $data->name_donor_events }}</p>
                                <p>
                                    <span class="text-primary text-body1 mt-2 ml-2">Dorplas</span>
                                    <span class="text-secondary text-body1 ml-2">&bull;</span>
                                    <span
                                        class="text-secondary text-body1 ml-2">{{ \Carbon\Carbon::parse( $data->start_date_donor_events)->translatedFormat('d-m-Y') }}</span>
                                </p>

                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded-right"
                                     src="{{ $data->thumbnail_donor_events ?? url('https://source.unsplash.com/350x200?blood')}}"
                                     width="130px" alt="event">
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
        <div class="col-md-6 col-sm-12 mt-5">
            <div class="d-flex flex-column">
                <img class="img-fluid m-5 pt-1 pb-4" src="{{ url('images/doctor.svg') }}" alt="Dokter">
                <p class="text-left m-auto text-blue text-title1 pb-2"
                   style="font-size: 30px;line-height: 30px;font-family: 'Montserrat', sans-serif;">
                    Carilah Event Donor Di Sekitar Anda</p>
                <p class="text-left pt-4 m-auto text-secondary text-title1">
                    Kebaikan untuk kesehatan tidak berada pada satu keadaan.
                    Berdiri untuk kebaikan dan berlari menyelamatkan orang adalah hal yang mulia.
                    Mari temukan kebaikan dan ikuti kegiatan sebagai kontribusi kepada masyarakat.
                </p>
            </div>
        </div>
        @foreach($datas as $data)
            <div class="modal fade" id="detailModal{{ $loop->index }}" tabindex="-1" aria-labelledby="detailModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title font-weight-bold text-title1 text-blue text-truncate"
                                id="detailModalLabel">
                                Detail Acara
                            </h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="d-flex flex-column">
                                @php
                                    $startDate = \Carbon\Carbon::parse($data->start_date_donor_events);
                                    $endDate = \Carbon\Carbon::parse($data->end_date_donor_events);
                                    $startTime = \Carbon\Carbon::parse($data->start_time_donor_events);
                                    $endTime = \Carbon\Carbon::parse($data->end_time_donor_events);
                                @endphp
                                <img class="img-fluid rounded"
                                     src="{{ $data->thumbnail_donor_events ?? url('https://source.unsplash.com/350x200?blood') }}"
                                     alt="image">
                                <p class="ellipsis-2 text-blue text-title1 mt-2">{{ $data->name_donor_events }}</p>
                                <p>
                                    <span class="text-primary text-body1 mt-2">Dorplas</span>
                                    <span class="text-secondary text-body1">&bull;</span>
                                    <span
                                        class="text-secondary text-body1">{{ $data->institutions->name_institutions }}</span>
                                </p>
                                <p>
                                    <img src="{{ url('/images/icon/ic_star.svg') }}" alt="point" width="20px">
                                    <span class="text-title1 text-blue">{{ $data->point_donor_events }}</span>
                                </p>
                                <p class="text-blue text-title1 mt-2">Jadwal Acara</p>
                                <table class="ml-4 w-75 my-2">
                                    <tr>
                                        <td>
                                            <svg width="18" height="20" viewBox="0 0 18 20" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <rect width="14.4643" height="8.86719"
                                                      transform="matrix(-1 0 0 1 16.0714 9.25781)"
                                                      fill="#FFF"/>
                                                <path
                                                    d="M18 18.125C18 19.1602 17.1362 20 16.0714 20H1.92857C0.86384 20 0 19.1602 0 18.125V7.5H18V18.125ZM5.14286 10.4688C5.14286 10.2109 4.92589 10 4.66071 10H3.05357C2.78839 10 2.57143 10.2109 2.57143 10.4688V12.0312C2.57143 12.2891 2.78839 12.5 3.05357 12.5H4.66071C4.92589 12.5 5.14286 12.2891 5.14286 12.0312V10.4688ZM5.14286 15.4688C5.14286 15.2109 4.92589 15 4.66071 15H3.05357C2.78839 15 2.57143 15.2109 2.57143 15.4688V17.0312C2.57143 17.2891 2.78839 17.5 3.05357 17.5H4.66071C4.92589 17.5 5.14286 17.2891 5.14286 17.0312V15.4688ZM10.2857 10.4688C10.2857 10.2109 10.0687 10 9.80357 10H8.19643C7.93125 10 7.71429 10.2109 7.71429 10.4688V12.0312C7.71429 12.2891 7.93125 12.5 8.19643 12.5H9.80357C10.0687 12.5 10.2857 12.2891 10.2857 12.0312V10.4688ZM10.2857 15.4688C10.2857 15.2109 10.0687 15 9.80357 15H8.19643C7.93125 15 7.71429 15.2109 7.71429 15.4688V17.0312C7.71429 17.2891 7.93125 17.5 8.19643 17.5H9.80357C10.0687 17.5 10.2857 17.2891 10.2857 17.0312V15.4688ZM15.4286 10.4688C15.4286 10.2109 15.2116 10 14.9464 10H13.3393C13.0741 10 12.8571 10.2109 12.8571 10.4688V12.0312C12.8571 12.2891 13.0741 12.5 13.3393 12.5H14.9464C15.2116 12.5 15.4286 12.2891 15.4286 12.0312V10.4688ZM15.4286 15.4688C15.4286 15.2109 15.2116 15 14.9464 15H13.3393C13.0741 15 12.8571 15.2109 12.8571 15.4688V17.0312C12.8571 17.2891 13.0741 17.5 13.3393 17.5H14.9464C15.2116 17.5 15.4286 17.2891 15.4286 17.0312V15.4688ZM1.92857 2.5H3.85714V0.625C3.85714 0.28125 4.14643 0 4.5 0H5.78571C6.13929 0 6.42857 0.28125 6.42857 0.625V2.5H11.5714V0.625C11.5714 0.28125 11.8607 0 12.2143 0H13.5C13.8536 0 14.1429 0.28125 14.1429 0.625V2.5H16.0714C17.1362 2.5 18 3.33984 18 4.375V6.25H0V4.375C0 3.33984 0.86384 2.5 1.92857 2.5Z"
                                                    fill="#0CB569"/>
                                                <path
                                                    d="M3.85714 2.5H1.92857C0.86384 2.5 0 3.33984 0 4.375V6.25H18V4.375C18 3.33984 17.1362 2.5 16.0714 2.5H14.1429V0.625C14.1429 0.28125 13.8536 0 13.5 0H12.2143C11.8607 0 11.5714 0.28125 11.5714 0.625V2.5H6.42857V0.625C6.42857 0.28125 6.13929 0 5.78571 0H4.5C4.14643 0 3.85714 0.28125 3.85714 0.625V2.5Z"
                                                    fill="#0CB569"/>
                                            </svg>
                                        </td>
                                        <td class="text-grey text-body1">Tanggal Mulai</td>
                                        <td class="text-grey text-body1">: &nbsp;</td>
                                        <td class="text-grey text-body1">{{ $startDate->translatedFormat('D, d-m-y') }}</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <svg width="18" height="20" viewBox="0 0 18 20" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <rect width="14.4643" height="8.86719"
                                                      transform="matrix(-1 0 0 1 16.0714 9.25781)"
                                                      fill="#FFF"/>
                                                <path
                                                    d="M18 18.125C18 19.1602 17.1362 20 16.0714 20H1.92857C0.86384 20 0 19.1602 0 18.125V7.5H18V18.125ZM5.14286 10.4688C5.14286 10.2109 4.92589 10 4.66071 10H3.05357C2.78839 10 2.57143 10.2109 2.57143 10.4688V12.0312C2.57143 12.2891 2.78839 12.5 3.05357 12.5H4.66071C4.92589 12.5 5.14286 12.2891 5.14286 12.0312V10.4688ZM5.14286 15.4688C5.14286 15.2109 4.92589 15 4.66071 15H3.05357C2.78839 15 2.57143 15.2109 2.57143 15.4688V17.0312C2.57143 17.2891 2.78839 17.5 3.05357 17.5H4.66071C4.92589 17.5 5.14286 17.2891 5.14286 17.0312V15.4688ZM10.2857 10.4688C10.2857 10.2109 10.0687 10 9.80357 10H8.19643C7.93125 10 7.71429 10.2109 7.71429 10.4688V12.0312C7.71429 12.2891 7.93125 12.5 8.19643 12.5H9.80357C10.0687 12.5 10.2857 12.2891 10.2857 12.0312V10.4688ZM10.2857 15.4688C10.2857 15.2109 10.0687 15 9.80357 15H8.19643C7.93125 15 7.71429 15.2109 7.71429 15.4688V17.0312C7.71429 17.2891 7.93125 17.5 8.19643 17.5H9.80357C10.0687 17.5 10.2857 17.2891 10.2857 17.0312V15.4688ZM15.4286 10.4688C15.4286 10.2109 15.2116 10 14.9464 10H13.3393C13.0741 10 12.8571 10.2109 12.8571 10.4688V12.0312C12.8571 12.2891 13.0741 12.5 13.3393 12.5H14.9464C15.2116 12.5 15.4286 12.2891 15.4286 12.0312V10.4688ZM15.4286 15.4688C15.4286 15.2109 15.2116 15 14.9464 15H13.3393C13.0741 15 12.8571 15.2109 12.8571 15.4688V17.0312C12.8571 17.2891 13.0741 17.5 13.3393 17.5H14.9464C15.2116 17.5 15.4286 17.2891 15.4286 17.0312V15.4688ZM1.92857 2.5H3.85714V0.625C3.85714 0.28125 4.14643 0 4.5 0H5.78571C6.13929 0 6.42857 0.28125 6.42857 0.625V2.5H11.5714V0.625C11.5714 0.28125 11.8607 0 12.2143 0H13.5C13.8536 0 14.1429 0.28125 14.1429 0.625V2.5H16.0714C17.1362 2.5 18 3.33984 18 4.375V6.25H0V4.375C0 3.33984 0.86384 2.5 1.92857 2.5Z"
                                                    fill="#BA181B"/>
                                                <path
                                                    d="M3.85714 2.5H1.92857C0.86384 2.5 0 3.33984 0 4.375V6.25H18V4.375C18 3.33984 17.1362 2.5 16.0714 2.5H14.1429V0.625C14.1429 0.28125 13.8536 0 13.5 0H12.2143C11.8607 0 11.5714 0.28125 11.5714 0.625V2.5H6.42857V0.625C6.42857 0.28125 6.13929 0 5.78571 0H4.5C4.14643 0 3.85714 0.28125 3.85714 0.625V2.5Z"
                                                    fill="#BA181B"/>
                                            </svg>
                                        </td>
                                        <td class="text-grey text-body1">Tanggal Selesai</td>
                                        <td class="text-grey text-body1">: &nbsp;</td>
                                        <td class="text-grey text-body1">{{ $endDate->translatedFormat('D, d-m-y') }}</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <i class="fas fa-clock text-primary"></i>
                                        </td>
                                        <td class="text-grey text-body1">Waktu</td>
                                        <td class="text-grey text-body1">: &nbsp;</td>
                                        <td class="text-grey text-body1">{{ $startTime->translatedFormat('h:i') }}
                                            - {{ $endTime->translatedFormat('h:i') }}</td>
                                    </tr>
                                </table>
                                <p class="text-blue text-title1 mt-2">Deksripsi</p>
                                <p class="text-body1 mt-1">{{ $data->desc_donor_events }}</p>
                                <p class="text-blue text-title1 mt-2">Alamat</p>
                                <p class="text-body1 mt-1">{{ $data->institutions->address_institutions }}</p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <form action="{{ url('/donor') }}" method="GET">
                                <input type="hidden" name="event" value="{{ $data->id_donor_events }}">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn bg-red text-white">Daftar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
@section('custom-script')
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

