<?php

include("config.php");

// kalau tidak ada id di query string
if  (isset($_GET['id']) ) {
    //ambil id dari query string
    $id = $_GET['id'];
    // buat query untuk ambil data dari database
    $sql = "SELECT * FROM pariwisata WHERE id=$id";
    $query = mysqli_query($db, $sql);
    $data = mysqli_fetch_assoc($query);

    // jika data yang di-edit tidak ditemukan
    if  ( mysqli_num_rows($query) < 1 ){
        die("data tidak ditemukan...");

    }
       
}
elseif (isset($_POST['simpan'])) {
    $judul= $_POST['judul'];
    $isi=   $_POST['isi'];
    $id=    $_POST['id'];
    $penulis= $_POST['penulis'];
    $sql = "UPDATE pariwisata SET judul='$judul', isi='$isi', penulis='$penulis' WHERE id= '$id' ";
    $query = mysqli_query($db, $sql);    
}  

?>
<!DOCTYPE html>
<html>
<head>
    <title>Pariwisata Surabaya</title>
</head>

<body>
    <header>
        <h3>Edit data pariwisata</h3>
    </header>

    <form action="proses-edit.php" method="POST">

    
        <fieldset>
        <input type="hidden" name="id" value="<?php echo $data['id'] ?>" />
        <p>
            <label for="judul">Judul: </label>
            <input type="text" name="judul" placeholder="isi judul" value="<?php echo $data['judul'] ?>"/>
        </p>
        <p>
            <label for="isi">isi: </label>
            <textarea name="isi" ><?php echo $data['isi'] ?></textarea>
        </p>
        <p>
            <label for="penulis">Nama Penulis: </label>
            <input type="text" name="penulis" placeholder="isikan penulis" value="<?php echo $data['penulis'] ?>" />
        </p>
        
        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>


        </fieldset>

    </form>

    </body>
</html>