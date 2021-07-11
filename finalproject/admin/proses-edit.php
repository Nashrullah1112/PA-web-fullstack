<?php

include("config.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $penulis = $_POST['penulis'];

    // buat query update
    // $sql = "UPDATE pariwisata SET judul='$judul', isi='$isi', penulis='$penulis' WHERE id=$id";
    $sql = "UPDATE pariwisata SET judul='$judul', isi='$isi', penulis='$penulis' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if($query) {
        // kalau berhasil alihkan ke halaman read.php
        header('Location: read.php');
    }
     else 
    {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>