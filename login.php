<!doctype html>
<?php
session_start();
if(isset($_SESSION['username'])){
  echo"
    <script>
        alert('Silahkan Logout terlebih dahulu sebelum login kembali')
        window.location.href='data.php';
    </script>";
  exit;
}
include 'koneksi.php';
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Journal Search</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#kontak">Kontak Kami</a>
              </li>
            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" href="login.php">Login</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
      <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <?php
                if(isset($_GET['pesan'])){
                ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Login Gagal!</strong> <?php echo $_GET['pesan']?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php
                }
                ?>
                <div class="card">
                    <h5 class="card-header judul">Login untuk masuk!</h5>
                    <form action="ceklogin.php" method="post">
                        <div class="card-body">
                            <label for="username" class="form-label">Username</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text judul" id="basic-addon3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                </svg></span>
                                <input type="text" class="form-control" id="username" name="username" required placeholder="Masukan Username" aria-describedby="basic-addon3">
                            </div>
                            <label for="password" class="form-label">Password</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text judul" id="basic-addon3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key-fill" viewBox="0 0 16 16">
                                <path d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                                </svg></span>
                                <input type="password" class="form-control" id="password" name="password" required placeholder="Masukan Password" aria-describedby="basic-addon3">
                            </div>
                            <div class="row mb-3">
                                <button type="submit" class="btn btn-primary judul" name="btnlogin">Login</button>
                            </div>
                            <div class="text-center">
                                Belum Punya akun? <a href="daftar.php">Daftar</a> sekarang!
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
      </div>
      <div class="container-fluid pb-5 kontakdata">
      <div class="container">
        <div class="display-5 text-center" id="kontak">Kontak Kami</div>
      </div>
      <div class="row">
        <div class="col">
          <a href="https://api.whatsapp.com/send?phone=6282247115732"><img src="whatsapp.png" class="icon"></a>
        </div>
        <div class="col">
          <a href="mailto:lasafal18@gmail.com"><img src="mail.png" class="icon1"></a>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>