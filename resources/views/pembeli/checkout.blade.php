<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
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
      
    <div class="container">
    <hr class="featurette-divider">
    <span class=" form-signin w-100 m-auto rounded" >
      <section>
  </span>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="../Image/foowd.png" alt="" width="100" height="">
      <div class="section-header">
            <h2>Your Order</h2>
            <p>Check Out <span>Item</span></p>
          </div>
    </div>

    <div class="row g-5">
      <div class="col-md-5 col-lg-4 order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="section-header">Your cart</span>
        </h4>
        <ul class="list-group mb-3">
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Product name</h6>
              <small class="text-muted">{{$list -> name}}</small>
            </div>
            <span class="text-muted">Rp {{$list -> harga}}</span>
          </li>
        </ul>

        <form class="card p-2" method ="POST" action = "/checkout">
            @csrf 
            <input type="hidden" name="name" value="{{$list -> name}}">
            <input type="hidden" name="harga" value="{{$list -> harga}}">
            <img src="{{ asset ('storage/Panen/' .$list -> image) }}" alt="">
      </div>
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Personal Data</h4>
          <div class="row g-3">

            <div class="col-12">
              <label for="username" class="form-label">Name</label>
              <div class="input-group has-validation">
                <input type="text" class="form-control" id="username" placeholder="Name" required name="nama" value ="{{ Auth::user()->nama }}" readonly>
              <div class="invalid-feedback">
                  Your username is required.
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com" required name = "email"  value ="{{ Auth::user()->email }}" readonly>
              <div class="invalid-feedback">
                Please enter a valid email address.
              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label">Address</label>
              <input type="text" class="form-control" id="address" placeholder="" required name ="alamat">
              <div class="invalid-feedback">
                Please enter your  address.
              </div>
            </div>

            <div class="col-12">
              <label for="address2" class="form-label">No hp </label>
              <input type="text" class="form-control" id="address2" placeholder="" required name = "nomor" value ="{{ Auth::user()->nomor}}" readonly>
            </div>

          </div>

          <hr class="my-4">

          <h4 class="mb-3">Payment</h4>

          <div class="my-3">
            <div class="form-check"  >
              <input id="Card" name="pembayaran"value="Card" type="radio" class="form-check-input" checked required > 
              <label class="form-check-label" for="Card">Credit Card</label>
            </div>
            <div class="form-check">
              <input id="Bank transfer" name="pembayaran" type="radio" value = "Bank transfer" class="form-check-input" required>
              <label class="form-check-label" for="Bank transfer">Bank transfer</label>
            </div>
            <div class="form-check">
              <input id="Digital Wallet" name="pembayaran" type="radio" value="Digital Wallet" class="form-check-input" required>
              <label class="form-check-label" for="Digital Wallet">Digital Wallet</label>
            </div>
          </div>

          <hr class="my-4">

          <button class="w-100 btn btn-success" type="submit" onclick="validateForm()" >Pay</button>
        </form>
      </div>
    </div>
    <hr class="featurette-divider">
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
</body>
<script>
    function validateForm() {
        
        var lahanInput = document.getElementById('address');

        
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
            title: 'Pembayaran Berhasil',
            text: 'Terimakasih sudah membeli prduk di Farmlogs'
        });
    }
</script>
</html>
   