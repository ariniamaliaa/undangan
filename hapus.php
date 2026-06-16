<?php
include 'koneksi.php';

$id = $_GET['id'];

mysqli_query(
    $conn,
    "DELETE FROM jasa_undangan WHERE id='$id'"
);

header("Location:index.php");
?>