





<style>
    .btn-linkacc {
        color: #838383;
        font-weight: 400;
        width: 180px;
        font-size: 16px;
        border: solid 1px #ACB8C2;
        border-radius: 10px;
    }

    .payment-logo {
        justify-content: center;
        text-align: center;
        display: block;
        align-items: center;
        object-fit: fill;
    }

    .home {
        margin-left: 12rem;
        margin-right: 12rem;
        margin-bottom: 20px;
    }

    .text-prim {
        color: #000000;
    }

    .btn-edit {
        color: #fff;
        font-weight: 400;
        width: 200px;
        font-size: 16px;
        border-radius: 10px;
        background-color: #008000;
    }

    .btn-edit:hover {
        color: #fff;
        font-weight: 400;
        font-size: 16px;
        border-radius: 10px;
        background-color: #50c878;
    }
</style>

<header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">
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
                <div class = "loginbtn" >
                <span>
                    <a href="/profile">
                        <button class="btn btn-outline-success me-2"  type="submit">Profile</button>
                    </a>
                    <a href="#">
                        <button class="btn btn-outline-success me-2"  type="submit">Logout</button>
                    </a>
                </span>
                </div>
                </div>
            </div>
            </div>
        </nav>
    </header>


<div class="home w-12/12 overflow-auto p-4">
    <p class="text-prim text-xl" style="font-size: 28px;">Your Profile</p>
    <div class="mt-4">
        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <input type="hidden" value="{{ $user->id }}" name="id">
            </div>
            <div class="form-group mb-3 row">
                <label class="col-sm-2 col-form-label" for="exampleFormControlInput1">Nama</label>
                <div class="col-sm-10">
                    <input value="{{ $user->name }}" type="text" class="form-control" placeholder="Name" name="name">
                </div>
            </div>

            <div class="form-group mb-3 row">
                <label class="col-sm-2 col-form-label" for="exampleFormControlInput1">E-mail</label>
                <div class="col-sm-10">
                    <input value="{{ $user->email }}" type="text" class="form-control" placeholder="Email" name="email">
                </div>
            </div>

            <div class="form-group mb-3 row">
                <label class="col-sm-2 col-form-label" for="exampleFormControlInput1">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" placeholder="Password" name="password">
                </div>
            </div>

            <div class="form-group mt-5" style="float: right;">
                <button type="submit" class="btn btn-edit mx-2">Update</button>
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