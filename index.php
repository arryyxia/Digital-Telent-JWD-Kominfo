    <?php include 'layout/header.php' ?>
    <?php include 'layout/navbar.php' ?>


    
    <main>
        <section id="beranda" class="hero d-flex align-items-center justify-content-center">
            <div class="container-md d-flex align-items-center row">
                <div class="konten col-6 align-items-center">
                    <h1 class="mb-3">Nikmati makanan yang sehat dan nikmat</h1>
                    <a class="btn btn-danger text-white" href="reservasi.php">Reservasi</a>
                </div>
                <iframe class="col-6" width="500" height="400" src="https://www.youtube.com/embed/WW0SLuX8HsI" title="Restaurant Promo Video / Historia Meze Grill / High Wycombe" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </section>
        
        <section id="paket">
            <div class="title text-center"><h2>Paket Promo!</h2></div>
            <div class="d-flex">
                <div class="ruang-meeting d-flex align-items-end">
                    <div class="konten-promo p-5">
                        <h3 class="text-white mb-3">Reguler</h3>
                        <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum exercitationem nulla in minima cum totam architecto modi voluptas aut perferendis.</p>
                        <a class="btn btn-danger text-white" href="reservasi.php?paket=reguler">Reservasi</a>
                    </div>
                </div>
                <div class="ulang-tahun d-flex align-items-end">
                    <div class="konten-promo p-5">
                        <h3 class="text-white mb-3">Ulang Tahun</h3>
                        <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum exercitationem nulla in minima cum totam architecto modi voluptas aut perferendis.</p>
                        <a class="btn btn-danger text-white" href="reservasi.php?paket=ulangTahun">Reservasi</a>
                    </div>
                </div>
                <div class="bukber d-flex align-items-end">
                    <div class="konten-promo p-5">
                        <h3 class="text-white mb-3">Ruang Meeting Profesional</h3>
                        <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum exercitationem nulla in minima cum totam architecto modi voluptas aut perferendis.</p>
                        <a class="btn btn-danger text-white" href="reservasi.php?paket=ruangMeeting">Reservasi</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
        
    <?php include 'layout/footer.php' ?>