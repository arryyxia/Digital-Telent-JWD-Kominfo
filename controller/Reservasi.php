<?php
    include_once 'model/config.php'; // File konfigurasi database

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $namaReservasi          = isset($_POST['namaReservasi']) ? $_POST['namaReservasi'] : '';
        $noTelp                 = isset($_POST['noTelp']) ? $_POST['noTelp'] : '';
        // Mengubah format tanggal dari dd/mm/yyyy hh:mm menjadi yyyy-mm-dd hh:mm:ss
        $waktuReservasi_input   = isset($_POST['waktuReservasi']) ? $_POST['waktuReservasi'] : '';
        $waktuReservasi         = date('Y-m-d H:i:s', strtotime(str_replace('/', '-', $waktuReservasi_input)));
        $kursi                  = isset($_POST['kursi']) ? $_POST['kursi'] : '';
        $paket                  = isset($_POST['paket']) ? $_POST['paket'] : '';
        $sate                   = isset($_POST['sate']) ? 1 : 0;
        $rendang                = isset($_POST['rendang']) ? 1 : 0;
        $sayur                  = isset($_POST['sayur']) ? 1 : 0;
        $ayam                   = isset($_POST['ayam']) ? 1 : 0;
        $sosis                  = isset($_POST['sosis']) ? 1 : 0;
        $mie                    = isset($_POST['mie']) ? 1 : 0;
        $hargaPaket             = isset($_POST['hargaPaket']) ? $_POST['hargaPaket'] : '';
        $totalTagihan           = isset($_POST['totalTagihan']) ? $_POST['totalTagihan'] : '';
        
        // Query untuk menyimpan data reservasi ke dalam tabel
        $query = "INSERT INTO reservasi (namaReservasi, noTelp, waktuReservasi, kursi, paket, sate, rendang, sayur, ayam, sosis, mie, hargaPaket, totalTagihan)
                    VALUES ('$namaReservasi', '$noTelp', '$waktuReservasi', '$kursi', '$paket', '$sate', '$rendang', '$sayur', '$ayam', '$sosis', '$mie', '$hargaPaket', '$totalTagihan')";
    
        if ($link->query($query) === TRUE) {
            // Mendapatkan idReservasi yang baru saja di-generate
            $idReservasi = $link->insert_id;

            // Redirect ke invoice.php dengan idReservasi
            echo "<meta http-equiv='refresh' content='1; url=../invoice.php?idReservasi=$idReservasi'>";
            exit;
        } else {
                echo "Error: " . $query . "<br>" . $link->error;
            }

    }
?>
    