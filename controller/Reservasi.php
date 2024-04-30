<?php
include_once 'config.php'; // File konfigurasi database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $namaRes = $_POST['namaRes'];
    $noTelp = $_POST['noTelp'];
    $waktuRes = $_POST['waktuRes'];
    $kursi = $_POST['kursi'];
    $paket = $_POST['paket'];
    $lauk = isset($_POST['lauk']) ? implode(', ', $_POST['lauk']) : '';
    $hargaPaket = $_POST['hargaPaket'];
    $totalTagihan = $_POST['totalTagihan'];

    // Query untuk menyimpan data reservasi ke dalam tabel
    $query = "INSERT INTO reservasi (nama_reservasi, no_telp, waktu_reservasi, jumlah_kursi, paket, lauk, harga_paket, total_tagihan)
                VALUES ('$namaRes', '$noTelp', '$waktuRes', '$kursi', '$paket', '$lauk', '$hargaPaket', '$totalTagihan')";

    if (mysqli_query($link, $query)) {
        echo "Reservasi berhasil disimpan.";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($link);
    }

    mysqli_close($link);
}
?>