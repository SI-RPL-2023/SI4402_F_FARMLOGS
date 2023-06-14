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
                <div class="dropdown">
                <button class="btn btn-book-a-table dropdown-toggle"  type="button" data-bs-toggle="dropdown" aria-expanded="false">{{ Auth::user()->nama }}</button></a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/petani/profile">Profile</a></li>
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
         <!-- Begin Page Content -->
         <div class="container-fluid">

        <!-- Page Heading -->
        <br>
        <h1 class="h3 mb-2 text-gray-800">Pembayaran Cicilan</h1>
      <br>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nama Peminjam</th>
                                <th>Tanggal Peminjaman</th>
                                <th>Total Tagihan</th>
                                <th>Jatuh Tempo</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($list as $x)    
                            <tr>
                                <td>{{$x->petani}}</td>
                                <td>{{$x->created_at}}</td>
                                <td>Rp {{ number_format($x['dana'], 0, ',', '.') }}</td>
                                <td>{{$x->jatuhtempo}}</td>
                                <td>{{$x->status}}</td>
                                    <td>
                                    @if ($x->status == 'Terkonfirmasi')
                                    <form action="{{ route('bayarcicilan') }}" method="POST">
                                        @method('put') 
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $x->id }}">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                          Bayar
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                          <div class="modal-dialog">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Pembayaran</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                              </div>
                                              <div class="modal-body">
                                                <p>Total Tagihan</p>
                                                <p>Rp {{ number_format($x['dana'], 0, ',', '.') }}</p>
                                                <p>Pilih Metode Pembayaran :</p>
                                                <div class="my-3">
                                                  <div class="form-check">
                                                      <input id="Card" name="pembayaran"value="Card" type="radio" class="form-check-input" checked required>
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
                                                </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="Submit" class="btn btn-primary">Konfirmasi</button>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                    </form>
                                    @elseif ($x->status == 'Lunas')
                                    <a href="/petani/invoice/{{$x -> id}}" class="btn btn-success">invoice</a>
                                    </td>

                                    @endif                                    
                            </tr>
                        @endforeach
                        
                            
                        </tbody>
                    </table>
                </div>
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