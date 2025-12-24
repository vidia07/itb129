document.addEventListener("DOMContentLoaded", function() {
    
    const textElement = document.getElementById('typing-text');
    
    // Ambil teks yang sudah ada("Aura AI")
    const textToType = textElement.textContent; 
    
    // Biar awal nya itu kosong dulu
    textElement.textContent = ''; 
    
    let index = 0;
    
    function typeEffect() {
        if (index < textToType.length) {
            textElement.textContent += textToType.charAt(index);
            index++;
            // Kecepatan ketik: 200 milidetik (0.2 detik)
            setTimeout(typeEffect, 200); 
        }
    }

    // Mulai mengetik
    typeEffect();
    

});



