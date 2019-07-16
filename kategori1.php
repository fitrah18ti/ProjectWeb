<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Anik Wedding Gallery</title>

  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/shop-item.css" rel="stylesheet">

</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Wedding Organizer</a>
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
            <a class="nav-link" href="tentang.php">Tentang Kami</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="layanan.html">Layanan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Kontak</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Log Out</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">

    <div class="row">

      <div class="col-lg-3">
        <h1 class="my-4">Anik Wedding Galery</h1>
        <div class="list-group">
          <a href="kategori1.php" class="list-group-item active">Kategori 1</a>
          <a href="kategori2.php" class="list-group-item">Kategori 2</a>
          <a href="kategori3.php" class="list-group-item">Kategori 3</a>
        </div>
      </div>

      <div class="col-lg-9">

        <div class="card mt-4">
          <img class="card-img-top img-fluid" src="pelaminan1.jpeg" alt="pelaminan1">

          <div class="card-body">
            <h3 class="card-title">Pelaminan Nasional</h3>
            <h4>Rp.30.000.000</h4>
            <p class="card-text">Pelaminan Nasional dengan nuansa adat yang kental. Sentuhan rangkaian bunga yang disusun indah, menambah kemewahan pelaminan ini.</p>
            <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
            4.0 stars
          </div>
        </div>
        <div class="container">
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
        </form>
      </div>
    </div>
  </div>
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
    </div>
  </footer>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
