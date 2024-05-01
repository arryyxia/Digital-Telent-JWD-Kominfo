const namaReservasi     = document.getElementById("namaReservasi");
const noTelp            = document.getElementById("noTelp");
const waktuReservasi    = document.getElementById("waktuReservasi");
const kursi             = document.getElementById("kursi");
const paket             = document.querySelector('input[name="paket"]:checked');
const pktReguler        = document.getElementById('reguler');
const pktUlangTahun     = document.getElementById('ulangTahun');
const pktRuangMeeting   = document.getElementById('ruangMeeting');
const sate              = document.getElementById('sate');
const rendang           = document.getElementById('rendang');
const sayur             = document.getElementById('sayur');
const ayam              = document.getElementById('ayam');
const sosis             = document.getElementById('sosis');
const mie               = document.getElementById('mie');


function hitungTotal() {
    let jumKursi = kursi ? parseInt(kursi) : 0;
    let paket = 0;

    if ( pktReguler.checked ) {
        paket = 1000000;
    }
    else if ( pktUlangTahun.checked ) {
        paket = 1500000;
    }
    else if ( pktRuangMeeting.checked ) {
        paket = 2000000;
    }

    addSate = sate.checked    ? 10000 : 0;
    addRendang = rendang.checked ? 15000 : 0;
    addSayur = sayur.checked   ? 5000  : 0;
    addAyam = ayam.checked    ? 12000 : 0;
    addSosis = sosis.checked   ? 8000  : 0;
    addMie = mie.checked     ? 12000 : 0;

    let makananTotal = addSate + addRendang + addSayur + addAyam + addSosis + addMie;
    let totalTagihan = jumKursi * makananTotal + paket;

    document.getElementById('hargaPaket').value = paket;
    document.getElementById('totalTagihan').value = totalTagihan;
}

function validateForm() {

    if (!namaReservasi) {
        alert('Nama reservasi harus diisi');
        return false;
    }

    if (!noTelp) {
        alert('Nomor telepon harus diisi');
        return false;
    }

    if (!waktuReservasi) {
        alert('Waktu reservasi harus diisi');
        return false;
    }

    if (!kursi) {
        alert('Jumlah kursi harus diisi');
        return false;
    }

    if (!paket) {
        alert('Pilih paket reservasi');
        return false;
    }

    return true;
}
