<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="css/style.css" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand text-light" href="#">Latihan</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                          <button class="nav-link text-secondary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Tentang UNAMA
                          </button>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Sejarah</a></li>
                            <li><a class="dropdown-item" href="#">Visi Misi</a></li>
                            <li><a class="dropdown-item" href="#">Fasilitas Dan Layanan</a></li>
                            <li><a class="dropdown-item" href="#">Tupoksi</a></li>
                            <li><a class="dropdown-item" href="#">Struktur Organisasi Dan Layanan</a></li>
                          </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown dropdown-hover">
                          <button class="nav-link text-secondary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Fakultas
                          </button>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Fakultas Ilmu Komputer</a></li>
                            <li><a class="dropdown-item" href="#">Fakultas Ilmu manajemen dan bisnis</a></li>
                          </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown dropdown-hover">
                          <button class="nav-link text-secondary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Pasca Sarjana
                          </button>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">S2 -Magister Sistem Informasi</a></li>
                          </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown dropdown-hover">
                          <button class="nav-link text-secondary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Akademik
                          </button>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Panduan Aplikasi</a></li>
                            <li><a class="dropdown-item" href="#">Kalender Akademik</a></li>
                            <li><a class="dropdown-item" href="#">Buku Pedoman Akademik</a></li>
                            <li><a class="dropdown-item" href="#">Aturan Akademik</a></li>
                            <li><a class="dropdown-item" href="#">Fasilitas Dan Layanan</a></li>
                            <li><a class="dropdown-item" href="#">Informasi Beasiswa</a></li>
                            <li><a class="dropdown-item" href="#">Ekstrakulikuler</a></li>
                            <li><a class="dropdown-item" href="#">Kode Etik</a></li>
                            <li><a class="dropdown-item" href="#">SK & Sertifikat Akreditas</a></li>
                          </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="#">Pendaftaran</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Cari Data" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">CariData</button>
                </form>
            </div>
        </div>
    </nav>
    {{-- End navbar --}}

    {{-- Start content --}}
    <div class="container d-flex justify-content-center align-items-center">
        <div class="card my-3">
            <div class="card-header">
                <h1>Gambar Gedung UNAMA Jambi</h1>
            </div>
            <div class="card-body">
                <img id="mainImage" src="assets/images/g2.png" class="img-fluid" alt="gambar gedung unama jambi">
            </div>
            <div class="card-footer">
                <div class="row align-items-start">
                    <div class="col-md-2">
                        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                            <div class="btn-group me-2" role="group" aria-label="First group">
                                <button type="button" class="btn btn-secondary">1</button>
                                <button type="button" class="btn btn-dark">2</button>
                                <button type="button" class="btn btn-secondary">3</button>
                                <button type="button" class="btn btn-dark">4</button>
                                <button type="button" class="btn btn-secondary">5</button>
                            </div>
                        </div>
                    </div>
                    <div class="col ms-3">
                        <button type="button" class="btn btn-primary">Next</button>
                    </div>
                </div>
            </div>
            {{-- End content --}}

    <script>
      const dropdowns = document.querySelectorAll(".dropdown");

      dropdowns.forEach(dropdown => {
        const button = dropdown.querySelector("button");
        const menu = dropdown.querySelector(".dropdown-menu");

        dropdown.addEventListener("mouseenter", () => {
          menu.classList.add("show");
          button.setAttribute("aria-expanded", "true");
        });

        dropdown.addEventListener("mouseleave", () => {
          menu.classList.remove("show");
          button.setAttribute("aria-expanded", "false");
        });
      });
    </script>
</body>

</html>
