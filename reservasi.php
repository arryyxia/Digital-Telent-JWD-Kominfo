    <?php include 'layout/header.php'; ?>
    <?php include 'controller/Reservasi.php'; ?>
    <?php include 'layout/navbar.php'; ?>

    <main class="fs d-flex justify-content-center align-items-center">
        <img class="img-reservasi" src="assets/img/meze.png" alt="">
        <section class="reservasi">
            <h2 class="mb-3">Reservasi Online</h2>
            <div class="form-reservasi">
                <form action="controller/Reservasi.php" onsubmit="return validateForm()" method="post">
                    <div class="mb-3 row">
                        <label for="namaReservasi" class="col-sm-3 col-form-label">Nama Reservasi</label>
                        <div class="col-sm-9">
                            <input type="name" class="form-control" id="namaReservasi" name="namaReservasi" reqiured>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="noTelp" class="col-sm-3 col-form-label">Nomor Telpon/HP</label>
                        <div class="col-sm-9">
                            <input type="tel" class="form-control" id="noTelp" name="noTelp">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="waktuReservasi" class="col-sm-3 col-form-label">Waktu Reservasi</label>
                        <div class="col-sm-9">
                            <input type="datetime-local" class="form-control" id="waktuReservasi" name="waktuReservasi" minDate="0" reqiured>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="kursi" class="col-sm-3 col-form-label">Jumlah Kursi</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="kursi" name="kursi" reqiured>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="paket" class="col-sm-3 col-form-label">Pilih Paket</label>
                        <div class="col-sm-9 d-flex">
                            <div class="form-check pe-3">
                                <input type="radio" class="form-check-input" name="paket" id="reguler" value="reguler" oninput="hitungTotal()" reqiured>
                                <label class="form-check-label" for="reguler">
                                    Reguler (1jt)
                                </label>
                            </div>
                            <div class="form-check pe-3">
                                <input type="radio" class="form-check-input" name="paket" id="ulangTahun" value="ulangTahun" oninput="hitungTotal()" reqiured>
                                <label class="form-check-label " for="ulangTahun">
                                    Ulang Tahun (1.5jt)
                                </label>
                            </div>
                            <div class="form-check pe-3">
                                <input type="radio" class="form-check-input" name="paket" id="ruangMeeting" value="ruangMeeting" oninput="hitungTotal()" reqiured>
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
                                    <input type="checkbox" class="form-check-input" id="sate" name="sate" value="" oninput="hitungTotal()" reqiured>
                                    <label class="form-check-label" for="sate">
                                        Sate (10k)
                                    </label>
                                </div>
                                <div class="form-check pe-3">
                                    <input type="checkbox" class="form-check-input"  naid="rendang"me="rendang" value="" oninput="hitungTotal()" reqiured>
                                    <label class="form-check-label " for="rendang">
                                        Rendang (15k)
                                    </label>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check pe-3">
                                    <input type="checkbox" class="form-check-input" id="sayur" name="sayur" value="" oninput="hitungTotal()" reqiured>
                                    <label class="form-check-label " for="sayur">
                                        Sayur (5k)
                                    </label>
                                </div>
                                <div class="form-check pe-3">
                                    <input type="checkbox" class="form-check-input" id="ayam" name="ayam" value="" oninput="hitungTotal()" reqiured>
                                    <label class="form-check-label " for="ayam">
                                        Ayam (12k)
                                    </label>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check pe-3">
                                    <input type="checkbox" class="form-check-input"  id="sosis" name="sosis" value="" oninput="hitungTotal()" reqiured>
                                    <label class="form-check-label " for="sosis">
                                        Sosis (8k)
                                    </label>
                                </div>
                                <div class="form-check pe-3">
                                    <input type="checkbox" class="form-check-input"id="mie" name="mie" value="" oninput="hitungTotal()" reqiured>
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
                            <input type="price" class="form-control" id="hargaPaket" name="hargaPaket" readonly reqiured>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-3 col-form-label">Total Tagihan</label>
                        <div class="col-sm-9">
                            <input type="price" class="form-control" id="totalTagihan" name="totalTagihan" readonly reqiured>
                        </div>
                    </div>
                    <div class="btn-reservasi d-flex justify-content-end">
                        <a class="btn btn-danger px-5 py-2 me-3" href="index.php">Kembali</a>
                        <input class="btn btn-success px-5 py-2 me-3" value="Kirim" onclick="validateForm()" type="submit">
                    </div>
                </form>
            </div>
        </section>
    </main>
    <?php include 'layout/footer.php' ?>    
