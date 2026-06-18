<?php
include 'koneksi.php';

$id = $_GET['id'];

$data = mysqli_query($conn, "SELECT * FROM jasa_undangan WHERE id='$id'");
$d = mysqli_fetch_array($data);

if(isset($_POST['update'])){

    mysqli_query($conn,"UPDATE jasa_undangan SET
        nama='$_POST[nama]',
        tanggal='$_POST[tanggal]',
        lokasi='$_POST[lokasi]',
        paket='$_POST[paket]',
        harga='$_POST[harga]'
        WHERE id='$id'
    ");

    header("Location:index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit Pesanan</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    font-family:Arial,sans-serif;
    background:linear-gradient(135deg,#ffe4ec,#fff8f0);
    display:flex;
    justify-content:center;
    align-items:center;
    min-height:100vh;
}

.container{
    width:650px;
    background:#fff;
    padding:35px;
    border-radius:20px;
    box-shadow:0 0 20px rgba(0,0,0,0.2);
}

h2{
    text-align:center;
    color:#d63384;
    margin-bottom:30px;
    font-size:38px;
}

label{
    display:block;
    font-size:18px;
    font-weight:bold;
    margin-bottom:8px;
}

input,select{
    width:100%;
    padding:15px;
    margin-bottom:20px;
    border:1px solid #ccc;
    border-radius:10px;
    font-size:16px;
}

button{
    width:100%;
    padding:15px;
    background:#d63384;
    color:white;
    border:none;
    border-radius:10px;
    font-size:18px;
    cursor:pointer;
}

button:hover{
    background:#b02a6f;
}

</style>

</head>

<body>

<div class="container">
    
<h2 style="color:red;">INI FILE BARU</h2>

<form method="POST">

<label>Nama Pengantin</label>
<input
type="text"
name="nama"
value="<?php echo $d['nama']; ?>"
required>

<label>Tanggal Nikah</label>
<input
type="date"
name="tanggal"
value="<?php echo $d['tanggal']; ?>"
required>

<label>Lokasi</label>
<input
type="text"
name="lokasi"
value="<?php echo $d['lokasi']; ?>"
required>

<label>Paket</label>

<select name="paket" id="paket" onchange="isiHarga()" required>

<option value="">Pilih Paket</option>

<option value="Silver"
<?php if($d['paket']=="Silver") echo "selected"; ?>>
Silver
</option>

<option value="Gold"
<?php if($d['paket']=="Gold") echo "selected"; ?>>
Gold
</option>

<option value="Platinum"
<?php if($d['paket']=="Platinum") echo "selected"; ?>>
Platinum
</option>

</select>

<label>Harga</label>

<input
type="number"
name="harga"
id="harga"
readonly>

<button type="submit" name="update">Update</button>

</form>

</div>

<script>

function isiHarga(){

    let paket = document.getElementById("paket").value;

    if(paket=="Silver"){
        document.getElementById("harga").value=500000;
    }

    else if(paket=="Gold"){
        document.getElementById("harga").value=1000000;
    }

    else if(paket=="Platinum"){
        document.getElementById("harga").value=1500000;
    }

    else{
        document.getElementById("harga").value="";
    }

}

window.onload=isiHarga;

</script>

</body>
</html>