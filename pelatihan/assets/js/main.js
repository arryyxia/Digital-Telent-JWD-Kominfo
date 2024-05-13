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
function myFunction() {
    // Get the value of the input field with id="numb"
    const paket = document.querySelector('input[name="paket"]:checked')
    let x = document.getElementById("paket").value;
    // If x is Not a Number or less than one or greater than 10
    let text;
    if (isNaN(x) || x < 1 || x > 10) {
        text = "Input not valid";
    } else {
        text = "Input OK";
    }
    document.getElementById("demo").innerHTML = text;
}