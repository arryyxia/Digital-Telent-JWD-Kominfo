    <?php include 'layout/header.php'; ?>
    <?php include 'controller/Invoice.php'; ?>
    <?php include 'layout/navbar.php'; ?>

    <main class="fs d-flex justify-content-center align-items-center">
        <section class="invoice">
            <div class="border-bottom">
                <h2 class="text-center">Terimakasih Telah Melakukan Reservasi</h2>
            </div>

            <div class="mt-3 justify-content-center">
                <div class="row ">
                    <div class="col-4"><p>Nama Reservasi</p></div>
                    <div class="col-8"><p><?= $namaReservasi ?></p></div>
                </div>
                <div class="row">
                    <div class="col-4"><p>Nomor Telepon/HP</p></div>
                    <div class="col-8"><p><?= $noTelp ?></p></div>
                </div>
                <div class="row">
                    <div class="col-4"><p>Jumlah Kursi</p></div>
                    <div class="col-8"><p><?= $kursi ?></p></div>
                </div>
                <div class="row">
                    <div class="col-4"><p>Waktu Reservasi</p></div>
                    <div class="col-8"><p><?= $waktuReservasi ?></p></div>
                </div>
                <div class="row">
                    <div class="col-4"><p>Paket Promo</p></div>
                    <div class="col-8"><p><?= $paket ?></p></div>
                </div>
                <div class="row">
                    <div class="col-4"><p>Harga Paket</p></div>
                    <div class="col-8"><p><?= $hargaPaket ?></p></div>
                </div>
                <div class="row">
                    <div class="col-4"><p>Total Tagihan</p></div>
                    <div class="col-8"><p><?= $totalTagihan ?></p></div>
                </div>
            </div>
            <div class="order-lagi">               
                <h3 class="text-center">Pesan Lagi?</h3>
                <div class="d-flex justify-content-center mt-2 py-2">
                    <a href="reservasi.php" class="btn btn-success align-items-center px-4 ms-2">Iya</a>
                    <a href="index.php" class="btn btn-danger align-items-center px-4 ms-2 ">Tidak</a>
                </div>
            </div>
        </section>
    </main>
    <?php include 'layout/footer.php' ?>
