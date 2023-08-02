<?php
$conn = new mysqli("localhost", "root", "", "monitoring_spk");
if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
}
?>

<?php
$host = 'localhost'; // Nama hostnya
$username = 'root'; // Username
$password = ''; // Password (Isi jika menggunakan password)
$database = 'monitoring_spk'; // Nama databasenya

// Koneksi ke MySQL dengan PDO
$pdo = new PDO('mysql:host='.$host.';dbname='.$database, $username, $password);
?>