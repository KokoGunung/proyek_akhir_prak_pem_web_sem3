// auth.js - login, saldo, dan logout sederhana.
// Data akun disimpan di browser (localStorage), bukan di server.

var KUNCI_AKUN = "krl_akun";
var KUNCI_SESI = "krl_sesi";

function bacaAkun() {
  try {
    return JSON.parse(localStorage.getItem(KUNCI_AKUN)) || {};
  } catch (e) {
    return {};
  }
}

function simpanAkun(akun) {
  localStorage.setItem(KUNCI_AKUN, JSON.stringify(akun));
}

// Pengacak sederhana supaya kata sandi tidak tersimpan apa adanya
function acakSandi(teks) {
  var h1 = 0xdeadbeef, h2 = 0x41c6ce57;
  for (var i = 0; i < teks.length; i++) {
    var c = teks.charCodeAt(i);
    h1 = Math.imul(h1 ^ c, 2654435761);
    h2 = Math.imul(h2 ^ c, 1597334677);
  }
  h1 = Math.imul(h1 ^ (h1 >>> 16), 2246822507) ^ Math.imul(h2 ^ (h2 >>> 13), 3266489909);
  h2 = Math.imul(h2 ^ (h2 >>> 16), 2246822507) ^ Math.imul(h1 ^ (h1 >>> 13), 3266489909);
  return String(4294967296 * (2097151 & h2) + (h1 >>> 0));
}

// Mengembalikan pengguna yang sedang masuk, atau null
function penggunaAktif() {
  try {
    var kunci = localStorage.getItem(KUNCI_SESI);
    var akun = bacaAkun();
    if (kunci && akun[kunci]) {
      return { kunci: kunci, nama: akun[kunci].nama, saldo: akun[kunci].saldo };
    }
  } catch (e) {}
  return null;
}

// Masuk. Nama baru otomatis dibuatkan akun. Mengembalikan pesan error, atau "" jika berhasil
function masuk(nama, sandi) {
  nama = nama.trim();
  if (!nama) return "Nama pengguna harus diisi.";
  if (sandi.length < 4) return "Kata sandi minimal 4 karakter.";

  var kunci = nama.toLowerCase();
  var akun = bacaAkun();

  if (akun[kunci]) {
    if (akun[kunci].sandi !== acakSandi(sandi)) return "Kata sandi salah.";
  } else {
    akun[kunci] = { nama: nama, sandi: acakSandi(sandi), saldo: 0 };
  }

  simpanAkun(akun);
  localStorage.setItem(KUNCI_SESI, kunci);
  return "";
}

function keluar() {
  localStorage.removeItem(KUNCI_SESI);
  window.location.href = "login.html";
}

// Tambah saldo pengguna yang sedang masuk, mengembalikan saldo baru
function tambahSaldo(jumlah) {
  var p = penggunaAktif();
  var akun = bacaAkun();
  akun[p.kunci].saldo += jumlah;
  simpanAkun(akun);
  return akun[p.kunci].saldo;
}

function rupiah(angka) {
  return angka.toLocaleString("id-ID");
}

// Kode E-Tiket 6 angka. Disimpan per pengguna supaya tidak berubah saat halaman dibuka lagi.
// baru = true -> buat kode baru.
function kodeTiket(baru) {
  var p = penggunaAktif();
  if (!p) return "";
  var kunci = "krl_kode_" + p.kunci;
  var kode = localStorage.getItem(kunci);
  if (baru || !kode) {
    var angka;
    if (window.crypto && window.crypto.getRandomValues) {
      angka = window.crypto.getRandomValues(new Uint32Array(1))[0];
    } else {
      angka = Math.floor(Math.random() * 4294967296);
    }
    kode = String(angka % 1000000).padStart(6, "0");
    localStorage.setItem(kunci, kode);
  }
  return kode;
}

// Isi semua elemen [data-nama], [data-saldo], dan [data-kode] di halaman
function tampilkanData() {
  var p = penggunaAktif();
  if (!p) return;
  document.querySelectorAll("[data-nama]").forEach(function (el) {
    el.textContent = p.nama;
  });
  document.querySelectorAll("[data-saldo]").forEach(function (el) {
    el.textContent = rupiah(p.saldo);
  });
  document.querySelectorAll("[data-kode]").forEach(function (el) {
    var kode = kodeTiket(false);
    el.textContent = kode.slice(0, 3) + " " + kode.slice(3);
  });
}
document.addEventListener("DOMContentLoaded", tampilkanData);

// Penjaga halaman: belum masuk -> ke login, sudah masuk -> tidak perlu login lagi
(function () {
  var halaman = window.location.pathname.split("/").pop();
  var sudahMasuk = penggunaAktif() !== null;
  if (halaman === "login.html") {
    if (sudahMasuk) window.location.replace("index.html");
  } else if (!sudahMasuk) {
    window.location.replace("login.html");
  }
})();
