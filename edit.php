<?php
include 'koneksi.php';

$id = $_GET['id'];

$data = mysqli_query(
    $conn,
    "SELECT * FROM jasa_undangan WHERE id='$id'"
);

$d = mysqli_fetch_array($data);

if(isset($_POST['update'])){

    mysqli_query($conn,"
        UPDATE jasa_undangan SET
        nama_pengantin='$_POST[nama]',
        tanggal_nikah='$_POST[tanggal]',
        lokasi='$_POST[lokasi]',
        paket='$_POST[paket]',
        harga='$_POST[harga]'
        WHERE id='$id'
    ");

    header("Location:index.php");
}
?>

<h2>Edit Pesanan</h2>

<form method="POST">

Nama Pengantin <br>
<input type="text" name="nama"
value="<?= $d['nama_pengantin']; ?>"><br><br>

Tanggal Nikah <br>
<input type="date" name="tanggal"
value="<?= $d['tanggal_nikah']; ?>"><br><br>

Lokasi <br>
<input type="text" name="lokasi"
value="<?= $d['lokasi']; ?>"><br><br>

Paket <br>
<input type="text" name="paket"
value="<?= $d['paket']; ?>"><br><br>

Harga <br>
<input type="number" name="harga"
value="<?= $d['harga']; ?>"><br><br>

<button name="update">Update</button>

</form>