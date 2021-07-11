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
                <a class="dropdown-item" href="../berita/news.php" >Berita</a>
                <a class="dropdown-item" href="../angkutan_umum/transport.php">Angkutan Umum</a>
                <a class="dropdown-item" href="../maps/maps.php">Peta</a>
               
              </div>         
            </li>
    
            <li class="nav-item">
              <a class="nav-link " href="#">Tentang kami</a>
            </li>
       
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">jalan-jalan</a>
        <li class="nav-item">
            <button type="button" class="btn btn-danger">SOS</button>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
      <!-- Close Navbar -->

      <!--card-->
      <div class="main">
      <div class="container">
        <div class="row mx-auto">
        <?php
                    include '../admin/config.php';
                    $query = "SELECT * FROM pariwisata ORDER BY id ASC";
                    $dewan1 = $db->prepare($query);
                    $dewan1->execute();
                    $res1 = $dewan1->get_result();
                    while ($row = $res1->fetch_assoc()) {
                        $id = $row["id"];
                        $judul = $row["judul"];
                        $penulis = $row["penulis"];

                        if (strlen($judul) > 100) {
                            $judul = substr($judul, 0, 100) . "...";
                        }
                        $isi = $row["isi"];
                        if (strlen($isi) > 256) {
                            $isi = substr($isi, 0, 256) . "...";
                        }
      ?>
      <div class="card d-flex" style="width: 20rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $judul; ?> </h5>
    <p class="card-text"><?php echo $isi; ?> </p>
    
  
</div>
</div>
<?php } ?>
</div>
</div>

      
      <!-- close card -->
 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>