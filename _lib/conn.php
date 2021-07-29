<?php

$dbname = 'db_perpustakaan';
$host = 'localhost';
$user = 'root';
$pass = '';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
} catch (PDOException $e) {
    echo "Gagal melakukan koneksi. pesan : " . $e->getMessage();
}
