<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
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
                        <label for="paket" class="col-sm-3 col-form-label">Pilih Makanan</label>
                        <div class="col-sm-9 row">
                            <div class="col-6">
                                <div class="form-check pe-3">
                                    <input class="form-check-input" type="radio" name="sate" id="sate" value="sate">
                                    <label class="form-check-label" for="sate">
                                        Sate Daging (20k)
                                    </label>
                                </div>
                                <div class="form-check pe-3">
                                    <input class="form-check-input" type="radio" name="nasgor" id="nasgor" value="nasgor">
                                    <label class="form-check-label " for="nasgor">
                                        Nasi Goreng (25k)
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-check pe-3">
                                    <input class="form-check-input" type="radio" name="steak" id="steak" value="steak">
                                    <label class="form-check-label " for="steak">
                                        Daging Steak (50k)
                                    </label>
                                </div>
                                <div class="form-check pe-3">
                                    <input class="form-check-input" type="radio" name="ayamBakar" id="ayamBakar" value="ayamBakar">
                                    <label class="form-check-label " for="ayamBakar">
                                        Ayam Bakar (30k)
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-3 col-form-label">Harga Paket</label>
                        <div class="col-sm-9">
                            <input type="name" class="form-control" id="namaReservasi" value="java">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-3 col-form-label">Total Tagihan</label>
                        <div class="col-sm-9">
                            <input type="name" class="form-control" id="namaReservasi">
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
    <script src="assets/js/main.js">
        jumKursi = document.getElementById('kursi').value;
        hitung = document.getElementById('hitung');
        
        totalTagihan = 0;

        if(document.getElementById('reguler')){
            totalTagihan+=1000000;
        }
        if(document.getElementById('ulangTahun')){
            totalTagihan+=1500000;
        }
        if(document.getElementById('ruangMeeting')){
            totalTagihan+=2000000;
        }
        if(document.getElementById('sate')){
            totalTagihan+=20000;
        }
        if(document.getElementById('nasiGoreng')){
            totalTagihan+=25000;
        }
        if(document.getElementById('steak')){
            totalTagihan+=50000;
        }
        if(document.getElementById('ayamBakar')){
            totalTagihan+=30000;
        }

        function hitungTotal(jumKursi, paket, makanan){
            alert(jumKursi * makanan + paket);
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>