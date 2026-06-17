<?php
// Konfigurasi Database InfinityFree Anda
$host = "sql213.infinityfree.com";
$user = "if0_42200847";
$pass = "gv2qGXOjKz"; // << PASTIKAN ini adalah password akun cPanel/vPanel Anda!
$db   = "if0_42200847_db_undangan";

// Mengaktifkan pelaporan error bawaan PHP (sangat membantu saat proses development)
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    // Mencoba melakukan koneksi ke server MySQL
    $conn = mysqli_connect($host, $user, $pass, $db);
    
    // Set charset ke utf8 agar pembacaan teks/karakter unik tidak error
    mysqli_set_charset($conn, "utf8");

} catch (Exception $e) {
    // Jika koneksi gagal, kode di bawah ini akan menghentikan loading website 
    // dan langsung menampilkan penyebab error yang sebenarnya di layar browser.
    die("Gagal terhubung ke database. Pesan Error: " . $e->getMessage());
}
?>