<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ route('admin.dashboard') }}">
                    <span data-feather="home"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.mahasiswa.index') }}">
                    <span data-feather="user"></span>
                    Mahasiswa
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.jurusan.index') }}">
                    <span data-feather="feather"></span>
                    Jurusan
                </a>
            </li>
        </ul>
    </div>
</nav>
