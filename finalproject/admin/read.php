<?php include("config.php");
session_start();
if (!$_SESSION['login'])
    header('Location:login.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Bangga Surabaya</title>
  </head>
  <body>
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#"><img class="d-block w-100" src="../index/logo.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="../index/index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">SITS</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Lainnya
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="../berita/news.php">Berita</a>
                <a class="dropdown-item" href="../angkutan_umum/transport.php">Angkutan Umum</a>
                <a class="dropdown-item" href="../maps/maps.php">Peta</a>
                
              </div>         
            </li>
    
            <li class="nav-item">
            <a class="nav-link" href="../khalayak_umum/tampilan.php">Jalan-jalan</a>
            <li class="nav-item">
              <a class="nav-link " href="#"> Tentang kami</a>
            </li>
       
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Login</a>
        <li class="nav-item">
            <button type="button" class="btn btn-danger">SOS</button>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
<!-- close navbar -->
<h1><center>Daftar Wisata</center></h1>
    <br>
    <nav>
        <a href="tambah.php">[+] Tambah Baru</a>
    </nav>

    <div class="container"><table border="1">
    <thead>
        <tr>
            <th>Nomor</th>
            <th>Judul</th>
            <th>Isi</th>
            <th>Penulis</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM pariwisata";
        $query = mysqli_query($db, $sql);

        while($data = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$data['id']."</td>";
            echo "<td>".$data['judul']."</td>";
            echo "<td>".$data['isi']."</td>";
            echo "<td>".$data['penulis']."</td>";
    

            echo "<td>";
            echo "<a href='update.php?id=".$data['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$data['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>
    <p>Total: <?php echo mysqli_num_rows($query) ?></p>
    </div>
   
   

    </body>
</html>