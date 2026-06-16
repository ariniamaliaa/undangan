<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Jasa Undangan Pernikahan</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f4f4f4;
        }

        table{
            margin: auto;
            border-collapse: collapse;
            width: 80%;
            background: white;
        }

        th, td{
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }

        th{
            background-color: pink;
        }
           a{
            text-decoration: none;
            background-color: pink;
            color: black;
            padding: 8px 12px;
            border-radius: 5px;
        }
    </style>
<html>
<head>
    <title>Jasa Undangan Pernikahan</title>
</head>
<body>

<h2>Data Pesanan Undangan Pernikahan</h2>

<a href="tambah.php">Tambah Pesanan</a>

<br><br>

<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>Nama Pengantin</th>
        <th>Tanggal Nikah</th>
        <th>Lokasi</th>
        <th>Paket</th>
        <th>Harga</th>
        <th>Aksi</th>
    </tr>

<?php
$no = 1;
$data = mysqli_query($conn,"SELECT * FROM jasa_undangan");

while($d = mysqli_fetch_array($data)){
?>
<tr>
    <td><?= $no++; ?></td>
    <td><?= $d['nama_pengantin']; ?></td>
    <td><?= $d['tanggal_nikah']; ?></td>
    <td><?= $d['lokasi']; ?></td>
    <td><?= $d['paket']; ?></td>
    <td>Rp <?= number_format($d['harga']); ?></td>
    <td>
        <a href="edit.php?id=<?= $d['id']; ?>">Edit</a>
        |
        <a href="hapus.php?id=<?= $d['id']; ?>">Hapus</a>
    </td>
</tr>
<?php } ?>

</table>

</body>
</html>