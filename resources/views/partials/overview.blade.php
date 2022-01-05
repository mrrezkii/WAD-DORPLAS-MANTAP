<div class="col-12 mt-4 pb-4 border-bottom">
    <div class="row">
        <div class="col-md-4 col-sm-12">
            <a href="#" class="text-decoration-none">
                <div class="row">
                    <div class="col-md-3">
                        <img src="{{ url('/images/avatar.jpg') }}" class="rounded-circle" width="70px"
                             height="70px" alt="avatar">
                    </div>
                    <div class="col-md-9">
                        <p class="text-title1 text-blue mb-1 ml-3">Muhammad Rezki Ananda</p>
                        <img src="{{ url('/images/icon/ic_star.svg') }}" alt="point" class="img-fluid ml-3">
                        <span class="text-body1 text-blue">255</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 col-sm-12">
            <div class="row no-gutters">
                <div class="col-3 m-0 p-0">
                    <img src="{{ url('/images/icon/ic_drop_white.svg') }}" height="60px" alt="blood">
                </div>
                <div class="col-9">
                    <p class="text-subtitle1 text-blue">Diperbarui {{ date('d/m/Y', time()) }}</p>
                    <p class="text-title1 text-red">Stok Plasma</p>
                    <p class="text-body1 text-blue">{{ $stockPlasma }} Kantung</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-12 ">
            <p class="text-title1 text-red mt-2">Permintaan</p>
            <img src="{{ url('/images/icon/ic_search.svg') }}" alt="search" width="17px">
            <span class="text-body1 text-blue">{{ $totalRequest }}</span>
        </div>
    </div>
</div>
