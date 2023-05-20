<?php
session_start();
// Jika tidak bisa login maka balik ke login.php
// jika masuk ke halaman ini melalui url, maka langsung menuju halaman login
if (!isset($_SESSION['login'])) {
    header('location:login.php');
    exit;
}

// Memanggil atau membutuhkan file function.php
require 'function.php';

// Jika fungsi tambah lebih dari 0/data tersimpan, maka munculkan alert dibawah
if (isset($_POST['simpan'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                alert('Data buku berhasil ditambahkan!');
                document.location.href = 'data_buku.php';
            </script>";
    } else {
        // Jika fungsi tambah dari 0/data tidak tersimpan, maka munculkan alert dibawah
        echo "<script>
                alert('Data buku gagal ditambahkan!');
                document.location.href = 'data_buku.php';
            </script>";
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <!-- Own CSS -->
    <link rel="stylesheet" href="frontend/styles/style.css">

    <link
      rel="stylesheet"
      href="frontend/libraries/bootstrap/css/bootstrap.css"
    />
    <link rel="stylesheet" href="frontend/styles/main.css" />

    <title>Tambah Data Buku | Perpustakaan Jembatan Ilmu</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-uppercase">
        <div class="container">
            <a class="navbar-brand" href="#">
          <img src="frontend/images/book_icon.png" alt="" />
        </a>
            <a class="navbar-brand" href="index_2.php">PJL</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index_2.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a
                        class="nav-link dropdown-toggle"
                        href="#"
                        id="navbardrop"
                        data-bs-toggle="dropdown"
                      >
                        Data Perpus
                      </a>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="data_buku.php">Data Buku</a>
                        <a class="dropdown-item" href="data_anggota.php">Data Anggota</a>
                        <a class="dropdown-item" href="transaksi.php">Data Peminjaman</a>
                      </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Close Navbar -->

    <!-- Container -->
    <div class="container">
        <div class="row my-2">
            <div class="col-md">
                <h3 class="fw-bold text-uppercase"><i class="bi bi-person-plus-fill"></i>&nbsp;Tambah Data Buku</h3>
            </div>
            <hr>
        </div>
        <div class="row my-2">
            <div class="col-md">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="isbn" class="form-label">ISBN</label>
                        <input type="number" class="form-control w-50" id="isbn" placeholder="Masukkan ISBN" min="1" name="isbn" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label for="kode_buku" class="form-label">Kode Buku</label>
                        <input type="text" class="form-control form-control-md w-50" id="kode_buku" placeholder="Masukkan Kode Buku" name="kode_buku" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label for="nama_buku" class="form-label">Nama Buku</label>
                        <input type="text" class="form-control w-50" id="nama_buku" placeholder="Masukkan Nama Buku" name="nama_buku" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
                        <input type="number" class="form-control w-50" id="tahun_terbit" placeholder="Masukkan Tahun Terbit" name="tahun_terbit" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label for="jml_halaman" class="form-label">Jumlah Halaman</label>
                        <input type="number" class="form-control w-50" id="jml_halaman" placeholder="Masukkan Jumlah Halaman" name="jml_halaman" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label for="kategori" class="form-label">Kategori</label>
                        <input type="text" class="form-control w-50" id="kategori" placeholder="Masukkan Kategori" name="kategori" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label for="imprint" class="form-label">Imprint</label>
                        <input type="text" class="form-control w-50" id="imprint" placeholder="Masukkan Imprint" name="imprint" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label for="detail_buku" class="form-label">Sinopsis Buku</label>
                        <textarea class="form-control w-50" id="sinopsis_buku" rows="5" name="sinopsis_buku" placeholder="Masukkan Sinopsis Buku" autocomplete="off" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar</label>
                        <input class="form-control form-control-sm w-50" id="gambar" name="gambar" type="file">
                    </div>
                    <div class="mb-3">
                        <label for="jumlah_buku" class="form-label">Jumlah Buku</label>
                        <input type="number" class="form-control w-50" id="jumlah_buku" placeholder="Masukkan Jumlah Buku" name="jumlah_buku" autocomplete="off" required>
                    </div>
                    <hr>
                    <a href="data_buku.php" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Close Container -->



    <!-- Footer -->
    <footer class="section-footer mt-5 mb-4 border-top">
      <div class="container pt-5 pb-5">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="row">
              <div class="col-12">
                <div class="row">
                  <div class="col-12 col-lg-3">
                    <a class="navbar-brand" href="#">
                      <img src="frontend/images/book_icon.png" alt="" /></a>
                    <ul class="list-unstyled">
                      <li>
                        <a href="#">Home</a>
                      </li>
                      <li>
                        <a href="#">Peminjaman</a>
                      </li>
                      <li>
                        <a href="#">Daftar Buku</a>
                      </li>
                    </ul>
                  </div>
                  <div class="col-12 col-lg-3">
                    <h5>PRODUCT</h5>
                    <ul class="list-unstyled">
                      <li><a href="#">Membership</a></li>
                      <li><a href="#">Security</a></li>
                      <li><a href="#">Rewards</a></li>
                    </ul>
                  </div>
                  <div class="col-12 col-lg-3">
                    <h5>COMPANY</h5>
                    <ul class="list-unstyled">
                      <li><a href="#">About</a></li>
                      <li><a href="#">Help Center</a></li>
                      <li><a href="#">Media</a></li>
                    </ul>
                  </div>
                  <div class="col-12 col-lg-3">
                    <h5>GET CONNECTED</h5>
                    <ul class="list-unstyled">
                      <li>Semarang</li>
                      <li>Indonesia</li>
                      <li>0854 - 6654 - 2214</li>
                      <li>support@pjl.com</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div
          class="row border-top justify-content-center align-items-center pt-4"
        >
          <div class="col-auto text-gray-500 font-weight-light">
            2023 Copyright Perpustakaan Jembatan Ilmu • Made in Semarang
          </div>
        </div>
      </div>
    </footer>
    <!-- Close Footer -->

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    
    <script src="frontend/libraries/jquery/jquery-3.4.1.min.js"></script>
    <script src="frontend/libraries/bootstrap/js/bootstrap.js"></script>
  </body>

</html>