<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "db_undangan"
);

if(!$conn){
    die("Koneksi Gagal: " . mysqli_connect_error());
}
?>