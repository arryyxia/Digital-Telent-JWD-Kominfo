    <?php include 'layout/header.php' ?>
    <?php include 'layout/navbar.php' ?>
    <?php include 'controller/Reservasi.php' ?>

    <main class="fs d-flex justify-content-center align-items-center">
        <img class="img-reservasi" src="assets/img/meze.png" alt="">
        <section class="reservasi">
            <h2 class="mb-3">Reservasi Online</h2>
            <div class="form-reservasi">
                <form action="controller/Reservasi.php" method="post">
                    <div class="mb-3 row">
                        <label for="namaRes" class="col-sm-3 col-form-label">Nama Reservasi</label>
                        <div class="col-sm-9">
                            <input type="name" class="form-control" id="namaRes">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="noTelp" class="col-sm-3 col-form-label">Nomor Telpon/HP</label>
                        <div class="col-sm-9">
                            <input type="tel" class="form-control" id="noTelp">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="waktuRes" class="col-sm-3 col-form-label">Waktu Reservasi</label>
                        <div class="col-sm-9">
                            <input type="datetime-local" minDate="0" class="form-control" id="waktuRes">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="kursi" class="col-sm-3 col-form-label">Jumlah Kursi</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="kursi">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="paket" class="col-sm-3 col-form-label">Pilih Paket</label>
                        <div class="col-sm-9 d-flex">
                            <div class="form-check pe-3">
                                <input class="form-check-input" type="radio" name="paket" id="reguler" value="reguler">
                                <label class="form-check-label" for="reguler">
                                    Reguler (1jt)
                                </label>
                            </div>
                            <div class="form-check pe-3">
                                <input class="form-check-input" type="radio" name="paket" id="ulangTahun" value="ulangTahun">
                                <label class="form-check-label " for="ulangTahun">
                                    Ulang Tahun (1.5jt)
                                </label>
                            </div>
                            <div class="form-check pe-3">
                                <input class="form-check-input" type="radio" name="paket" id="ruangMeeting" value="ruangMeeting">
                                <label class="form-check-label " for="ruangMeeting">
                                    Ruang Meeting (2jt)
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="lauk" class="col-sm-3 col-form-label">Pilih Lauk</label>
                        <div class="col-sm-9 row">
                            <div class="col-4">
                                <div class="form-check pe-3">
                                    <input class="form-check-input" type="checkbox" name="sate" id="sate" value="">
                                    <label class="form-check-label" for="sate">
                                        Sate (10k)
                                    </label>
                                </div>
                                <div class="form-check pe-3">
                                    <input class="form-check-input" type="checkbox" name="rendang" id="rendang" value="">
                                    <label class="form-check-label " for="rendang">
                                        Rendang (15k)
                                    </label>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check pe-3">
                                    <input class="form-check-input" type="checkbox" name="sayur" id="sayur" value="">
                                    <label class="form-check-label " for="sayur">
                                        Sayur (5k)
                                    </label>
                                </div>
                                <div class="form-check pe-3">
                                    <input class="form-check-input" type="checkbox" name="ayam" id="ayam" value="">
                                    <label class="form-check-label " for="ayam">
                                        Ayam (12k)
                                    </label>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check pe-3">
                                    <input class="form-check-input" type="checkbox" name="sosis" id="sosis" value="">
                                    <label class="form-check-label " for="sosis">
                                        Sosis (8k)
                                    </label>
                                </div>
                                <div class="form-check pe-3">
                                    <input class="form-check-input" type="checkbox" name="mie" id="mie" value="">
                                    <label class="form-check-label " for="mie">
                                        Mie (10k)
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-3 col-form-label">Harga Paket</label>
                        <div class="col-sm-9">
                            <input type="name" class="form-control" id="hargaPaket" readonly>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-3 col-form-label">Total Tagihan</label>
                        <div class="col-sm-9">
                            <input type="name" class="form-control" id="totalTagihan" readonly>
                        </div>
                    </div>
                    <div class="btn-reservasi d-flex justify-content-end">
                        <input class="btn btn-info px-5 py-2 me-3" onclick="hitungTotal()" id="hitung" name="hitung" type="submit" value="Hitung">
                        <input class="btn btn-success px-5 py-2 me-3" href="invoice.php" value="Kirim" type="submit">
                        <a class="btn btn-danger px-5 py-2 me-3" href="index.php">Kembali</a>
                    </div>
                </form>
            </div>
        </section>
    </main>
    <?php include 'layout/footer.php' ?>    
