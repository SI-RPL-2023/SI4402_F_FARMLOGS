<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <!-- Masukkan library jQuery -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<!-- Masukkan library Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<!-- Masukkan library Bootstrap JS -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <title>Farmlogs</title>
    <link rel="icon" href="Image/LOGO RPL .png" type="image/icon type">
    <link rel="stylesheet" href="../Asset/home.css">
    <style>
    .carousel-item {
      width: 100%;
      height: 600px;
    }

    .carousel-item img {
      object-fit: cover;
      width: 100%;
      height: 100%;
    }
  </style>
     
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
                        <a class="nav-link active" href="inputpanen">Jual Hasil Panen</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="peminjaman">Pinjam Dana</a>
                    </li>
                    <li class="nav-item ml-2">
                        <a class="nav-link active" href="{{ url('/artikelpetani') }}">Artikel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="cicilan">Bayar Cicilan</a>
                    </li>
                    </ul>
                </div>
                </div>
                <div class="dropdown">
                <button class="btn btn-book-a-table dropdown-toggle"  type="button" data-bs-toggle="dropdown" aria-expanded="false">{{ Auth::user()->nama }}</button></a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/petani/profile">Profile</a></li>
                  <li><a class="dropdown-item" href="/transaction">Transaction</a></li>
                  <li><a class="dropdown-item" href="/petani/inputpanen">Jual Hasil Panen</a></li>
                  <li><a class="dropdown-item" href="/petani/peminjaman">Peminjaman Dana</a></li>
                  <li><a class="dropdown-item" href="/petani/cicilan">Pembayaran Cicilan</a></li>
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

    <section class="" style="background-color:white">
    <div class="container-fluid">
        <div class="row">
        <br> <br> <br>
            <div class="col-lg-6 px-5 py-8 px-md-8 text-center text-lg-start">
            <br> <br> <br> <br> <br>
                <h2 class="my-3 display-2 fw-bold ls-tight"> Selamat Datang di Artikel Farmlogs<br/> </h2> 
                <h4 style="color: hsl(217, 10%, 50.8%)">Kami menyediakan informasi terbaru untuk membantu meningkatkan produktivitas pertanian Anda.</h4> 
                <br>
                <br>
                <a href="{{ url('/artikel') }}" style="background-color: blue; color: #ffffff; font-size: 30px;" type="submit" class="btn btn-primary btn-sm" role="button" aria-pressed="true">Artikel</a>
                <br>
            </div>
            <div class="col-lg-6 mb-9 mb-lg-8">
            <br>
            <br>
                <div id="carouselExampleControls" class="carousel slide h-100" data-bs-ride="carousel">
                    <div class="carousel-inner h-100">
                        <div class="carousel-item active" >
                            <img src="../Image/4.jpg" class="d-block w-100 h-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="../Image/6.jpg" class="d-block w-100 h-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="../Image/7.jpg" class="d-block w-100 h-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="MyItem" class="p-3">
    <br> <br> <br>
    <center> <h2>ARTIKEL FARMLOGS</h2> </center>
    <center> <p>  List Artikel Terbaru </p> </center>
    <br>
    <div class="row">
        @foreach($datas as $data) <!-- Menggunakan loop foreach untuk mengiterasi objek Collection -->
        <div class="col-md-6 mb-5 mb-lg-4">
            <div class="card justify-center mx-auto px-20 py-30" style="width: 50rem;" align="center">
            <img src="../Image/panenid.jpg" alt="gambar" width="800" height="500">
                <div class="card-body justify-center">
                    <h5 class="card-title">{{$data->nama_artikel}}</h5>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal{{$data->id_artikel}}">
                        View Details
                    </button>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="myModal{{$data->id_artikel}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">{{$data->nama_artikel}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <br>
                        <img src="../Image/panenid.jpg" alt="gambar" style="display: block; margin: auto;">  
                        <br> <br>
                        {{$data->desc_artikel}}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach <!-- Tutup loop foreach -->
    </div>
</section>
