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
                    <li class="nav-item ml-2">
                        <a class="nav-link active" href="{{ url('/artikelpetani') }}">Artikel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#seputar">Seputar Farmlogs</a>
                    </li>
                    </ul>
                </div>
                <div class="dropdown">
                <button class="btn btn-book-a-table dropdown-toggle"  type="button" data-bs-toggle="dropdown" aria-expanded="false">Halo petani</button></a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/petani/profile">Profile</a></li>
                  <li><a class="dropdown-item" href="/transaction">Transaction</a></li>
                  <li><a class="dropdown-item" href="/petani/inputpanen">Input Panen</a></li>
                  <li><a class="dropdown-item" href="/">Log out</a></li>
                </ul>
              </div>
              </div>
                </span>
                </div>
                </div>
            </div>
            </div>
        </nav>
    </header>

      <section class="car">
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="../Image/Petani-Sukses-2020.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h1>Bangun Bisnis Anda Bersama Kami</h1>
                  <a href="/login">
                    <button class="btn btn-success me-2" type="submit">Bergabung Sekarang</button>
                  </a>
                </div>
              </div>
            </div>
        </div>
      </section>

      <section class="sec" id = "tentang">
        <div class="container">
            <div class="row">
              <div class="col">
                <h1>Kenapa Harus Bersama Kami?</h1><br>
                <h4>Memanjukan Pertanian</h4>
                <p>Farmlogs memilki visi untuk meningkatkan kemajuan sektor pertanian dengan memperbaiki sistem irigasi, memperkenalkan teknologi modern, dan memberikan bimbingan serta dukungan kepada para petani.</p>
                <a href="/login">
                    <button class="btn btn-outline-success me-2" type="submit">Learn More</button>
                </a>
                <br><br><br>
                <h4>Membantu para petani</h4>
                <p>Memberikan bantuan finansial, teknis, dan logistik kepada petani untuk membantu mereka meningkatkan produktivitas dan kesejahteraan mereka.</p>
                <a href="/login">
                    <button class="btn btn-outline-success me-2" type="submit">Learn More</button>
                </a>
              </div>
              <div class="col">
                    <div class="gamb">
                        <img src="../Image/iptehe8wajxlvdmhq1w2.jpg"  alt="" width="400px">
                    </div><br>
                    <h4>Membantu pemasaran</h4>
                    <p>Membuka akses pasar yang lebih luas dan memberikan pelatihan untuk meningkatkan keterampilan dan kualitas produk pertanian, sehingga dapat meningkatkan pendapatan dan kesejahteraan petani.</p>
                    <a href="/login">
                        <button class="btn btn-outline-success me-2" type="submit">Learn More</button>
                    </a>
              </div>
            </div>
      </section>

      <section class="sec" id = "layanan">
            <div class="j3">
                <h1 se>Layanan Kami</h1>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                <div class="card">
                    <img src="../Image/panenid.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Penjualan Hasil Panen</h5>
                    <p class="card-text">Kami memberikan kemudahan bagi para petani diluar sana, yang memiliki kesulitan akses ke pasar untuk menjual hasil pertanian mereka</p>
                    </div>
                </div>
                </div>
                <div class="col">
                <div class="card">
                    <img src="../Image/5ec7535eaea4c.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Peminjaman Dana</h5>
                    <p class="card-text">Kami memberikan bantuan dana bagi para petani yang kekurangan modal untuk memulai pertanian mereka</p>
                    </div>
                </div>
                </div>
                <div class="col">
                <div class="card">
                    <img src="../Image/precision-ag.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Artikel Pertanian</h5>
                    <p class="card-text">Kami memberikan beberapa artikel yang diharapkan dapat meninggkatkan pengetahuan para petani, agar dapat melakukan pertanina modern</p>
                    </div>
                </div>
                </div>
            </div>
            <div class="but3">
                <a href="/login">
                    <button class="btn btn-outline-success me-2" type="submit">Bergabung Sekarang</button>
                </a>
            </div>
      </section>

      <section class="sec" style="background-color: rgb(252, 251, 250);" id ="mereka">
        <div class="j4">
            <h1>Perjalan Mereka Bersama Kami</h1>
        </div>
        
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div>
                    <img src="../Image/muka1.jpg" class="petani" alt="...">
                </div> <br>
                <h4>Ibu Sutarni</h4>
                <p>Berhasil memajukan pertaniannya berkat bantuan dari Farmlogs</p>
            </div>
            <div class="col">
                <div>
                    <img src="../Image/muka2.jpg" class="petani" alt="...">
                </div> <br>
                <h4>Pak Budi</h4>
                <p>Berhasil memajukan pertaniannya berkat bantuan dari Farmlogs</p>
            </div>
            <div class="col">
                <div>
                    <img src="../Image/muka3.jpg" class="petani" alt="...">
                </div> <br>
                <h4>Pak Tarno</h4>
                <p>Berhasil memajukan pertaniannya berkat bantuan dari Farmlogs</p>
            </div>
        </div>
      </section>

      <section class="sec" id = "seputar">
        <div class="j3">
            <h1>Seputar Farmlogs</h1>
        </div>
        
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="img">
                    <img src="../Image/truk-sayur1.jpg" class="card-img-top" alt="...">
                </div> <br>
                <h4>Pendistribusian hasil panen melalui Farmlogs</h4>
            </div>
            <div class="col">
                <div class="img">
                    <img src="../Image/bantuan kujang.jpeg" class="card-img-top" alt="...">
                </div> <br>
                <h4>Memberian modal dana untuk para petani</h4>
            </div>
            <div class="col">
                <div class="img">
                    <img src="../Image/artikel pertanian.png" class="card-img-top" alt="...">
                </div> <br>
                <h4>Artikel pertanian yang dapat membantu para petani menggembangkan pertaniannya</h4>
            </div>
        </div>
      </section>

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