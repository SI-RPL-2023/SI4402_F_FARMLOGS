

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
    <link rel="stylesheet" href="home.css">
</head>
<body>
<header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">
                    <img src="../Image/LOGO_RPL_-removebg-preview.png" width="80" height="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="dropdown">
                <button class="btn btn-book-a-table dropdown-toggle"  type="button" data-bs-toggle="dropdown" aria-expanded="false">Admin</button></a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/admin/dashboard">Dashboard</a></li>
                  <li><a class="dropdown-item" href="/transaction">Transaction</a></li>
                  <li><a class="dropdown-item" href="/logout">Log out</a></li>
                </ul>
              </div>
            </div>
            </div>
        </nav>
    </header>


<div class="home w-12/12 overflow-auto p-4">
    <p class="text-prim text-xl" style="font-size: 28px;">Admin Profile</p>
    <div class="mt-4">
        <form action="/updateprof" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <input type="hidden" value="" name="id">
            </div>
            <div class="form-group mb-3 row">
                <label class="col-sm-2 col-form-label" for="exampleFormControlInput1">Nama</label>
                <div class="col-sm-10">
                    <input value="" type="text" class="form-control" placeholder="Admin" name="nama">
                </div>
            </div>
            <div class="form-group mb-3 row">
                <label class="col-sm-2 col-form-label" for="exampleFormControlInput1">E-mail</label>
                <div class="col-sm-10">
                    <input value="" type="text" class="form-control" placeholder="admin@gmail.com" name="email">
                </div>
            </div>
            <div class="form-group mb-3 row">
                <label class="col-sm-2 col-form-label" for="exampleFormControlInput1">Nomor Handphone</label>
                <div class="col-sm-10">
                    <input value="" type="number" class="form-control" placeholder="088811223344" name="nomor">
                </div>
            </div>
            <div class="form-group mb-3 row">
                <label class="col-sm-2 col-form-label" for="exampleFormControlInput1">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" placeholder="Password" name="password">
                </div>
            </div>
            <div class="form-group mb-3 row">
                <label class="col-sm-2 col-form-label" for="exampleFormControlInput1">Konfirmasi Password</label>
                <div class="col-sm-10">
                    <input  type="password" class="form-control" placeholder="Konfirmasi Password" name="password_confirmation">
                </div>
            </div>
            <div class="form-group mt-5" style="float: right;">
                <button type="submit" class="btn btn-edit mx-2">Update</button>
            </div>
        </form>
    </div>
        
      <div class="b-example-divider"></div>
  
</div>
</body>
</html>