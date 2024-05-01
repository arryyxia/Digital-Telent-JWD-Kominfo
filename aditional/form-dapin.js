const paket 		= document.getElementById("paket");
const durasi 		= document.getElementById("durasi");
const memberTrue 	= document.getElementById("member-yes");
const memberFalse 	= document.getElementById("member-no");
const hasil 		= document.getElementById("hasil");
const biayaPaket 	= document.getElementById("biaya-paket");
const diskonMember 	= document.getElementById("diskon");
const biayaTotal 	= document.getElementById("biaya-total");
const submitBtn 	= document.getElementById("submit-btn");
const inputFields 	= [...document.getElementsByClassName("input-field")];
const paketQuery	= new URL(window.location.href).searchParams.get("paket");
const jenisPaket 	= {
						raja: { harga: 20000, diskon: 5000 },
						dewa: { harga: 35000, diskon: 7500 },
					};

function formatInputName(string) {
	return string.charAt(0).toUpperCase() + string.slice(1).replace("-", " ");
}

function inputHarusDiIsi(input) {
	return "*" + formatInputName(input.name) + " harus di isi";
}

function inputSalah(input) {
	const inputName = formatInputName(input.name);
	if (inputName === "Nomor") return "*" + inputName + " hanya angka (08xxx)";
	if (inputName === "Nama") return "*" + inputName + " hanya huruf dan spasi";
	return "*Ada kesalahan pada " + inputName;
}

function inputMinimal(input) {
	return "*" + formatInputName(input.name) + " minimal harus " + input.minLength + " karakter";
}

function inputUnderRange(input) {
	return "*" + formatInputName(input.name) + " minimal harus " + input.min + " jam";
}

function checkValidation(input, warning) {
	if (input.checkValidity()) warning.innerText = "";
	if (!input.checkValidity()) warning.classList.remove("d-none");

	if (input.validity.valueMissing) {
		warning.innerText = inputHarusDiIsi(input);
	}
	if (input.validity.patternMismatch) {
		warning.innerText = inputSalah(input);
	}
	if (input.validity.tooShort) {
		warning.innerText = inputMinimal(input);
	}
	if (input.validity.rangeUnderflow) {
		warning.innerText = inputUnderRange(input);
	}
}

function showHasil() {
	if (durasi.value !== "" && durasi.value > 0 && (memberTrue.checked || memberFalse.checked)) {
		hasil.classList.remove("d-none");
		let diskon = memberTrue.checked ? jenisPaket[paket.value].diskon : 0;

		biayaPaket.value = jenisPaket[paket.value].harga;
		diskonMember.value = diskon * durasi.value;
		biayaTotal.value = (jenisPaket[paket.value].harga - diskon) * durasi.value;
	} else {
		hasil.classList.add("d-none");
	}
}

// memvalidasi input menekan submit
submitBtn.addEventListener("click", (e) => {
	let checkOnce = true;

	inputFields.forEach((inputField) => {
		const input = inputField.querySelector("input") || inputField.querySelector("select");
		const warning = inputField.querySelector("em");

		checkValidation(input, warning);
		if (warning.classList.contains("d-block")) {
			e.preventDefault();
			if (checkOnce) {
				checkOnce = false;
				input.focus();
			}
		}
	});
});

// memvalidasi input saat keluar foucs
inputFields.forEach((inputField) => {
	const input = inputField.querySelector("input") || inputField.querySelector("select");
	const warning = inputField.querySelector("em");

	input.addEventListener("blur", () => checkValidation(input, warning));
});

paket.value = jenisPaket[paketQuery] ? paketQuery : "";
paket.addEventListener("change", showHasil);
durasi.addEventListener("change", showHasil);
memberTrue.addEventListener("change", showHasil);
memberFalse.addEventListener("change", showHasil);
