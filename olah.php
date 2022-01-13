<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>olahdata</title>
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
              <li class="nav-item">
                <a class="nav-link active" href="olah.php">Halaman Unggah</a>
              </li>
            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
    <figure class="text-center mt-3 judul">
      <blockquote class="blockquote">
        <p>Kelola Data Jurnal</p>
      </blockquote>
    </figure>
    <div class="container">
      <form action='proses.php' method='post'>
      <div class="mb-3 row">
        <label for="judul" class="col-sm-2 col-form-label judul">Judul</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="judul" name="judul">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="pengarang" class="col-sm-2 col-form-label judul">Pengarang</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="pengarang" name="pengarang">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="tahun" class="col-sm-2 col-form-label judul">Tahun</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" id="tahun" name="tahun">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="file" class="col-sm-2 col-form-label judul">File (pdf/docx)</label>
        <div class="col-sm-10">
          <input type="file" class="form-control" id="file" name="file">
        </div>
      </div>
      <div class="mb-3 row">
        <?php
        if(isset($_GET['id'])){
          echo '<button type="submit" class="btn btn-primary" name="btnproses" value="ubah">Ubah Data</button>';
        }else{
          echo '<button type="submit" class="btn btn-primary" name="btnproses" value="tambah">Tambah Data</button>';;
        }
        ?>
      </div>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>