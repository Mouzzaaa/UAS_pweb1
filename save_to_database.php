<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tokojersey";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $productName = $_POST["product_name"];
    $productPrice = $_POST["product_price"];

    // Buat koneksi ke database
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Periksa koneksi
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Buat query untuk menyimpan data ke tabel pembeli
    $sql = "INSERT INTO pembeli (nama_produk, harga) VALUES (?, ?)";

    // Persiapkan statement
    $stmt = $conn->prepare($sql);

    // Bind parameter ke statement
    $stmt->bind_param("ss", $productName, $productPrice);

    // Eksekusi statement
    if ($stmt->execute()) {
        echo "Product added to database successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Tutup koneksi
    $stmt->close();
    $conn->close();
}
?>
