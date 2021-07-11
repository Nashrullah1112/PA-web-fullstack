<?php include("config.php");
session_start();
if (!$_SESSION['login'])
    header('Location:read.php');
?>


<!DOCTYPE html>
<html>
<head>
    <title>Pariwisata Surabaya</title>
</head>

<body>
    <header>
        <h3>Tambah data pariwisata</h3>
    </header>

    <form action="proses-tambah.php" method="POST">

        <fieldset>

        <p>
            <label for="judul">Judul: </label>
            <input type="text" name="judul" placeholder="isi judul" />
        </p>
        <p>
            <label for="isi">isi: </label>
            <textarea name="isi"></textarea>
        </p>
        <p>
            <label for="penulis">Nama Penulis: </label>
            <input type="text" name="penulis" placeholder="isikan penulis" />
        </p>
        
        <p>
            <input type="submit" value="Daftar" name="daftar" />
        </p>

        </fieldset>

    </form>

    </body>
</html>