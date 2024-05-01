function hitungTotal() {
    let jumKursi = document.getElementById('kursi').value ? parseInt(document.getElementById('kursi').value) : 0;
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

    let sate    = document.getElementById('sate').checked ? 10000 : 0;
    let rendang = document.getElementById('rendang').checked ? 15000 : 0;
    let sayur   = document.getElementById('sayur').checked ? 5000 : 0;
    let ayam    = document.getElementById('ayam').checked ? 12000 : 0;
    let sosis   = document.getElementById('sosis').checked ? 8000 : 0;
    let mie     = document.getElementById('mie').checked ? 12000 : 0;

    let makananTotal = sate + rendang + sayur + ayam + sosis + mie;
    let totalTagihan = jumKursi * makananTotal + paket;

    document.getElementById('hargaPaket').value = paket;
    document.getElementById('totalTagihan').value = totalTagihan;
}
function validateForm() {
    const namaReservasi     = document.getElementById("namaReservasi").value;
    const noTelp            = document.getElementById("noTelp").value;
    const waktuReservasi    = document.getElementById("waktuReservasi").value;
    const kursi             = document.getElementById("kursi").value;
    const paket             = document.querySelector('input[name="paket"]:checked');

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
