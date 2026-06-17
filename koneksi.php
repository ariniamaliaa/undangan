<?php
// Buka panel InfinityFree, masuk ke menu "MySQL Databases"
// Masukkan data sesuai yang ada di sana, jangan gunakan localhost!
$host = "sql213.infinityfree.com"; // Pastikan ini sesuai dengan "MySQL Hostname" di panel
$user = "if0_42200847";            // "MySQL Username"
$pass = "gv2qGXOjkz";  // Password database yang kamu set
$db   = "if0_42200847_db_undangan"; // "Database Name"

$conn = mysqli_connect($host, $user, $pass, $db);

// Cek apakah koneksi berhasil
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>