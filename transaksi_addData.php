<?php

// Jika tidak bisa login maka balik ke login.php
// jika masuk ke halaman ini melalui url, maka langsung menuju halaman login


// Memanggil atau membutuhkan file function.php
$koneksi = new mysqli("localhost", "root", "", "web_yosi");

// menampilkan judul buku di TB_buku di bagian option pilih buku
$buku = $koneksi->query("SELECT * FROM buku ORDER BY no_buku") or die(mysqli_error($koneksi));

// menampilkan nama anggota & nim di TB_anggota di bagian option pilih anggota
$anggota = $koneksi->query("SELECT * FROM tb_anggota ORDER BY id_anggota") or die(mysqli_error($koneksi));
// $result = $koneksi -> query($anggota);
// $sql = $conn->query("SELECT * FROM tb_buku INNER JOIN tb_anggota ON tb_buku.id_buku = tb_anggota.id_anggota") or die(mysqli_error($conn));

$tgl_pinjam = date('d-m-Y');
$tujuh_hari = mktime(0,0,0, date('n'), date('j') + 7, date('Y'));
$kembali = date('d-m-Y', $tujuh_hari);

if(isset($_POST['tambah'])) {
    
    $tgl_pinjam = htmlspecialchars($_POST['tgl_pinjam']);
    $tgl_kembali = htmlspecialchars($_POST['tgl_kembali']);
    
    // $nama_buku = $_POST['buku'];
    // $pecahB = explode(".", $nama_buku);
    // $judul = $pecahB[0];

    // $nama_buku2 = ['nama_buku'];
    // $nim2 = ['nim'];
    // $id_judul_buku = $_GET['nama_buku'];

    $judul = $_POST['buku'];
 
    $pecahB = explode(".", $judul);
    $isbn = $pecahB[1];
    $nama_buku = $pecahB[2];
    // var_dump($_POST['nama']); 
    // var_dump($judul); die;

    // $nama_anggota = $_POST['nama'];
    // $pecahN = explode(".", $nama_anggota);
    // $nim = $pecahN[0];
    $nama_anggota = $_POST['nama'];
    $pecahN = explode(".", $nama_anggota);
    $id = $pecahN[0];
    $nim = $pecahN[1];
    $nama = $pecahN[2];

    $sql = $koneksi->query("SELECT * FROM buku WHERE nama_buku = '$nama_buku'") or die(mysqli_error($koneksi));
    while($data = $sql->fetch_assoc()) {
        $sisa = $data['jumlah_buku'];

        if($sisa == 0) {
            echo "<script>alert('Mohon maaf stok buku habis, peminjaman tidak dapat dilakukan.');document.location.href = 'transaksi_addData.php';</script>";
        } else {
            $koneksi->query("INSERT INTO tb_transaksi VALUES(null, '$isbn', '$nim', '$id', '$tgl_pinjam', '$tgl_kembali', 'pinjam')") or die(mysqli_error($koneksi));
            $koneksi->query("UPDATE buku SET jumlah_buku = (jumlah_buku-1) WHERE nama_buku = '$nama_buku'") or die(mysqli_error($koneksi));
            echo "<script>alert('Peminjaman buku berhasil.');document.location.href = 'transaksi.php';</script>";
        }
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

    <title>Tambah Data Peminjaman | Perpustakaan Jembatan Ilmu</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light text-uppercase">
        <div class="container">
            <a class="navbar-brand" href="#">
          <img src="frontend/images/book_icon.png" alt="" />
        </a>
            <a class="navbar-brand" href="index.php">PJL</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item mx-md-2">
                      <a class="nav-link" href="transaksi.php">Pinjam Buku</a>
                    </li>
                   
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
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
                <h3 class="fw-bold text-uppercase"><i class="bi bi-person-plus-fill"></i>&nbsp;Form Peminjaman Buku</h3>
            </div>
            <hr>
        </div>
        <div class="row my-2">
            <div class="col-md">
                <form action="" method="post" enctype="multipart/form-data">
                  <div class="mb-3">
                      <label class="form-label" for="nama_buku">Buku</label>
                     <select name="buku" id="nama_buku" class="form-control">
                          <option value="">-- Pilih Buku --</option>
                          <?php foreach ($buku as $row) : ?>
                          <?php
                          echo "<option value='$row[no_buku].$row[isbn].$row[nama_buku]'>$row[nama_buku]</option>";
                          ?>
                          <?php endforeach; ?>
                      </select>
                  </div>
                  <div class="mb-3">
                      <label class="form-label" for="nama_anggota">Nama</label>
                     <select name="nama" id="nama_anggota" class="form-control">
                          <option value="">-- Pilih Anggota --</option>
                          <?php foreach ($anggota as $row) : ?>
                          <?php
                          echo "<option value='$row[id_anggota].$row[nim].$row[nama_anggota]'>$row[nim].$row[nama_anggota]</option>";
                          ?>
                          <?php endforeach; ?>
                      </select>
                  </div>
                  <div class="mb-3">
                      <label class="form-label" for="tgl_pinjam">Tanggal Pinjam</label>
                      <input class="form-control w-50" id="tgl_pinjam" name="tgl_pinjam" type="text" readonly="" value="<?= $tgl_pinjam ?>">
                  </div>
                  <div class="mb-3">
                      <label class="form-label" for="tgl_kembali">Tanggal Kembali</label>
                      <input type="text" name="tgl_kembali" id="tgl_kembali" class="form-control w-50" readonly="" value="<?= $kembali ?>">
                  </div>
                  <hr>
                    <a href="transaksi.php" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary" name="tambah">Pinjam</button>
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