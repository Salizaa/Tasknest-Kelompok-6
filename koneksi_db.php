<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "taskly";
$port = 3307;

// Buat koneksi tanpa menggunakan argumen tambahan yang tidak valid
$mysql = new mysqli($servername, $username, $password, $database, $port);

if ($mysql->connect_error) {
    die("Connection failed: " . $mysql->connect_error . "\nError Code: " . $mysql->connect_errno);
} else {
    echo "Connection successful to database '$database' on server '$servername' as user '$username'.<br>";
}

// Cek apakah database ada
if (!$mysql->select_db($database)) {
    die("Error: Database '$database' tidak ditemukan. " . $mysql->error);
} else {
    echo "Database '$database' berhasil dipilih.<br>";
}
