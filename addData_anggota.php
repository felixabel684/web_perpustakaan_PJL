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
    if (tambah_anggota($_POST) > 0) {
        echo "<script>
                alert('Data anggota berhasil ditambahkan!');
                document.location.href = 'data_anggota.php';
            </script>";
    } else {
        // Jika fungsi tambah dari 0/data tidak tersimpan, maka munculkan alert dibawah
        echo "<script>
                alert('Data anggota gagal ditambahkan!');
                document.location.href = 'data_anggota.php';
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

    <title>Tambah Data Anggota | Perpustakaan Jembatan Ilmu</title>
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
                <h3 class="fw-bold text-uppercase"><i class="bi bi-person-plus-fill"></i>&nbsp;Tambah Data Anggota</h3>
            </div>
            <hr>
        </div>
        <div class="row my-2">
            <div class="col-md">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                      <label class="form-label" for="nim">NIM</label>
                      <input class="form-control w-50" id="nim" name="nim" type="text" placeholder="Masukan nim anda"autocomplete="off" required>
                  </div>
                  <div class="mb-3">
                      <label class="form-label" for="nama_anggota">Nama</label>
                      <input class="form-control w-50" id="nama_anggota" name="nama_anggota" type="text" placeholder="Masukan nama anda"autocomplete="off" required>
                  </div>
                  <div class="mb-3">
                      <label class="form-label" for="tempat_lahir">Tempat Lahir</label>
                      <input class="form-control w-50" id="tempat_lahir" name="tempat_lahir" type="text" placeholder="Masukan tempat lahir anda" autocomplete="off" required>
                  </div>
                  <div class="mb-3">
                      <label class="form-label" for="tgl_lahir">Tanggal Lahir</label>
                      <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control w-50">
                  </div>
                  <div class="mb-3">
                      <label class="form-label" for="jk">Jenis Kelamin</label>
                      <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio1" name="jk" value="Laki-Laki" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio1">Laki-Laki</label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio2" name="jk" class="custom-control-input" value="Perempuan">
                        <label class="custom-control-label" for="customRadio2">Perempuan</label>
                      </div>
                  </div>
                  <div class="mb-3">
                      <label class="form-label" for="prodi">Prodi</label>
                      <select name="prodi" id="prodi" class="form-control w-50">
                          <option value="">-- Pilih Prodi --</option>
                          <option value="Teknik Informatika">Teknik Informatika</option>
                          <option value="Management dan Bisnis">Management dan Bisnis</option>
                          <option value="Sistem Operasi">Sistem Operasi</option>
                          <option value="Pendidikan Kimia">Pendidikan Kimia</option>
                          <option value="Teknik Elektro">Teknik Elektro</option>
                          <option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
                          <option value="Kesehatan Masyarakat">Kesehatan Masyarakat</option>
                          <option value="Akuntansi">Akuntansi</option>
                      </select>
                  </div>
                  <hr>
                    <a href="data_anggota.php" class="btn btn-secondary">Kembali</a>
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