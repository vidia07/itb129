// FORM VALIDATION
document.getElementById("contactForm").addEventListener("submit", function(e) {
    e.preventDefault();

    let name = document.getElementById("name").value.trim();
    let email = document.getElementById("email").value.trim();
    let message = document.getElementById("message").value.trim();
    let msg = document.getElementById("formMsg");

    if (name === "" || email === "" || message === "") {
        msg.style.color = "red";
        msg.innerText = "Semua field wajib diisi.";
        return;
    }

    if (!email.includes("@")) {
        msg.style.color = "red";
        msg.innerText = "Email tidak valid!";
        return;
    }

    msg.style.color = "green";
    msg.innerText = "Pesan berhasil dikirim!";
    
    document.getElementById("contactForm").reset();
});

const containerTesti = document.querySelector('.testi-container');
const cardsTesti = document.querySelectorAll('.testi-card');
let indexTesti = 0;

function updateSlider() {
    const cardWidth = cardsTesti[0].offsetWidth + 20; 
    containerTesti.style.transform = `translateX(-${indexTesti * cardWidth}px)`;
}

document.querySelector('.next').addEventListener('click', () => {
    indexTesti = (indexTesti + 1) % cardsTesti.length;
    updateSlider();
});

document.querySelector('.prev').addEventListener('click', () => {
    indexTesti = indexTesti - 1 < 0 ? cardsTesti.length - 1 : indexTesti - 1;
    updateSlider();
});

// HAMBURGER MENU
const hamburger = document.querySelector('.hamburger');
const navMenu = document.querySelector('.nav-menu');

hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('active');
    navMenu.classList.toggle('active');
});
