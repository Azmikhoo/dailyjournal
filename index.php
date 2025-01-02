<?php
include "koneksi.php"; 
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Latihan Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- CDN buat icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <!-- logo web -->
    <link rel="icon" href="img/poto1.jpeg" />
</head>

<body>
    <!-- ini navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#"><i>My Daily Journal</i></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-dark">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#article">Article</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#gallery">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Schedule">Schedule</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Profil">Profil Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php" target="_blank">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- ini hero -->
    <section id="hero" class="text-center p-5 bg-danger-subtle text-sm-start">
        <div class="container">
            <div class="d-sm-flex flex-sm-row-reverse align-items-center">
                <img src="img/poto1.jpeg" alt="" class="img-fluid" width="400">
                <div class="txt">
                    <h1 class="fw-bold display-4">My Daily Journal</h1>
                    <h4 class="lead display-6">Haiiii, selamat datang in My Daily Journal 2023-2024 yang cukup
                        menyenangkan ini...
                    </h4>
                </div>
            </div>
        </div>
    </section>
<!-- article begin -->
<section id="article" class="text-center p-5">
  <div class="container">
    <h1 class="fw-bold display-4 pb-3">Article</h1>
    <div class="row row-cols-1 row-cols-md-4 g-4 justify-content-center">
      <?php
      $sql = "SELECT * FROM article ORDER BY tanggal DESC";
      $hasil = $conn->query($sql); 

      while($row = $hasil->fetch_assoc()){
      ?>
        <div class="col">
          <div class="card h-100">
            <img src="img/<?= $row["gambar"]?>" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title"><?= $row["judul"]?></h5>
              <p class="card-text">
                <?= $row["isi"]?>
              </p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">
                <?= $row["tanggal"]?>
              </small>
            </div>
          </div>
        </div>
        <?php
      }
      ?> 
    </div>
  </div>
</section>
<!-- article end -->
    <!-- ini gallery -->
    <section id="gallery" class="text-center p-5 bg-danger-subtle">
        <div class="container">
            <h1 class="fw-bold display-4 pb-3">Gallery</h1>
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/poto8.jpeg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/poto11.jpeg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/poto7.jpeg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>


    <!-- schedule -->

    <section id="Schedule" class="text-center p-5">
        <div class="container">
            <h1 class="fw-bold display-4 pb-5">Schedule</h1>
            <div class="row row-cols-1 row-cols-md-4 g-4 justify-content-center">
                <div class="col d-flex justify-content-center">
                    <div class="card border-primary" style="width: 18rem;">
                        <div class="card-header text-bg-primary">
                            Senin
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <h5 class="card-title p-2">12:30-15:00</h5>
                                <p class="card-text">Probabilitas dan Statistik</p>
                                <p class="card-text">Ruang H.4.8</p>

                                <h5 class="card-title p-2">15:30-18:00</h5>
                                <p class="card-text">Sistem Operasi</p>
                                <p class="card-text">Ruang H.4.9</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col d-flex justify-content-center">
                    <div class="card border-warning" style="width: 18rem;">
                        <div class="card-header text-bg-warning text-light">
                            Selasa
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <h5 class="card-title p-2">09:30-12:00</h5>
                                <p class="card-text">Rekayasa Perangkat Lunak</p>
                                <p class="card-text">Ruang H.4.10</p>

                                <h5 class="card-title p-2">15:30-18:00</h5>
                                <p class="card-text">Data Mining</p>
                                <p class="card-text">Ruang H.3.11</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col d-flex justify-content-center">
                    <div class="card border-success" style="width: 18rem;">
                        <div class="card-header text-bg-success">
                            Rabu
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <h5 class="card-title p-2">09:30-12:00</h5>
                                <p class="card-text">Kriptografi</p>
                                <p class="card-text">Ruang H.4.11</p>

                                <h5 class="card-title p-2">12:30-15:00</h5>
                                <p class="card-text">Dasar Pemrograman</p>
                                <p class="card-text">Ruang H.3.1</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col d-flex justify-content-center">
                    <div class="card border-info" style="width: 18rem;">
                        <div class="card-header text-bg-info text-light">
                            Kamis
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <h5 class="card-title p-2">09:30-12:00</h5>
                                <p class="card-text">Logika Informatika</p>
                                <p class="card-text">Ruang H.4.10</p>

                                <h5 class="card-title p-2">14:10-15:50</h5>
                                <p class="card-text">Basis Data</p>
                                <p class="card-text">Ruang H.5.2</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col d-flex justify-content-center">
                    <div class="card border-dark" style="width: 18rem;">
                        <div class="card-header text-bg-dark">
                            Jum'at
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <h5 class="card-title p-2">10:20-12:00</h5>
                                <p class="card-text">Pemrograman Berbasis Web</p>
                                <p class="card-text">Ruang D.2.J</p>

                                <h5 class="card-title p-2">14:10-15:50</h5>
                                <p class="card-text">Basis Data</p>
                                <p class="card-text">Ruang D.3.M</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col d-flex justify-content-center">
                    <div class="card border-secondary" style="width: 18rem;">
                        <div class="card-header text-bg-secondary">
                            Sabtu
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <h5 class="card-title p-2">10:20-12:00</h5>
                                <p class="card-text">Basis Data</p>
                                <p class="card-text">Ruang H.3.4</p>

                                <h5 class="card-title p-2">12:30-15:00</h5>
                                <p class="card-text">Dasar Pemrograman</p>
                                <p class="card-text">Ruang H.3.1</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col d-flex justify-content-center">
                    <div class="card border-danger" style="width: 18rem;">
                        <div class="card-header text-bg-danger">
                            Minggu
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <h5 class="card-title p-2">10:20-12:00</h5>
                                <p class="card-text">Basis Data</p>
                                <p class="card-text">Ruang H.3.4</p>

                                <h5 class="card-title p-2">12:30-15:00</h5>
                                <p class="card-text">Dasar Pemrograman</p>
                                <p class="card-text">Ruang H.3.1</p>
                            </li>
                        </ul>
                    </div>
                </div>
    </section>

    <!--Profil Mahasiswa-->
    <section id="Profil" class="text-center p-5 bg-danger-subtle">
        <div class="container">
            <h1 class="fw-bold display-4 pb-3">Profil Mahasiswa</h1>
            <div class="d-lg-flex flex-md-row align-items-center justify-content-evenly">
                <img src="img/yy.jpeg" alt="" class="img-fluid rounded-circle" width="250">
                <div class=" p-3">
                    <h2 class="text-md-center">Azmi Khofipah</h2>
                    <h5 class="lead text-md-center">Mahasiswa Teknik Informatika</h5>
                    <table class="text-start p-5">
                        <tr>
                            <td><b>NIM</b></td>
                            <td class="p-2">:</td>
                            <td>A111.2023.15351</td>
                        </tr>
                        <tr>
                            <td><b>Program studi</b></td>
                            <td class="p-2">:</td>
                            <td>Teknik Informatika</td>
                        </tr>
                        <tr>
                            <td><b>Email</b></td>
                            <td class="p-2">:</td>
                            <td>111202315351@mhs.dinus.ac.id</td>
                        </tr>
                        <tr>
                            <td><b>Telepon</b></td>
                            <td class="p-2">:</td>
                            <td>08891754102</td>
                        </tr>
                        <tr>
                            <td><b>Alamat</b></td>
                            <td class="p-2">:</td>
                            <td>Brebes, Jawa Tengah</td>
                        </tr>
                    </table>
                </div>
            </div>
    </section>

    <!-- ini footer -->
    <footer class="text-center p-5">
        <div class="icon text-center">
            <a href="https://www.instagram.com/azmikhoo?igsh=ZHYxMWpueHpvczNx" target="_blank" class="text-dark"><i
                    class="bi bi-instagram h2 p-2 text-dark"></i></a>
            <a href="https://www.linkedin.com/in/azmi-khofipah-96a550336/" target="_blank" class="text-dark"><i
                    class="bi bi-linkedin h2 p-2 text-dark"></i></a>
            <a href="https://wa.me/+628891754102" target="_blank" class="text-dark"><i
                    class="bi bi-whatsapp h2 p-2 text-dark"></i></a>
        </div>
        <div class="copyright">Azmikhoo &copy 2024</div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>