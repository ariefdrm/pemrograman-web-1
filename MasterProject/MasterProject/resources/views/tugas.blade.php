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
            <a class="navbar-brand text-light" href="#">Beranda</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Tentang Unama</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Fakultas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Pasca Sarjana</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Akademik</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Pendaftaran</a>
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
                <h1>GAMBAR GEDUNG UNAMA Jambi </h1>
            </div>
            <div class="card-body">
                <img id="mainImage" src="assets/images/g2.png" class="img-fluid" alt="...">
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
</body>

</html>
