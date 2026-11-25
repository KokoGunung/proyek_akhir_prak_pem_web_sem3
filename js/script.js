// script.js - JavaScript sederhana untuk semua halaman

// Semua tombol yang punya atribut data-pesan akan menampilkan pesan saat diklik
var semuaTombol = document.querySelectorAll("[data-pesan]");

for (var i = 0; i < semuaTombol.length; i++) {
  semuaTombol[i].addEventListener("click", function () {
    var pesan = this.getAttribute("data-pesan");
    alert(pesan);
  });
}
