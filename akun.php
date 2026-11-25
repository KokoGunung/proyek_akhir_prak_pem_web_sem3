<?php 
  session_start();
  $usr = $_SESSION["username"];
?>
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
  <?php include "header.php" ?>
  <main class="flex-1 flex flex-col relative w-full pt-16 pb-24 bg-surface">
    <div class="flex flex-col w-full px-margin pt-4 gap-space-md">
      <!-- Profil -->
      <div class="flex items-center gap-4 bg-white rounded-xl p-4 shadow-sm">
        <div class="w-16 h-16 rounded-full bg-primary flex items-center justify-center">
          <span class="material-symbols-outlined text-on-primary text-[34px]">person</span>
        </div>
        <div>
          <h1 class="font-headline-md text-headline-md text-primary"><?php echo $usr ?></h1>
        </div>
      </div>
      <!-- Info kartu KMT -->
      <div class="bg-primary-container text-on-primary rounded-xl p-4 shadow-md">
        <p class="font-label-caps text-label-caps uppercase text-secondary-fixed-dim">Kartu Multi Trip (KMT)</p>
        <p class="font-data-mono text-body-md mt-1">KMT-8940 2938 1092</p>
        <p class="font-headline-md text-headline-md mt-2">Rp <span data-saldo=""></span></p>
        <p class="font-body-sm text-body-sm text-on-primary-container">Saldo aktif • Tarif Rp8.000 / trip</p>
        <a class="inline-flex items-center gap-1.5 mt-3 px-3 py-2 rounded-lg bg-secondary-container text-on-secondary font-label-lg text-label-lg"
          href="topup.php"><span class="material-symbols-outlined text-[18px]">add_circle</span>Top Up Saldo</a>
      </div>
      <!-- Daftar menu -->
      <h2 class="font-headline-md text-headline-md text-primary">Menu</h2>
      <a class="menu-akun" href="etiket.html">
        <span class="material-symbols-outlined">qr_code_2</span> E-Tiket Saya
      </a>
      <button class="menu-akun" data-pesan="Belum ada riwayat perjalanan.">
        <span class="material-symbols-outlined">history</span> Riwayat Perjalanan
      </button>
      <!-- popup hapus -->
      <button id="del_btn" type="button" class="menu-akun" style="color:#ba1a1a;">
        <span class="material-symbols-outlined">delete</span> Hapus Akun
      </button>
      <div id="del_modal" class="modal">
        <div class="flex flex-col gap-space-lg bg-surface-container-lowest rounded-xl p-5 shadow-sm">
          <P>Apakah anda yakin ingin menghapus akun anda?</P>
          <div class="flex gap-space-lg self-center">
            <a href="delete.php"><button  class="w-24 h-12 p-5 inline-flex items-center justify-center rounded-lg bg-[#ba1a1a] hover:bg-[#e31414] text-on-secondary font-label-xl text-label-xl transition-colors"
              >Ya</button></a>
            <button id="d_no_btn" class=" w-24 h-12 p-5 inline-flex items-center justify-center rounded-lg bg-gray-500 hover:bg-secondary-container text-on-secondary font-label-xl text-label-xl transition-colors"
            >Tidak</button>
          </div>
        </div>
      </div>
      <!-- * -->
      <!-- popup keluar -->
      <button type="button" class="menu-akun text-orange-900" id="logout_btn">
        <span class="material-symbols-outlined">logout</span> Keluar
      </button>
      <div id="logout_modal" class="modal">
        <div class="flex flex-col gap-space-lg bg-surface-container-lowest rounded-xl p-5 shadow-sm">
          <P>Apakah anda ingin keluar?</P>
          <div class="flex gap-space-lg">
            <a href="login.php"><button  class="w-24 h-12 p-5 inline-flex items-center justify-center rounded-lg bg-green-700 hover:bg-green-900 text-on-secondary font-label-xl text-label-xl transition-colors"
              >Ya</button></a>
            <button id="l_no_btn" class=" w-24 h-12 p-5 inline-flex items-center justify-center rounded-lg bg-gray-500 hover:bg-secondary-container text-on-secondary font-label-xl text-label-xl transition-colors"
            >Tidak</button>
          </div>
        </div>
      </div>
      <!-- * -->
  </main>
  <?php include "nav.php" ?>
  <script src="js/script.js"></script>
  <script>    
    set_nav("account_page");

    //logout
    const logout_modal = document.getElementById("logout_modal");
    const logout_btn = document.getElementById("logout_btn");
    const l_no_btn =document.getElementById("l_no_btn");
    logout_btn.onclick = function(){
      logout_modal.style.display = "flex";
    }
    l_no_btn.onclick = function(){
      logout_modal.style.display = "none";
    }
    
    //delete
    const del_modal = document.getElementById("del_modal");
    const del_btn = document.getElementById("del_btn");
    const d_no_btn =document.getElementById("d_no_btn");
    del_btn.onclick = function(){
      del_modal.style.display = "flex";
    }
    d_no_btn.onclick = function(){
      del_modal.style.display = "none";
    }

    window.onclick = function(event) {
      if (event.target == logout_modal) {
        logout_modal.style.display = "none";
      }else if(event.target == del_modal){
        del_modal.style.display = "none";
      }
    }
  </script>
</body>

</html>