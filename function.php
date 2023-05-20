<?php
// Koneksi Database
$koneksi = new mysqli("localhost", "root", "", "web_yosi");

// koneksi ke database 000webhost
// $koneksi = new mysqli("localhost", "id20772599_root", "@Daniel321", "id20772599_web_yosi");

// membuat fungsi query dalam bentuk array
function query($query)
{
    // Koneksi database
    global $koneksi;

    $result = mysqli_query($koneksi, $query);

    // membuat varibale array
    $rows = [];

    // mengambil semua data dalam bentuk array
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

// Membuat fungsi tambah
function tambah($data)
{
    global $koneksi;

    $isbn = htmlspecialchars($data['isbn']);
    $kode_buku = htmlspecialchars($data['kode_buku']);
    $nama_buku = htmlspecialchars($data['nama_buku']);
    $tahun_terbit = htmlspecialchars($data['tahun_terbit']);
    $jml_halaman = htmlspecialchars($data['jml_halaman']);
    $kategori = htmlspecialchars($data['kategori']);
    $imprint = htmlspecialchars($data['imprint']);
    $sinopsis_buku = htmlspecialchars($data['sinopsis_buku']);
    $gambar = upload();
    $jumlah_buku = htmlspecialchars($data['jumlah_buku']);

    if (!$gambar) {
        return false;
    }

    $sql = "INSERT INTO buku VALUES (null,'$isbn','$kode_buku','$nama_buku','$tahun_terbit','$jml_halaman','$kategori','$imprint','$sinopsis_buku','$gambar', '$jumlah_buku')";

    mysqli_query($koneksi, $sql);

    return mysqli_affected_rows($koneksi);
}

function tambah_anggota($data2)
{
    global $koneksi;

    $nim = htmlspecialchars($data2['nim']);
	$nama = htmlspecialchars($data2['nama_anggota']);
	$tempat_lahir = htmlspecialchars($data2['tempat_lahir']);
	$tgl_lahir = htmlspecialchars($data2['tgl_lahir']);
	$jk = htmlspecialchars($data2['jk']);
	$prodi = htmlspecialchars($data2['prodi']);

    $sql = "INSERT INTO tb_anggota VALUES (null,'$nim', '$nama', '$tempat_lahir', '$tgl_lahir', '$jk', '$prodi')";

    mysqli_query($koneksi, $sql);

    return mysqli_affected_rows($koneksi);
}

// Membuat fungsi hapus
function hapus($isbn)
{
    global $koneksi;

    mysqli_query($koneksi, "DELETE FROM buku WHERE isbn = $isbn");
    return mysqli_affected_rows($koneksi);
}

function hapus_anggota($nim)
{
    global $koneksi;

    mysqli_query($koneksi, "DELETE FROM tb_anggota WHERE nim = $nim");
    return mysqli_affected_rows($koneksi);
}

// Membuat fungsi ubah
function ubah($data)
{
    global $koneksi;

    $isbn = $data['isbn'];
    $kode_buku = htmlspecialchars($data['kode_buku']);
    $nama_buku = htmlspecialchars($data['nama_buku']);
    $tahun_terbit = htmlspecialchars($data['tahun_terbit']);
    $jml_halaman = htmlspecialchars($data['jml_halaman']);
    $kategori = htmlspecialchars($data['kategori']);
    $imprint = htmlspecialchars($data['imprint']);
    $sinopsis_buku = htmlspecialchars($data['sinopsis_buku']);
    $jumlah_buku = htmlspecialchars($data['jumlah_buku']);

    $gambarLama = $data['gambarLama'];

    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }

    $sql = "UPDATE buku SET kode_buku = '$kode_buku' , nama_buku = '$nama_buku', tahun_terbit = '$tahun_terbit', jml_halaman = '$jml_halaman', kategori = '$kategori', imprint = '$imprint', sinopsis_buku = '$sinopsis_buku', gambar = '$gambar', jumlah_buku='$jumlah_buku' WHERE isbn = $isbn";

    mysqli_query($koneksi, $sql);

    return mysqli_affected_rows($koneksi);
}

function ubah_anggota($data2)
{
    global $koneksi;

    $nim = htmlspecialchars($data2['nim']);
	$nama = htmlspecialchars($data2['nama_anggota']);
	$tempat_lahir = htmlspecialchars($data2['tempat_lahir']);
	$tgl_lahir = htmlspecialchars($data2['tgl_lahir']);
	$jk = htmlspecialchars($data2['jk']);
	$prodi = htmlspecialchars($data2['prodi']);

    $sql = "UPDATE tb_anggota SET nim = '$nim', nama_anggota = '$nama', tempat_lahir = '$tempat_lahir', tgl_lahir = '$tgl_lahir', jk = '$jk', prodi = '$prodi' WHERE nim = $nim";

    mysqli_query($koneksi, $sql);

    return mysqli_affected_rows($koneksi);
}

// Membuat fungsi upload gambar
function upload()
{
    // Syarat
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // Jika tidak mengupload gambar atau tidak memenuhi persyaratan diatas maka akan menampilkan alert dibawah
    if ($error === 4) {
        echo "<script>alert('Pilih gambar terlebih dahulu!');</script>";
        return false;
    }

    // format atau ekstensi yang diperbolehkan untuk upload gambar adalah
    $extValid = ['jpg', 'jpeg', 'png'];
    $ext = explode('.', $namaFile);
    $ext = strtolower(end($ext));

    // Jika format atau ekstensi bukan gambar maka akan menampilkan alert dibawah
    if (!in_array($ext, $extValid)) {
        echo "<script>alert('Yang anda upload bukanlah gambar!');</script>";
        return false;
    }

    // Jika ukuran gambar lebih dari 3.000.000 byte maka akan menampilkan alert dibawah
    if ($ukuranFile > 3000000) {
        echo "<script>alert('Ukuran gambar anda terlalu besar!');</script>";
        return false;
    }

    // nama gambar akan berubah angka acak/unik jika sudah berhasil tersimpan
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ext;

    // memindahkan file ke dalam folde img dengan nama baru
    move_uploaded_file($tmpName, 'frontend/images/' . $namaFileBaru);

    return $namaFileBaru;
}

function terlambat($tgl_dateline, $tgl_kembali) {
	$tgl_dateline_pecah = explode('-', $tgl_dateline);
	$tgl_dateline_pecah = $tgl_dateline_pecah[2].'-'.$tgl_dateline_pecah[1].'-'.$tgl_dateline_pecah[0];

	$tgl_kembali_pecah = explode('-', $tgl_kembali);
	$tgl_kembali_pecah = $tgl_kembali_pecah[2].'-'.$tgl_kembali_pecah[1].'-'.$tgl_kembali_pecah[0];

	$selisih = strtotime($tgl_kembali_pecah) - strtotime($tgl_dateline_pecah);

	$selisih = $selisih/86400;
	if ($selisih >= 1) {
		$hasil_tgl = floor($selisih);
	}else{
		$hasil_tgl = 0;
	}
	return $hasil_tgl;
}