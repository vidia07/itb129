window.onload = function() {
    console.log("Halaman Pendaftaran ULBI siap.");
};

const linkDaftar = document.querySelector('a[href="form-daftar.php"]');

if (linkDaftar) {
    linkDaftar.addEventListener('click', function(event) {
        const yakin = confirm("Apakah Anda ingin masuk ke formulir pendaftaran?");
        if (!yakin) {
            event.preventDefault();
        }
    });
}

const statusPesan = document.querySelector('p');
if (statusPesan) {
    setTimeout(function() {
        statusPesan.style.display = 'none';
    }, 5000);
}