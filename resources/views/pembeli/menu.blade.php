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
<body>
<header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="/pembeli/home">
                    <img src="../Image/LOGO RPL.png" width="80" height="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="/pembeli/menu">Hasil Panen</a>
                    </li>
                    <li class="nav-item ml-2">
                        <a class="nav-link active" href="{{ url('/artikel') }}">Artikel</a>
                    </li>
                    </ul>
                </div>
                <div class="dropdown">
                <button class="btn btn-book-a-table dropdown-toggle"  type="button" data-bs-toggle="dropdown" aria-expanded="false">{{ Auth::user()->nama }}</button></a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/pembeli/profile">Profile</a></li>
                  <li><a class="dropdown-item" href="/pembeli/transaksi">Transaction</a></li>
                  <li><a class="dropdown-item" href="/logout">Log out</a></li>
                </ul>
              </div>
            </div>
        </nav>
    </header>
      <section class="sec" id = "tentang">
      <div class="row">
      <center><h1>Hasil Panen Terbaik Kami</h1><br><br></center>
        @foreach ($list as $l)
            
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                    <img class="card-img-top"src="{{ asset('storage/Panen/' . $l->image) }}" alt="Gambar" class="img-fluid" style="width: 200px; height: 150px;">

                        <div class="card-body">
                            <h5 class="card-title">{{$l -> name}}</h5>
                            <p class="card-text">{{$l -> detail}}</p>
                            <h3 class="card-title">Rp {{number_format($l -> harga)}}</h3>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="/checkout/{{$l -> id}}" class="btn btn-sm btn-outline-success">Beli Langsung</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        @endforeach
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

</body>
</html>