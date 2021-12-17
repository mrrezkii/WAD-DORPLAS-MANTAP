<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-dark {{ ($active === "home") ? 'active fw-bold' : '' }}" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark {{ ($active === "donators") ? 'active fw-bold' : '' }}" href="/donator">Pendonor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark {{ ($active === "institutions") ? 'active fw-bold' : '' }}" href="/institution">Institusi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark {{ ($active === "donor-notes") ? 'active fw-bold' : '' }}" href="/donor-notes">Donor</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
