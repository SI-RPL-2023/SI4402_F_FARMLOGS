<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <title>Home Page</title>
    <link rel="icon" href="Image/LOGO RPL.png" type="image/icon type">
    <link rel="stylesheet" href="../Asset/register.css">
</head>
<body class="">
    <div class="split left">
        <div class="centered">
            <a href="/">
                <img src="../Image/LOGO RPL.png" alt="" width="950" height="929">
            </a>
            
        </div>
      </div>
      
      <div class="split right">
    

        <h2>
            Registrasi Petani
        </h2>
        <br>
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
        <form action="/cekregis2" method="POST">
        @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nomor Handphone</label>
                <input type="number" class="form-control" id="nomor" name="nomor">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" id="lahir" name="lahir">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Daerah</label>
                <input type="text" class="form-control" id="daerah" name="daerah">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Konfirmasi Password</label>
                <input type="password" class="form-control" id="password" name="password_confirmation">
            </div>
            <button type="sumbit" class="btn btn-success me-2">Daftar</button>
            <br><br>
        </form>    
        <p>Sudah memiliki akun?
            <a href="/login">Login</a>
        </p>
        <p>Ingin membeli hasil panen?
            <a href="/register">Pembeli</a>
        </p>
    </div>
</body>