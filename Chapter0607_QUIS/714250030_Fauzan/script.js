// SLIDER OTOMATIS
let slide = document.getElementById("slide");
let index = 1;
setInterval(() => {
    index++;
    slide.style.opacity = 0;
    setTimeout(() => {
        slide.src = "https://picsum.photos/900/450?" + index;
        slide.style.opacity = 1;
    }, 300);
}, 3000);

// VALIDASI FORM
document.getElementById("contactForm").addEventListener("submit", function(e) {
    e.preventDefault();

    let name = document.getElementById("name").value.trim();
    let email = document.getElementById("email").value.trim();
    let msg = document.getElementById("message").value.trim();
    let info = document.getElementById("formMsg");

    if (!name || !email || !msg) {
        info.style.color = "#ff4444";
        info.textContent = "Harap isi semua data.";
    } else {
        info.style.color = "#4bd96b";
        info.textContent = "Pesan berhasil dikirim!";
        this.reset();
    }
});

