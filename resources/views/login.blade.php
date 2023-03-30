<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <title>Home Page</title>
    <link rel="icon" href="LOGO RPL .png" type="image/icon type">
    <link rel="stylesheet" href="../Asset/login.css">
</head>
<body class="">
    <div class="split left">
        <div class="centered">
            <a href="/">
                <img src="../Image/LOGO RPL .png" alt="" width="950" height="929">
            </a>
            
        </div>
      </div>
      
      <div class="split right">
    

        <h2>
            Welcome Back!
        </h2>
        <h4>
            Hasil Panen Siap dibeli
        </h4>
        <p><a href="">Login Penjual</a></p>
        <form action="ceklogin" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <button type="sumbit" class="btn btn-primary" style = >Login</button>
            <br><br>
            <p>Belum memiliki akun?
                <a href="/register">Register</a>
            </p>
        </form>    
    </div>
</body>