<?php
// Memanggil atau membutuhkan file function.php
require 'function.php';

// Jika dataBuku diklik maka
if (isset($_POST['dataBuku'])) {
    $output = '';

    // mengambil data buku dari isbn yang berasal dari dataBuku
    $sql = "SELECT * FROM buku WHERE isbn = '" . $_POST['dataBuku'] . "'";
    $result = mysqli_query($koneksi, $sql);

    $output .= '<div class="table-responsive">
                        <table class="table table-bordered">';
    foreach ($result as $row) {
        $output .= '<tr align="center">
                            <td colspan="2"><img src="frontend/images/' . $row['gambar'] . '" width="50%"></td>
                        </tr>
                        <tr>
                            <th width="40%">ISBN</th>
                            <td width="60%">' . $row['isbn'] . '</td>
                        </tr>
                        <tr>
                            <th width="40%">Kode Buku</th>
                            <td width="60%">' . $row['kode_buku'] . '</td>
                        </tr>
                        <tr>
                            <th width="40%">Nama Buku</th>
                            <td width="60%">' . $row['nama_buku'] . '</td>
                        </tr>
                        <tr>
                            <th width="40%">Tahun Terbit</th>
                            <td width="60%">' . $row['tahun_terbit'] . '</td>
                        </tr>
                        <tr>
                            <th width="40%">Jumlah Halaman</th>
                            <td width="60%">' . $row['jml_halaman'] . '</td>
                        </tr>
                        <tr>
                            <th width="40%">Kategori</th>
                            <td width="60%">' . $row['kategori'] . '</td>
                        </tr>
                        <tr>
                            <th width="40%">Imprint</th>
                            <td width="60%">' . $row['imprint'] . '</td>
                        </tr>
                        <tr>
                            <th width="40%">Sinopsis Buku</th>
                            <td width="60%">' . $row['sinopsis_buku'] . '</td>
                        </tr>
                        <tr>
                            <th width="40%">Jumlah Buku</th>
                            <td width="60%">' . $row['jumlah_buku'] . '</td>
                        </tr>
                        ';
    }
    $output .= '</table></div>';
    // Tampilkan $output
    echo $output;
}
