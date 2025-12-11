document.getElementById("contactForm").addEventListener("submit", function(e) {
    e.preventDefault();

    let nama = document.getElementById("nama").value.trim();
    let email = document.getElementById("email").value.trim();
    let pesan = document.getElementById("pesan").value.trim();
    let formMsg = document.getElementById("formMsg");

    if (nama === "" || email === "" || pesan === "") {
        formMsg.innerText = "Semua field harus diisi!";
        formMsg.style.color = "red";
        return;
    }

    formMsg.innerText = "Pesan berhasil dikirim!";
    formMsg.style.color = "green";

    alert("Pesanan anda sudah dikirim di perusahaan kami, tunggu info selanjutnya.");

    document.getElementById("contactForm").reset();
});