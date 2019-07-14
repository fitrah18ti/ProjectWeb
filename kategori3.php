<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Anik Wedding Gallery</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-item.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Welcome to our Wedding Organizer</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="home.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tentang.html">Tentang Kami</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="layanan.html">Layanan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Kontak</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="logout.php">Log out</a>
          </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-3">
          <h1 class="my-4">Anik Wedding Galery</h1>
          <div class="list-group">
            <a href="kategori1.html" class="list-group-item ">Kategori 1</a>
            <a href="kategori2.html" class="list-group-item">Kategori 2</a>
            <a href="kategori3.html" class="list-group-item active">Kategori 3</a>
          </div>
        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

          <div class="card mt-4">
            <img class="card-img-top img-fluid" src="pelaminan3.jpg" alt="pelaminan1">

            <div class="card-body">
              <h3 class="card-title">Pelaminan Luxury</h3>
              <h4>Rp.100.000.000</h4>
              <p class="card-text">Pelaminan super mewah dengan nuansa gold, berbentuk kubah mesjid, dengan detail ukiran yang sangat artistik.</p>
              <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9733;</span>
              5.0 stars
            </div>
          </div>
          <!-- /.card --><div class="container">
<form action="prosespesan.php" method="post">
  Form Pemesanan<br>
    <label><b>Nama</b></label>
    <input type="text" placeholder="Masukkan Nama" name="nama" >
<br>
    <label><b>Kategori</b></label>
    <input type="text" placeholder="Masukkan Kategori" name="kategori" >
<br>
    <label><b>Tanggal</b></label>
    <input type="date" name="tanggal" autofocus="" placeholder="Masukkan tanggal">
       <br> 
    <button type="submit" name="pesan" value="pesan" autofocus="">Booking</button>
    
  </div>

         
          <!-- /.card -->

        </div>
        <!-- /.col-lg-9 -->

      </div>

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>