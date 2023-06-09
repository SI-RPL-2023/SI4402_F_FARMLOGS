
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Farmlogs</title>
    <link rel="icon" href="Image/LOGO RPL.png" type="image/icon type">
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


<div class="home w-12/12 overflow-auto p-4">
    <p class="text-prim text-xl" style="font-size: 28px;">Your Profile</p>
    <div class="mt-4">
        <form action="/updateprof" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <input type="hidden" value="{{ Auth::user()->id }}" name="id">
            </div>
            <div class="form-group mb-3 row">
                <label class="col-sm-2 col-form-label" for="exampleFormControlInput1">Nama</label>
                <div class="col-sm-10">
                    <input value="{{ Auth::user()->nama }}" type="text" class="form-control" placeholder="Nama" name="nama">
                </div>
            </div>
            <div class="form-group mb-3 row">
                <label class="col-sm-2 col-form-label" for="exampleFormControlInput1">E-mail</label>
                <div class="col-sm-10">
                    <input value="{{ Auth::user()->email }}" type="text" class="form-control" placeholder="Email" name="email" readonly>
                </div>
            </div>
            <div class="form-group mb-3 row">
                <label class="col-sm-2 col-form-label" for="exampleFormControlInput1">Nomor Handphone</label>
                <div class="col-sm-10">
                    <input value="{{ Auth::user()->nomor }}" type="number" class="form-control" placeholder="Nomor Handphone" name="nomor">
                </div>
            </div>
            <div class="form-group mb-3 row">
                <label class="col-sm-2 col-form-label" for="exampleFormControlInput1">Tanggal Lahir</label>
                <div class="col-sm-10">
                    <input value="{{ Auth::user()->lahir }}" type="date" class="form-control" placeholder="Tanggal Lahir" name="lahir" readonly>
                </div>
            </div>
            <div class="form-group mb-3 row">
                <label class="col-sm-2 col-form-label" for="exampleFormControlInput1">Daerah</label>
                <div class="col-sm-10">
                    <input value="{{ Auth::user()->daerah }}" type="text" class="form-control" placeholder="Daerah" name="daerah">
                </div>
            </div>
            <hr class="featurette-divider">
            <p>Masukan Password Anda yang Sekarang untuk Pengecekan Autorisasi</p>
            <div class="form-group mb-3 row">
                <label class="col-sm-2 col-form-label" for="exampleFormControlInput1">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" placeholder="Password" name="password" required>
                </div>
            </div>
            <div class="form-group mb-3 row">
                <label class="col-sm-2 col-form-label" for="exampleFormControlInput1">Konfirmasi Password</label>
                <div class="col-sm-10">
                    <input  type="password" class="form-control" placeholder="Konfirmasi Password" name="password_confirmation" id = "konfirmasi" required>
                </div>
            </div>
            <div class="form-group mt-5" style="float: right;">
                <button type="submit" class="btn btn-edit mx-2" onclick="validateForm()" >Update</button>
            </div>
        </form>
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
  
</div>
</body>
<script>
    function validateForm() {
        
        var lahanInput = document.getElementById('konfirmasi');

        
        if (lahanInput.value === '') {
            Swal.fire({
                icon: 'error',
                title: 'Form tidak lengkap',
                text: 'Mohon isi semua field yang diperlukan'
            });
        } else {
            showSuccessNotification();
        }
    }

    function showSuccessNotification() {
        Swal.fire({
            icon: 'success',
            title: 'Data berhasil diupdate',
            text: 'Data diri berhasil di update'
        });
    }
</script>
</html>