<?php

// Memanggil atau membutuhkan file function.php
require 'function.php';

// Mengambil data dari nis dengan fungsi get
// $status = $_GET['status'];
$status = ['status'];

// Jika fungsi hapus lebih dari 0/data terhapus, maka munculkan alert dibawah
if (hapus_laporan($status) == 1) {
    echo "<script>
                alert('Data laporan berhasil dihapus!');
                document.location.href = 'transaksi_laporan.php';
            </script>";
} else {
    // Jika fungsi hapus dibawah dari 0/data tidak terhapus, maka munculkan alert dibawah
    echo "<script>
            alert('Laporan gagal dihapus, hanya status kembali yang bisa dihapus!');
            document.location.href = 'transaksi_laporan.php';
        </script>";
}
