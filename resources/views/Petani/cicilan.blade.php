<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <title>Farmlogs</title>
    <link rel="icon" href="Image/LOGO RPL .png" type="image/icon type">
    <link rel="stylesheet" href="../Asset/home.css">
</head>

    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="/petani/home">
                    <img src="../Image/LOGO_RPL_-removebg-preview.png" width="80" height="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="#tentang">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#layanan">Layanan Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#mereka">Perjalanan Mereka</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#seputar">Seputar Farmlogs</a>
                    </li>
                    </ul>
                </div>
                <div class="dropdown">
                <button class="btn btn-book-a-table dropdown-toggle"  type="button" data-bs-toggle="dropdown" aria-expanded="false">{{ Auth::user()->nama }}</button></a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/pembeli/profile">Profile</a></li>
                  <li><a class="dropdown-item" href="/transaction">Transaction</a></li>
                  <li><a class="dropdown-item" href="/petani/inputpanen">Input Panen</a></li>
                  <li><a class="dropdown-item" href="/logout">Log out</a></li>
                </ul>
              </div>
            </div>
            </div>
        </nav>
    </header>

<body>

    <div class="w-10/12 ml-3 bg-white border border-gray-200 rounded-2xl shadow-md max-h-150vh overflow-auto p-4">
        <div class="row">
            <p class="col text-blueDark text-xl" style="font-size: 28px;">Peminjaman Dana</p>
            @if ($errors->any())
            <div class="flex w-full p-4 mb-4 text-sm text-white bg-red-700 rounded-lg self-start" role="alert">
                <ul class="mt-1.5 text-blue-700 list-disc list-inside">
                    {!! implode('', $errors->all('<li style="color: #373737;">:message</li>')) !!}
                </ul>
            </div>
            @endif
        </div>
        <div class="block w-full p-4 bg-white border border-gray-200 rounded-lg shadow-md mt-4">
            <div class="w-full flex justify-center">
                <form action="" method="POST" class="w-full" enctype="multipart/form-data">
                    @csrf
                    <div class="row text-left">
                        <div class="col-sm-12 mb-3">
                            <div class="before" id="before">
                                <label class="form-label">Foto Data Diri (KTP)</label>
                                <input type="file" onchange="loadFile(this)" id="ktp" name="ktp" class="form-control">                                
                            </div>
                        </div>
                        <div class="col-sm-12 mb-3">
                            <label for="name" class="mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Petani</label>
                            <input id="petani" name="petani" type="text" class="form-control" placeholder="">
                        </div>
                        <div class="col-sm-12 mb-3">

                            <label for="name" class="mb-2 text-sm font-medium text-gray-900 dark:text-white">Nominal Dana</label>
                            <input id="harga" name="harga" type="text" class="form-control" placeholder="Masukkan nominal dana yang ingin dipinjam">
                        </div>
                        <div class="col-sm-12 mb-3">
                            <label for="name" class="mb-2 text-sm font-medium text-gray-900 dark:text-white">Tujuan Peminjaman</label>
                            <input id="tujuan" name="tujuan" type="text" class="form-control" placeholder="Contoh : Untuk membeli bibit cabai">
                        </div>                        
                        <div class="col-sm-12 mb-3"><p>Durasi Cicilan</p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="cicilan" id="3bulan" value="3bulan">
                                <label class="form-check-label" for="inlineRadio2">3 Bulan</label>                                
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="cicilan" id="6bulan" value="6bulan">
                                <label class="form-check-label" for="inlineRadio2">6 Bulan</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="cicilan" id="12bulan" value="12bulan">
                                <label class="form-check-label" for="inlineRadio2">12 Bulan</label>                                
                            </div>
                        </div>                        
                        <div class="col-sm-12 mb-3">
                            <div class="before" id="before">
                                <label class="form-label">Foto Lahan Tani</label>
                                <input type="file" onchange="loadFile(this)" id="lahan" name="lahan" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-12 center text-center">
                            <button type="submit" class="btn btn-reg mx-2 btn-success">Konfirmasi</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
    </div>

    <div class="container">
        <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
          <div class="col mb-3">
            <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
              <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
            </a>
            <p class="text-muted">Farmlogs &copy; 2022</p>
          </div>
      
          <div class="col mb-3">
      
          </div>
      
          <div class="col mb-3">
            <h5>App</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Logs</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
            </ul>
          </div>
      
          <div class="col mb-3">
            <h5>Community</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About us</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Contact Us</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">History</a></li>
            </ul>
          </div>
      
          <div class="col mb-3">
            <h5>Company</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Domain</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Inc</a></li>
            </ul>
          </div>
        </footer>
      </div>
      
      <div class="b-example-divider"></div>
</body>
</html>