<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="ht)tps://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Historia Meze Grill</title>
</head>
<body>
    
    <header class="navigation d-flex align-items-center justify-content-between container">
        <h2 class="fw-semibold">
            Historia Meze Grill<span class="text-danger">.</span>
        </h2>
        <nav>
            <a href="index.php">Beranda</a>
            <a href="index.php">Paket Reservasi</a>
            <a class="btn btn-danger text-white" href="reservasi.php">Reservasi</a>
        </nav>
    </header>
    <main class="fs d-flex justify-content-center align-items-center">
        <img class="img-reservasi" src="assets/img/meze.png" alt="">
        <section class="reservasi">
            <h2 class="mb-3">Reservasi Online</h2>
                <div class="form-reservasi">
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
                        <label for="paket" class="col-sm-3 col-form-label">Pilih Lauk</label>
                        <div class="col-sm-9 row">
                            <div class="col-4">
                                <div class="form-check pe-3">
                                    <input class="form-check-input" type="checkbox" name="sate" id="sate" value="sate">
                                    <label class="form-check-label" for="sate">
                                        Sate (10k)
                                    </label>
                                </div>
                                <div class="form-check pe-3">
                                    <input class="form-check-input" type="checkbox" name="rendang" id="rendang" value="rendang">
                                    <label class="form-check-label " for="rendang">
                                        Rendang (15k)
                                    </label>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check pe-3">
                                    <input class="form-check-input" type="checkbox" name="sayur" id="sayur" value="sayur">
                                    <label class="form-check-label " for="sayur">
                                        Sayur (5k)
                                    </label>
                                </div>
                                <div class="form-check pe-3">
                                    <input class="form-check-input" type="checkbox" name="ayam" id="ayam" value="ayam">
                                    <label class="form-check-label " for="ayam">
                                        Ayam (12k)
                                    </label>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check pe-3">
                                    <input class="form-check-input" type="checkbox" name="sosis" id="sosis" value="sosis">
                                    <label class="form-check-label " for="sosis">
                                        Sosis (8k)
                                    </label>
                                </div>
                                <div class="form-check pe-3">
                                    <input class="form-check-input" type="checkbox" name="mie" id="mie" value="mie">
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
                            <input type="name" class="form-control" id="hargaPaket">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-3 col-form-label">Total Tagihan</label>
                        <div class="col-sm-9">
                            <input type="name" class="form-control" id="totalTagihan">
                        </div>
                    </div>
                    <div class="btn-reservasi d-flex justify-content-end">
                        <input class="btn btn-info px-5 py-2 me-3" onclick="hitungTotal()" id="hitung" name="hitung" type="submit" value="Hitung">
                        <input class="btn btn-success px-5 py-2 me-3" href="invoice.php" value="Kirim" type="submit">
                        <a class="btn btn-danger px-5 py-2 me-3" href="index.php">Kembali</a>
                    </div>
                </div>
        </section>
    </main>
    <!-- Footer -->
    <footer class="">
        
    </footer>
    <!-- Bootstrap -->
    <script>
        function hitungTotal() {
            let jumKursi = parseInt(document.getElementById('kursi').value);
            let paket = 0;
            if(document.getElementById('reguler').checked){
                paket = 1000000;
            }
            else if(document.getElementById('ulangTahun').checked){
                paket = 1500000;
            }
            else if(document.getElementById('ruangMeeting').checked){
                paket = 2000000;
            }

            let sate = document.getElementById('sate').checked ? 10000 : 0;
            let rendang = document.getElementById('rendang').checked ? 15000 : 0;
            let sayur = document.getElementById('sayur').checked ? 5000 : 0;
            let ayam = document.getElementById('ayam').checked ? 12000 : 0;
            let sosis = document.getElementById('sosis').checked ? 8000 : 0;
            let mie = document.getElementById('mie').checked ? 12000 : 0;

            let makananTotal = sate + rendang + sayur + ayam + sosis + mie;
            let totalTagihan = jumKursi * makananTotal + paket;

            document.getElementById('hargaPaket').value = paket;
            document.getElementById('totalTagihan').value = totalTagihan;
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>