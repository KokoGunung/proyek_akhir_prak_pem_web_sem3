// Semua tombol yang punya atribut data-pesan akan menampilkan pesan saat diklik
var semuaTombol = document.querySelectorAll("[data-pesan]");

for (var i = 0; i < semuaTombol.length; i++) {
  semuaTombol[i].addEventListener("click", function () {
    var pesan = this.getAttribute("data-pesan");
    alert(pesan);
  });
}

function set_nav(id){
  //flex flex-col items-center justify-center gap-0.5 flex-1 h-full transition-colors text-secondary-container
  //  font-label-lg
  const element = document.getElementById(id);
  element.setAttribute("aria-current", "page")
  element.className = "";
  element.classList.add("flex");
  element.classList.add("flex-col");
  element.classList.add("items-center");
  element.classList.add("justify-center");
  element.classList.add("gap-0.5");
  element.classList.add("flex-1");
  element.classList.add("h-full");
  element.classList.add("transition-colors");
  element.classList.add("text-secondary-container");
  element.classList.add("font-label-lg");

}
