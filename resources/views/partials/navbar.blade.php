<ul class="navbar-nav bg-grey sidebar sidebar-dark accordion" id="accordionSidebar"
    style="width: 253px!important;">

    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/dashboard') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3 mt-5">
            <img class="img-fluid" src="{{ url('/images/logo.png') }}" width="187px" alt="logo">
        </div>
    </a>

    @if(auth()->guard('donator')->check())
        <li class="nav-item mt-5 ml-2">
            <a class="nav-link" href="{{ url('/dashboard') }}">
                <img src="{{ url('/images/icon/ic_home.svg') }}" class="img-fluid" width="24px" alt="home">
                <span
                    class="text-grey hover-underline-animation {{ ($active === "dashboard") ? 'active' : '' }}">Dashboard</span></a>
        </li>

        <li class="nav-item ml-2">
            <a class="nav-link" href="{{ url('/location') }}">
                <img src="{{ url('/images/icon/ic_compass.svg') }}" class="img-fluid" width="22px" alt="lokasi">
                <span
                    class="text-grey hover-underline-animation {{ ($active === "location") ? 'active' : '' }}">Lokasi</span></a>
        </li>

        <li class="nav-item ml-2">
            <a class="nav-link" href="{{ url('/event') }}">
                <img src="{{ url('/images/icon/ic_calender.svg') }}" class="img-fluid" width="18px"
                     style="margin-left: 2px;"
                     alt="acara">
                <span class="text-grey hover-underline-animation {{ ($active === "event") ? 'active' : '' }}"
                      style="margin-left: 3px;">Acara</span></a>
        </li>

        <li class="nav-item ml-2">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
               aria-expanded="true" aria-controls="collapseTwo">
                <img src="{{ url('/images/icon/ic_drop.svg') }}" class="img-fluid" width="24px" alt="donor">
                <span
                    class="text-grey hover-underline-animation {{ ($active === "donor") ? 'active' : '' }}">Donor</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Jenis Layanan</h6>
                    <a class="collapse-item" href="{{ url('/donor') }}">Donor Plasma</a>
                    <a class="collapse-item" href="{{ url('/submission') }}">Request Plasma</a>
                </div>
            </div>
        </li>

        <li class="nav-item ml-2">
            <a class="nav-link" href="{{ url('/article') }}">
                <img src="{{ url('/images/icon/ic_document.svg') }}" class="img-fluid" width="24px" alt="artikel">
                <span
                    class="text-grey hover-underline-animation {{ ($active === "article") ? 'active' : '' }}">Artikel</span></a>
        </li>

    @elseif(auth()->guard('employee')->check())
        <li class="nav-item mt-5 ml-2">
            <a class="nav-link" href="{{ url('/_dashboard') }}">
                <img src="{{ url('/images/icon/ic_home.svg') }}" class="img-fluid" width="24px" alt="home">
                <span
                    class="text-grey hover-underline-animation {{ ($active === "dashboard") ? 'active' : '' }}">Dashboard</span></a>
        </li>

        <li class="nav-item ml-2">
            <a class="nav-link" href="{{ url('/_bank') }}">
                <img src="{{ url('/images/icon/ic_drop.svg') }}" class="img-fluid" width="24px" alt="home">
                <span
                    class="text-grey hover-underline-animation {{ ($active === "bank") ? 'active' : '' }}">Kelola Bank Darah</span></a>
        </li>

        <li class="nav-item ml-2">
            <a class="nav-link" href="{{ url('/_donor') }}">
                <img src="{{ url('/images/icon/ic_manage.svg') }}" class="img-fluid ml-1" width="20px" alt="notifikasi">
                <span class="text-grey hover-underline-animation {{ ($active === "donor") ? 'active' : '' }}">Kelola Donor Plasma</span></a>
        </li>

        <li class="nav-item ml-2">
            <a class="nav-link" href="{{ url('/_submission') }}">
                <img src="{{ url('/images/icon/ic_manage.svg') }}" class="img-fluid ml-1" width="20px" alt="notifikasi">
                <span class="text-grey hover-underline-animation {{ ($active === "submission") ? 'active' : '' }}">Kelola Request Plasma</span></a>
        </li>

        <li class="nav-item ml-2">
            <a class="nav-link" href="{{ url('/_event') }}">
                <img src="{{ url('/images/icon/ic_event_admin.svg') }}" class="img-fluid ml-1" width="20px"
                     alt="notifikasi">
                <span class="text-grey hover-underline-animation {{ ($active === "event") ? 'active' : '' }}">Kelola Acara</span></a>
        </li>
    @endif

    <li class="nav-item m-2">

        <span class="text-grey text-red" style="margin-left: 20px;font-weight: 500;">SYSTEM</span>

    </li>

    @if(auth()->guard('donator')->check())
        <li class="nav-item ml-2">

            <a class="nav-link" href="{{ url('/account') }}">
                <img src="{{ url('/images/icon/ic_profile.svg') }}" class="img-fluid" width="24px" alt="akun">
                <span
                    class="text-grey hover-underline-animation {{ ($active === "account") ? 'active' : '' }}">Akun</span></a>
        </li>


        <li class="nav-item ml-2">
            <a class="nav-link" href="{{ url('/faq') }}">
                <img src="{{ url('/images/icon/ic_question.svg') }}" class="img-fluid" width="22px" alt="faq">
                <span
                    class="text-grey hover-underline-animation {{ ($active === "faq") ? 'active' : '' }}">FAQ</span></a>
        </li>

    @elseif(auth()->guard('employee')->check())
        <li class="nav-item ml-2">
            <a class="nav-link" href="{{ url('/_account') }}">
                <img src="{{ url('/images/icon/ic_profile.svg') }}" class="img-fluid" width="24px" alt="akun">
                <span
                    class="text-grey hover-underline-animation {{ ($active === "account") ? 'active' : '' }}">Akun</span></a>
        </li>

        <li class="nav-item ml-2">
            <a class="nav-link" href="{{ url('/_faq') }}">
                <img src="{{ url('/images/icon/ic_question.svg') }}" class="img-fluid" width="22px" alt="faq">
                <span
                    class="text-grey hover-underline-animation {{ ($active === "faq") ? 'active' : '' }}">FAQ</span></a>
        </li>

    @endif


    <li class="nav-item ml-2">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
            <img src="{{ url('/images/icon/ic_logout.svg') }}" class="img-fluid" width="24px" alt="logout">
            <span class="text-grey hover-underline-animation {{ ($active === "logout") ? 'active' : '' }}">Keluar</span></a>
    </li>

    <!-- Modal -->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-title1 text-blue" id="exampleModalLabel">Anda yakin ingin logout ?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-footer">
                    <form action="{{ url('/logout') }}" method="POST">
                        @csrf
                        <button type="button" class="btn btn-secondary text-body1 mx-2" data-dismiss="modal">Close
                        </button>
                        <button type="submit" class="btn btn-danger text-body1 mx-2">Keluar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</ul>
