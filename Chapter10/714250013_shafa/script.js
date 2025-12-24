document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");

    form.addEventListener("submit", function (e) {
        const nama = form.nama.value.trim();
        const alamat = form.alamat.value.trim();
        const sekolah = form.sekolah_asal.value.trim();

        if (nama === "" || alamat === "" || sekolah === "") {
            alert("Harap lengkapi semua data!");
            e.preventDefault();
        }
    });
});
