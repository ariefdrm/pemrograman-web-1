<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
   <nav class="navbar navbar-expand-lg" style="background-color: rgb(65, 179, 255)">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">UNAMA</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Tentang</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Fakultas
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Ilmu Komputer</a></li>
            <li><a class="dropdown-item" href="#">Ilmu Manajemen & Bisnis</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>  
        </li>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Akademik
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Data Mahasiswa</a></li>
            <li><a class="dropdown-item" href="#">Data dosen</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>  
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pendaftaran</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Cari Data" aria-label="Search"/>
        <button class="btn btn-outline-success" type="submit">CariData</button>
      </form>
    </div>
  </div>
</nav>
{{-- End Navbar --}}
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card">
                        <div class="card-header">
                            gedung unama
                        </div>
                        <div class="card-body">
                             <ul class="list-group list-group-flush">
                                <li class="list-group-item"><img src="assets/images/g1.jpg" class="img-fluid" alt="gedung unama"></li>
                            </ul>
                        </div>
                        <div class="card-footer">
                            <nav aria-label="...">
                                <ul class="pagination pagination-sm">
                                    <li class="page-item active">
                                    <a class="page-link" aria-current="page">1</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>