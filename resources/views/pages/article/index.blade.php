@extends('layouts.main')
@section('custom-head')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
@endsection
@section('container')
    <div class="row">
        <div class="col-md-6 col-sm-12 mt-5">
            <div class="card mb-3">
                <a href="{{ $datas['channel']['item'][0]['link'] }}" target="_blank" class="text-decoration-none">
                    <img class="card-img-top"
                         src="{{ $datas['channel']['item'][0]['enclosure']['@attributes']['url'] }}"
                         alt="Card image cap">
                    <div class="card-body ml-3">
                        <h5 class="card-title text-title1 text-blue"
                            style="font-size: 20px;font-family: 'Montserrat', sans-serif;">{{ $datas['channel']['item'][0]['title'] }}</h5>
                        <div class="mt-3">
                            <span class="text-body2 text-red" style="font-size: 18px;">covid19.go.id</span>
                            <span class="text-body2 text-dark" style="font-size: 18px;">&bull;</span>
                            <span class="text-body2 text-blue"
                                  style="font-size: 18px;">{{ \Carbon\Carbon::parse( $datas['channel']['item'][1]['pubDate'])->translatedFormat('D, d F Y') }}</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="card mb-3">
                <a href="{{ $datas['channel']['item'][1]['link'] }}" target="_blank" class="text-decoration-none">
                    <img class="card-img-top"
                         src="{{ $datas['channel']['item'][01]['enclosure']['@attributes']['url'] }}"
                         alt="Card image cap">
                    <div class="card-body ml-3">
                        <h5 class="card-title text-title1 text-blue"
                            style="font-size: 20px;font-family: 'Montserrat', sans-serif;">{{ $datas['channel']['item'][1]['title'] }}</h5>
                        <div class="mt-3">
                            <span class="text-body2 text-red" style="font-size: 18px;">covid19.go.id</span>
                            <span class="text-body2 text-dark" style="font-size: 18px;">&bull;</span>
                            <span class="text-body2 text-blue"
                                  style="font-size: 18px;">{{ \Carbon\Carbon::parse( $datas['channel']['item'][1]['pubDate'])->translatedFormat('D, d F Y') }}</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-6 col-sm-12 mt-5">
            <h6 class="mb-4 text-title1 text-blue">Artikel Pilihan</h6>
            @foreach($datas['channel']['item'] as $data)
                @php($newDate = \Carbon\Carbon::parse($data['pubDate']))
                @if ($loop->first) @continue @endif
                @if ($loop->index == 1) @continue @endif
                <a href="{{ $data['link'] }}" target="_blank" class="text-decoration-none">
                    <div class="row no-gutters mb-3 list-article">
                        <div class="col-md-2 col-sm-12">
                            <img class="rounded img-fluid"
                                 src="{{ $data['enclosure']['@attributes']['url'] }}"
                                 alt="article">
                        </div>
                        <div class="col-md-10 col-sm-12">
                            <p class="ml-2 p-0 text-title1 text-blue" style="max-lines: 1">{{ $data['title'] }}</p>
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

        </div>
    </div>
@endsection
