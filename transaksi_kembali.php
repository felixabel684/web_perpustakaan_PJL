<?php
// require 'function.php';

// $status = $_GET['status'];
// $transaksi = query("UPDATE tb_transaksi SET status = $status WHERE id_transaksi = $id_transaksi")[0];
// $id_transaksi = $_GET['id'];
// $id_judul_buku = $_GET['nama_buku'];

// query("UPDATE tb_transaksi SET status = 'kembali' WHERE id_transaksi = $id_transaksi");

// query("UPDATE buku SET jumlah_buku = (jumlah_buku+1) WHERE nama_buku = '$id_judul_buku'");

// 	echo "<script>alert('Proses, kembalian buku berhasil.');document.location.href = 'transaksi.php';</script>";

// 	if (kembali($_POST) > 1) {

//     	echo "<script>alert('Proses, kembalian buku berhasil.');document.location.href = 'transaksi.php';</script>";
// } else {
//     // Jika fungsi hapus dibawah dari 0/data tidak terhapus, maka munculkan alert dibawah
//     echo "<script>
//             alert('Buku gagal dikembalikan!');
//             document.location.href = 'transaksi.php';
//         </script>";
// }

// if ($status == 'kembali') {
	
//         query("UPDATE buku SET jumlah_buku = (jumlah_buku+1) WHERE no_buku = '$no_buku'");


//     }else{
//         echo "<script>
//             alert('Buku gagal dikembalikan!');
//             document.location.href = 'data_buku.php';
//         </script>";
//     }

$koneksi = new mysqli("localhost", "root", "", "web_yosi");
 
$id_transaksi = $_GET['id'];
$id_judul_buku = $_GET['nama_buku'];

$koneksi->query("UPDATE tb_transaksi SET status = 'kembali' WHERE id_transaksi = $id_transaksi") or die(mysqli_error($koneksi));

$koneksi->query("UPDATE buku SET jumlah_buku = (jumlah_buku+1) WHERE nama_buku = '$id_judul_buku'") or die(mysqli_error($koneksi));

	echo "<script>alert('Proses, pengembalian buku berhasil.');document.location.href = 'transaksi.php';</script>";



?>