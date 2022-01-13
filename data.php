<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION['username'])){
  echo"
    <script>
        alert('Silahkan Login Terlebih Dahulu')
        window.location.href='login.php';
    </script>";
  exit;
}
include 'koneksi.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Data Jurnal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
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
              <li class="nav-item">
                <a class="nav-link active" href="data.php">Data Unggahan</a>
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
    <figure class="text-center mt-3">
      <blockquote class="blockquote">
        <p>Berikut adalah daftar jurnal</p>
      </blockquote>
      <figcaption class="blockquote-footer">
        Seluruh jurnal yang di unggah <cite title="Source Title">Journal Search</cite>
      </figcaption>
    </figure>
  <div class="container">
    <a href="olah.php">
    <button type="button" class="btn btn-success mb-3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-plus" viewBox="0 0 16 16">
        <path d="M8 6.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 .5-.5z"/>
        <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z"/>
      </svg>Tambah</button></a>
  </div>
  <div class="container">
    <table class="table table-success table-striped">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Judul Jurnal</th>
          <th scope="col">Pengarang</th>
          <th scope="col">Tahun Terbit</th>
          <th scope="col">File Jurnal</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
      <?php
      $query="SELECT * FROM jurnal";
      $sql=mysqli_query($konek,$query);
      $no=1;
      while($data=mysqli_fetch_array($sql)){
      ?>
        <tr>
          <th scope="row"><?php echo $no;?></th>
          <td><?php echo $data['judul']; ?></td>
          <td><?php echo $data['pengarang']; ?></td>
          <td><?php echo $data['tahun']; ?></td>
          <td><a href="<?php echo $data['file']; ?>">Buka</a></td>
          <td>
            <a href="olah.php?id=<?php echo $data['id'];?>">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
              <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
            </svg>
            </a>
            <a href="proses.php?id=<?php echo $data['id'];?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16" name="hapus">
              <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
            </svg></a>
        </tr>
      <?php
        $no++;
      }
      ?>
      </tbody>
    </table>
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