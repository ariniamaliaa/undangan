<?php
include 'koneksi.php';

if(isset($_POST['simpan'])){

    mysqli_query($conn,"
        INSERT INTO jasa_undangan
        VALUES(
            '',
            '$_POST[nama]',
            '$_POST[tanggal]',
            '$_POST[lokasi]',
            '$_POST[paket]',
            '$_POST[harga]'
        )
    ");

    header("Location:index.php");
}
?>
<style>
body{
    text-align: center;
    font-family: Arial, sans-serif;
}

form{
    width: 300px;
    margin: auto;
}

input, select{
    width: 100%;
    padding: 8px;
    margin-bottom: 15px;
    text-align: center;
}
</style>

<h2>Tambah Pesanan</h2>

<form method="POST">

Nama Pengantin <br>
<input type="text" name="nama"><br><br>

Tanggal Nikah <br>
<input type="date" name="tanggal"><br><br>

Lokasi <br>
<input type="text" name="lokasi"><br><br>

Paket <br>
<select name="paket" onchange="isiHarga(this)">
    <option value="">Pilih Paket</option>
    <option value="Silver" data-harga="500000">Silver</option>
    <option value="Gold" data-harga="1000000">Gold</option>
    <option value="Platinum" data-harga="1500000">Platinum</option>
</select>

Harga <br>
<input type="number" name="harga" id="harga"><br><br>

<button name="simpan">Simpan</button>

</form>

<script>
function isiHarga(select){
    let harga = select.options[select.selectedIndex].getAttribute("data-harga");
    document.getElementById("harga").value = harga;
}
</script>