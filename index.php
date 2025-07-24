<link rel="stylesheet" type="text/css" href="style.css">

<?php
include "config.php";
$data = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
?>
<h2>Data Mahasiswa</h2>
<a href="tambah.php">Tambah Data</a>
<table border="1">
    <tr><th>No</th><th>Nama</th><th>Jurusan</th><th>Angkatan</th><th>Aksi</th></tr>
    <?php
    $no = 1;
    while($d = mysqli_fetch_array($data)) {
        echo "<tr>
            <td>$no</td>
            <td>{$d['nama']}</td>
            <td>{$d['jurusan']}</td>
            <td>{$d['angkatan']}</td>
            <td>
                <a href='edit.php?id={$d['id']}'>Edit</a> |
                <a href='hapus.php?id={$d['id']}'>Hapus</a>
            </td>
        </tr>";
        $no++;
    }
    ?>
</table>
