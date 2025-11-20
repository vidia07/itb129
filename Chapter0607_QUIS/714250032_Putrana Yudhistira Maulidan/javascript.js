
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("slide");
  
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  
  slides[slideIndex-1].style.display = "block";  
}

setInterval(function() {
    plusSlides(1);
}, 4000);


const contactForm = document.getElementById('contactForm');

contactForm.addEventListener('submit', function(e) {
    e.preventDefault(); 
    
    const nameInput = document.getElementById('name');
    const emailInput = document.getElementById('email');
    const messageInput = document.getElementById('message');
    
    const nameError = document.getElementById('error-name');
    const emailError = document.getElementById('error-email');
    const messageError = document.getElementById('error-message');
    
    let isValid = true;

    nameError.style.display = 'none';
    emailError.style.display = 'none';
    messageError.style.display = 'none';
    
    if (nameInput.value.trim() === '') {
        nameError.style.display = 'block';
        isValid = false;
    }

    if (emailInput.value.trim() === '' || !emailInput.value.includes('@') || !emailInput.value.includes('.')) {
        emailError.style.display = 'block';
        isValid = false;
    }

    if (messageInput.value.trim() === '') {
        messageError.style.display = 'block';
        isValid = false;
    }

    if (isValid) {
        alert('Terima kasih! Pesan Anda telah kami terima.');
        contactForm.reset(); 
    }
});