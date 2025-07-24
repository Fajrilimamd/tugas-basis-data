<link rel="stylesheet" type="text/css" href="style.css">

<?php
include "config.php";
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id='$id'");
$d = mysqli_fetch_array($data);
?>

<form method="POST">
    Nama: <input type="text" name="nama" value="<?= $d['nama'] ?>"><br>
    Jurusan: <input type="text" name="jurusan" value="<?= $d['jurusan'] ?>"><br>
    Angkatan: <input type="number" name="angkatan" value="<?= $d['angkatan'] ?>"><br>
    <input type="submit" name="update" value="Update">
</form>

<?php
if (isset($_POST['update'])) {
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $angkatan = $_POST['angkatan'];
    mysqli_query($koneksi, "UPDATE mahasiswa SET nama='$nama', jurusan='$jurusan', angkatan='$angkatan' WHERE id='$id'");
    header("Location: index.php");
}
?>
