<?php
include 'koneksi.php';
if(isset($_POST['btnproses'])){
    $judul=$_POST['judul'];
    $pengarang=$_POST['pengarang'];
    $tahun=$_POST['tahun'];
    $file='jangan.pdf';
    if($_POST['btnproses']=="tambah"){
        var_dump($_POST);
        die();
        $query="INSERT INTO jurnal VALUES(NULL,'$judul','$pengarang','$tahun','$file')";
        $sql=mysqli_query($konek,$query);
        if($sql=true){
            header('location:data.php');
        }
    }else{
        echo "edit data";
    }
}else if($_GET='hapus'){
    echo"hapus";
}
?>