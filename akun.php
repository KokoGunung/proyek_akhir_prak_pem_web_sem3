<!DOCTYPE html>

<html lang="id">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover"
    name="viewport" />
  <meta content="mobile_tab" name="shell-type" />
  <link href="https://fonts.googleapis.com" rel="preconnect" />
  <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet" />
  <link
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
    rel="stylesheet" />
  <link
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
    rel="stylesheet" />
  <script src="https://cdn.tailwindcss.com"></script>
  <script
    id="tailwind-config">tailwind.config = { darkMode: "class", theme: { extend: { colors: { "primary-fixed": "#d1e4ff", "on-primary-container": "#7991af", "background": "#f8f9ff", "tertiary-fixed": "#cce5ff", "error": "#ba1a1a", "on-secondary-container": "#5c2400", "on-secondary-fixed": "#341100", "primary": "#001428", "secondary-fixed": "#ffdbca", "inverse-surface": "#213145", "secondary-fixed-dim": "#ffb690", "surface-dim": "#cbdbf5", "surface-container-lowest": "#ffffff", "surface-container-high": "#dce9ff", "inverse-on-surface": "#eaf1ff", "surface-bright": "#f8f9ff", "error-container": "#ffdad6", "on-primary-fixed": "#011d35", "primary-container": "#0f2942", "outline": "#74777e", "inverse-primary": "#b0c9e8", "secondary": "#9d4300", "on-background": "#0b1c30", "on-secondary": "#ffffff", "on-tertiary": "#ffffff", "on-primary-fixed-variant": "#314863", "surface-container": "#e5eeff", "surface": "#f8f9ff", "primary-fixed-dim": "#b0c9e8", "secondary-container": "#fd761a", "on-surface": "#0b1c30", "surface-container-highest": "#d3e4fe", "surface-variant": "#d3e4fe", "on-primary": "#ffffff", "tertiary-fixed-dim": "#93ccff", "outline-variant": "#c3c6ce", "on-secondary-fixed-variant": "#783200", "on-tertiary-container": "#2e95da", "tertiary": "#001524", "on-surface-variant": "#43474d", "on-error-container": "#93000a", "on-tertiary-fixed-variant": "#004b73", "on-error": "#ffffff", "on-tertiary-fixed": "#001d31", "surface-tint": "#49607c", "surface-container-low": "#eff4ff", "tertiary-container": "#002a44" }, borderRadius: { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px" }, spacing: { "gutter": "1rem", "space-xs": "0.25rem", "space-sm": "0.5rem", "space-lg": "1.5rem", "space-md": "1rem", "space-xl": "2rem", "margin": "1rem" }, fontFamily: { "headline-xl": ["Inter"], "label-lg": ["Inter"], "body-lg": ["Inter"], "headline-md": ["Inter"], "label-caps": ["Inter"], "headline-xl-mobile": ["Inter"], "body-md": ["Inter"], "label-md": ["Inter"], "title-station": ["Inter"], "body-sm": ["Inter"], "data-mono": ["Inter"], "headline-lg": ["Inter"] }, fontSize: { "headline-xl": ["32px", { lineHeight: "40px", letterSpacing: "-0.02em", fontWeight: "700" }], "label-lg": ["14px", { lineHeight: "20px", letterSpacing: "0.01em", fontWeight: "600" }], "body-lg": ["16px", { lineHeight: "24px", fontWeight: "400" }], "headline-md": ["20px", { lineHeight: "28px", letterSpacing: "-0.01em", fontWeight: "600" }], "label-caps": ["11px", { lineHeight: "14px", letterSpacing: "0.06em", fontWeight: "700" }], "headline-xl-mobile": ["26px", { lineHeight: "34px", letterSpacing: "-0.02em", fontWeight: "700" }], "body-md": ["14px", { lineHeight: "20px", fontWeight: "400" }], "label-md": ["12px", { lineHeight: "16px", letterSpacing: "0.02em", fontWeight: "600" }], "title-station": ["18px", { lineHeight: "24px", letterSpacing: "-0.01em", fontWeight: "700" }], "body-sm": ["12px", { lineHeight: "16px", fontWeight: "400" }], "data-mono": ["14px", { lineHeight: "20px", letterSpacing: "0.02em", fontWeight: "500" }], "headline-lg": ["24px", { lineHeight: "32px", letterSpacing: "-0.015em", fontWeight: "600" }] } } } }</script>
  <style>
    @layer base {

      html,
      body {
        width: 100vw;
        margin: 0;
        padding: 0;
        font-family: 'Inter', sans-serif;
      }

      body {
        overscroll-behavior: none;
      }

      .pb-safe {
        padding-bottom: env(safe-area-inset-bottom, 0px);
      }

      .pt-safe {
        padding-top: env(safe-area-inset-top, 0px);
      }

      main>:first-child {
        margin-top: 0 !important;
      }

      main>:last-child {
        margin-bottom: 0 !important;
      }
    }
    

    ::-webkit-scrollbar {
      display: none;
    }
  </style>
  <style>
    body {
      min-height: max(884px, 100dvh);
    }
    .modal {
      display: none;
      justify-content: center;
      align-items: center;
      position: fixed;
      z-index: 60;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgb(0,0,0);
      background-color: rgba(0,0,0,0.4);
    }
  </style>
  <link href="css/style.css" rel="stylesheet" />
</head>

<body class="bg-background font-body-md text-on-surface antialiased flex flex-col min-h-screen" data-halaman="akun">
  <header class="fixed top-0 inset-x-0 z-50 bg-surface/90 backdrop-blur-xl shadow-[0_1px_8px_rgba(0,0,0,0.04)] pt-safe">
    <div class="h-16 px-gutter flex items-center justify-between"><a class="flex items-center gap-space-sm"
        href="index.html">
        <div class="w-9 h-9 rounded-lg bg-primary-container flex items-center justify-center text-on-primary shadow-sm">
          <span class="material-symbols-outlined text-[20px] text-secondary-container">train</span></div>
        <div class="flex flex-col"><span
            class="font-label-caps text-label-caps uppercase tracking-wider text-secondary-container">KRL
            Commuter</span><span class="font-title-station text-title-station text-primary-container leading-none">Jogja
            - Solo</span></div>
      </a>
      <div class="flex items-center gap-space-xs"><button aria-label="Pemberitahuan"
          class="w-11 h-11 flex items-center justify-center text-on-surface-variant hover:text-primary transition-colors relative"
          data-pesan="Belum ada pemberitahuan baru."><span
            class="material-symbols-outlined text-[22px]">notifications</span><span
            class="absolute top-2.5 right-2.5 w-2 h-2 rounded-full bg-secondary-container ring-2 ring-surface"></span></button><a
          aria-label="Akun saya" class="w-8 h-8 rounded-full bg-primary flex items-center justify-center shadow-sm ml-1"
          href="akun.html"><span class="material-symbols-outlined text-on-primary text-[18px]">person</span></a></div>
    </div>
  </header>
  <main class="flex-1 flex flex-col relative w-full pt-16 pb-24 bg-surface">
    <div class="flex flex-col w-full px-margin pt-4 gap-space-md">
      <!-- Profil -->
      <div class="flex items-center gap-4 bg-white rounded-xl p-4 shadow-sm">
        <div class="w-16 h-16 rounded-full bg-primary flex items-center justify-center">
          <span class="material-symbols-outlined text-on-primary text-[34px]">person</span>
        </div>
        <div>
          <h1 class="font-headline-md text-headline-md text-primary" data-nama=""></h1>
          <p class="font-body-sm text-body-sm text-on-surface-variant">Penumpang KRL Jogja - Solo</p>
        </div>
      </div>
      <!-- Info kartu KMT -->
      <div class="bg-primary-container text-on-primary rounded-xl p-4 shadow-md">
        <p class="font-label-caps text-label-caps uppercase text-secondary-fixed-dim">Kartu Multi Trip (KMT)</p>
        <p class="font-data-mono text-body-md mt-1">KMT-8940 2938 1092</p>
        <p class="font-headline-md text-headline-md mt-2">Rp <span data-saldo=""></span></p>
        <p class="font-body-sm text-body-sm text-on-primary-container">Saldo aktif • Tarif Rp8.000 / trip</p>
        <a class="inline-flex items-center gap-1.5 mt-3 px-3 py-2 rounded-lg bg-secondary-container text-on-secondary font-label-lg text-label-lg"
          href="topup.html"><span class="material-symbols-outlined text-[18px]">add_circle</span>Top Up Saldo</a>
      </div>
      <!-- Daftar menu -->
      <h2 class="font-headline-md text-headline-md text-primary">Menu</h2>
      <a class="menu-akun" href="etiket.html">
        <span class="material-symbols-outlined">qr_code_2</span> E-Tiket Saya
      </a>
      <a class="menu-akun" href="jadwal.html">
        <span class="material-symbols-outlined">schedule</span> Jadwal KRL
      </a>
      <a class="menu-akun" href="rute.html">
        <span class="material-symbols-outlined">map</span> Peta Rute
      </a>
      <button class="menu-akun" data-pesan="Belum ada riwayat perjalanan.">
        <span class="material-symbols-outlined">history</span> Riwayat Perjalanan
      </button>
      <!-- popup keluar -->
      <button type="button" class="menu-akun" id="logout_btn" style="color:#ba1a1a;">
        <span class="material-symbols-outlined">logout</span> Keluar
      </button>
      <div id="logout_modal" class="modal">
        <div class="flex flex-col gap-space-sm bg-surface-container-lowest rounded-xl p-5 shadow-sm">
          <P>Apakah anda ingin keluar?</P>
          <div class="flex gap-space-lg">
            <a href="login.php"><button  class="w-24 h-12 p-5 inline-flex items-center justify-center rounded-lg bg-green-700 hover:bg-green-900 text-on-secondary font-label-xl text-label-xl transition-colors"
              >Ya</button></a>
            <button id="no_btn" class=" w-24 h-12 p-5 inline-flex items-center justify-center rounded-lg bg-secondary-container hover:bg-secondary text-on-secondary font-label-xl text-label-xl transition-colors"
            >Tidak</button>
          </div>
        </div>
      </div>
      <!-- * -->
  </main>
  <nav
    class="fixed bottom-0 inset-x-0 z-40 pb-safe bg-surface-container-lowest/95 backdrop-blur-xl shadow-[0_-2px_12px_rgba(15,41,66,0.06)]"
    data-active-classes="text-secondary-container font-label-lg">
    <div class="flex justify-around items-center h-16 px-space-xs"><a
        class="flex flex-col items-center justify-center gap-0.5 flex-1 h-full text-on-surface-variant hover:text-primary transition-colors"
        data-path="beranda" href="index.html"><span class="material-symbols-outlined text-[24px]">home</span><span
          class="font-label-md text-label-md">Beranda</span></a><a
        class="flex flex-col items-center justify-center gap-0.5 flex-1 h-full text-on-surface-variant hover:text-primary transition-colors"
        data-path="jadwal" href="jadwal.html"><span class="material-symbols-outlined text-[24px]">schedule</span><span
          class="font-label-md text-label-md">Jadwal</span></a><a
        class="flex flex-col items-center justify-center gap-0.5 flex-1 h-full text-on-surface-variant hover:text-primary transition-colors"
        data-path="rute" href="rute.html"><span class="material-symbols-outlined text-[24px]">map</span><span
          class="font-label-md text-label-md">Rute</span></a><a
        class="flex flex-col items-center justify-center gap-0.5 flex-1 h-full text-on-surface-variant hover:text-primary transition-colors"
        data-path="e-tiket" href="etiket.html"><span class="material-symbols-outlined text-[24px]">qr_code_2</span><span
          class="font-label-md text-label-md">E-Tiket</span></a><a aria-current="page"
        class="flex flex-col items-center justify-center gap-0.5 flex-1 h-full transition-colors text-secondary-container font-label-lg"
        data-path="akun" href="akun.html"><span class="material-symbols-outlined text-[24px]">account_circle</span><span
          class="font-label-md text-label-md">Akun</span></a></div>
  </nav>
  <script src="js/script.js"></script>
  <script>
    var logout_modal = document.getElementById("logout_modal");
    var logout_btn = document.getElementById("logout_btn");
    var no_btn =document.getElementById("no_btn");

    logout_btn.onclick = function(){
      logout_modal.style.display = "flex";
    }
    no_btn.onclick = function(){
      logout_modal.style.display = "none";
    }
    window.onclick = function(event) {
      if (event.target == logout_modal) {
        logout_modal.style.display = "none";
      }
    }
  </script>
</body>

</html>