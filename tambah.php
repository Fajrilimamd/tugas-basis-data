<link rel="stylesheet" type="text/css" href="style.css">

<form method="POST">
    Nama: <input type="text" name="nama"><br>
    Jurusan: <input type="text" name="jurusan"><br>
    Angkatan: <input type="number" name="angkatan"><br>
    <input type="submit" name="submit" value="Simpan">
</form>

<?php
include "config.php";
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $angkatan = $_POST['angkatan'];
    mysqli_query($koneksi, "INSERT INTO mahasiswa VALUES('', '$nama', '$jurusan', '$angkatan')");
    header("Location: index.php");
}
?>
