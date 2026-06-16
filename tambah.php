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

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Pesanan</title>

    <style>
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
    }

    body{
        font-family:Arial, sans-serif;
        background:linear-gradient(135deg,#ffe4ec,#fff8f0);
    }

    .container{
        width:420px;
        margin:50px auto;
        background:white;
        padding:25px;
        border-radius:15px;
        box-shadow:0 0 15px rgba(0,0,0,0.2);
    }

    h2{
        text-align:center;
        color:#d63384;
        margin-bottom:20px;
    }

    label{
        display:block;
        margin-bottom:5px;
        font-weight:bold;
    }

    input,select{
        width:100%;
        padding:10px;
        margin-bottom:15px;
        border:1px solid #ccc;
        border-radius:8px;
    }

    button{
        width:100%;
        padding:12px;
        background:#d63384;
        color:white;
        border:none;
        border-radius:8px;
        cursor:pointer;
    }

    button:hover{
        background:#b02a6f;
    }
    </style>

</head>
<body>

<div class="container">

<h2>💍 Tambah Pesanan 💍</h2>

<form method="POST">

<label>Nama Pengantin</label>
<input type="text" name="nama">

<label>Tanggal Nikah</label>
<input type="date" name="tanggal">

<label>Lokasi</label>
<input type="text" name="lokasi">

<label>Paket</label>
<select name="paket" onchange="isiHarga(this)">
    <option value="">Pilih Paket</option>
    <option value="Silver" data-harga="500000">Silver</option>
    <option value="Gold" data-harga="1000000">Gold</option>
    <option value="Platinum" data-harga="1500000">Platinum</option>
</select>

<label>Harga</label>
<input type="number" name="harga" id="harga">

<button name="simpan">Simpan</button>

</form>

</div>

<script>
function isiHarga(select){
    let harga = select.options[select.selectedIndex].getAttribute("data-harga");
    document.getElementById("harga").value = harga;
}
</script>

</body>
</html>