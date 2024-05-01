<?php 
    include 'config.php';
    
    $idReservasi = $_GET['idReservasi'];
    $dataInvoice = mysqli_query($link, "select * from reservasi where idReservasi=$idReservasi");

    $invoice = mysqli_fetch_assoc($dataInvoice);

    $namaReservasi = $invoice['namaReservasi'];
    $noTelp = $invoice['noTelp'];
    $waktuReservasi = $invoice['waktuReservasi'];
    $kursi = $invoice['kursi'];
    $paket = $invoice['paket'];
    $sate = $invoice['sate'];
    $rendang = $invoice['rendang'];
    $sayur = $invoice['sayur'];
    $ayam = $invoice['ayam'];
    $sosis = $invoice['sosis'];
    $mie = $invoice['mie'];
    $hargaPaket = $invoice['hargaPaket'];
    $totalTagihan = $invoice['totalTagihan'];
?>
                                           