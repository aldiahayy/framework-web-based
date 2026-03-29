<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">

        <a class="navbar-brand" href="#">Sistem Akademik</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dosen.index') }}">Dosen</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('mahasiswa.index') }}">Mahasiswa</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('matakuliah.index') }}">Mata Kuliah</a>
                </li>

            </ul>
        </div>

    </div>
</nav>