<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Journal Search</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Journal Search</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#daftar">Daftar Jurnal</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#kontak">Kontak Kami</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="data.php">Data Unggahan</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <div class="container-fluid banner">
      <div class="container text-center">
        <h3 class="display-4">Selamat Datang di JOURNAL SEARCH</h3>
        <h5 class="display-7">Ayo Gunakan Referensi yang Kredibel!!!</h5>
      </div>
    </div>
    <div class="container-fluid daftar pt-5 pb-5" id="daftar">
      <div class="container-fluid text-center">
        <h2 class="display-5 judul" >Daftar Jurnal</h2>
      </div>
      <div class="row">
        <div class="col-md">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Oleh: Binti Maunah</h5>
              <p class="card-text">IMPLEMENTASI PENDIDIKAN KARAKTER DALAM PEMBENTUKAN KEPRIBADIAN HOLISTIK SISWA</p>
              <a href="pribadi.pdf" class="btn btn-primary tombol">Buka</a>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Oleh: Nurudin Mara</h5>
              <p class="card-text">UKURAN SAMPEL DAN DISTRIBUSI SAMPLING DARI BEBERAPA VARIABEL RANDOM KONTINU</p>
              <a href="mtk.pdf" class="btn btn-primary tombol">Buka</a>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Oleh: Elihami dan Endi Saharudin</h5>
              <p class="card-text">PERAN TEKNOLOGI PEMBELAJARAN ISLAM DALAM RGANISASI BELAJAR</p>
              <a href="peran.pdf" class="btn btn-primary tombol">Buka</a>
            </div>
          </div>
        </div>
      </div>
      <div class="card text-center">
        <div class="card-body">
          <h5 class="card-title judul">Unggah Jurnal</h5>
          <p class="card-text">Bantu pencari jurnal dengan mengunggah jurnal anda, agar mereka mendapatkan lebih banyak referensi</p>
          <a href="data.php" class="btn btn-primary tombol">Klik untuk Unggah!</a>
        </div>
      </div>
    </div>
    <div class="container-fluid pt-s pb-5 banner">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>