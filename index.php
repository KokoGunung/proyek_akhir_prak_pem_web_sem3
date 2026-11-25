<?php include "conn.php";
  session_start();
  if(!isset($_SESSION["status"])){
    header("Location: login.php");
    exit;
  }else{
    if($_SESSION["status"] != "active"){
      header("Location: login.php");
      exit;
    }
  }
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
  </style>
  <link href="css/style.css" rel="stylesheet" />
</head>

<body class="bg-background font-body-md text-on-surface antialiased flex flex-col min-h-screen" data-halaman="beranda">
  <?php include "header.php" ?>
  <main class="flex-1 flex flex-col relative w-full pt-16 pb-24 bg-surface">
    <div class="flex flex-col w-full pb-6 space-y-4">
      <!-- Greeting & Account Banner -->
      <div class="px-margin pt-2 flex items-center justify-between">
        <div class="flex flex-col">
          <h1 class="font-headline-md text-headline-md text-primary leading-tight">Halo, <span><?php echo $usr ?></span></h1>
        </div>
        <div class="flex items-center gap-1.5 bg-surface-container-high px-2.5 py-1 rounded-full shadow-sm">
          <span class="w-2 h-2 rounded-full bg-secondary-container animate-pulse"></span>
          <span class="font-label-md text-label-md text-primary-container">KMT Terhubung</span>
        </div>
      </div>
      <!-- KMT Digital Wallet Card -->
      <div class="px-margin">
        <div
          class="relative overflow-hidden rounded-xl bg-gradient-to-br from-primary-container via-tertiary-container to-primary text-on-primary p-4 shadow-md">
          <!-- Decorative background wave / pattern -->
          <div
            class="absolute -right-8 -top-8 w-36 h-36 rounded-full bg-secondary-container/15 blur-xl pointer-events-none">
          </div>
          <div
            class="absolute -left-6 -bottom-6 w-28 h-28 rounded-full bg-primary-fixed/10 blur-lg pointer-events-none">
          </div>
          <div class="relative z-10 flex flex-col space-y-3">
            <!-- Card Top Bar -->
            <div class="flex items-center justify-between">
              <div class="flex items-center gap-2">
                <span class="material-symbols-outlined text-[20px] text-secondary-container"
                  style="font-variation-settings: 'FILL' 1;">contactless</span>
                <span class="font-label-caps text-label-caps text-surface-container tracking-widest uppercase">Kartu
                  Multi Trip (KMT)</span>
              </div>
              <span
                class="font-data-mono text-label-md text-on-primary-container bg-surface-container-lowest/10 px-2 py-0.5 rounded-full">••••
                8920</span>
            </div>
            <!-- Balance Info -->
            <div class="flex items-baseline justify-between pt-1">
              <div>
                <span class="font-body-sm text-body-sm text-surface-variant">Saldo Kartu Digital</span>
                <div class="flex items-baseline gap-1 mt-0.5">
                  <span class="font-label-md text-label-md text-secondary-container font-semibold">Rp</span>
                  <span class="font-headline-xl-mobile text-headline-xl-mobile tracking-tight" data-saldo=""></span>
                </div>
              </div>
              <div class="flex flex-col items-end">
                <span class="font-label-caps text-label-caps text-secondary-fixed-dim uppercase">Tarif Flat
                  Jogja-Solo</span>
                <span class="font-label-lg text-label-lg text-surface-container-lowest">Rp8.000 / trip</span>
              </div>
            </div>
            <!-- Quick Wallet CTAs -->
            <div class="pt-2 flex items-center gap-2">
              <a class="flex-1 flex items-center justify-center gap-1.5 bg-secondary-container text-on-primary h-10 rounded-lg font-label-lg text-label-lg hover:brightness-105 active:scale-[0.985] transition-all shadow-sm"
                href="topup.html">
                <span class="material-symbols-outlined text-[18px]">add_circle</span>
                <span>Isi Saldo Cepat</span>
              </a>
              <a class="flex-1 flex items-center justify-center gap-1.5 bg-surface-container-lowest/15 hover:bg-surface-container-lowest/20 text-on-primary h-10 rounded-lg font-label-lg text-label-lg active:scale-[0.985] transition-all"
                href="etiket.html">
                <span class="material-symbols-outlined text-[18px]">receipt_long</span>
                <span>Riwayat Tap</span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- Primary 4 Quick Navigation Grid -->
      <div class="px-margin">
        <div class="grid grid-cols-3 gap-2.5">
          <!-- Item 1: Jadwal -->
          <a class="flex flex-col items-center justify-center p-3 rounded-xl bg-surface-container-lowest shadow-sm hover:bg-surface-container transition-colors group"
            href="jadwal.html">
            <div
              class="w-12 h-12 rounded-xl bg-primary/5 flex items-center justify-center text-primary-container group-hover:scale-105 transition-transform mb-1.5">
              <span class="material-symbols-outlined text-[26px]"
                style="font-variation-settings: 'FILL' 1;">calendar_clock</span>
            </div>
            <span class="font-label-md text-label-md text-on-surface text-center leading-tight">Jadwal KRL</span>
            <span class="font-body-sm text-[10px] text-on-surface-variant text-center mt-0.5">Jam &amp; KA</span>
          </a>
          <!-- Item 2: Peta Rute -->
          <a class="flex flex-col items-center justify-center p-3 rounded-xl bg-surface-container-lowest shadow-sm hover:bg-surface-container transition-colors group"
            href="rute.html">
            <div
              class="w-12 h-12 rounded-xl bg-primary/5 flex items-center justify-center text-primary-container group-hover:scale-105 transition-transform mb-1.5">
              <span class="material-symbols-outlined text-[26px]"
                style="font-variation-settings: 'FILL' 1;">route</span>
            </div>
            <span class="font-label-md text-label-md text-on-surface text-center leading-tight">Peta Rute</span>
            <span class="font-body-sm text-[10px] text-on-surface-variant text-center mt-0.5">13 Stasiun</span>
          </a>
          <!-- Item 3: Scan E-Tiket -->
          <a class="flex flex-col items-center justify-center p-3 rounded-xl bg-surface-container-lowest shadow-sm hover:bg-surface-container transition-colors group"
            href="etiket.html">
            <div
              class="w-12 h-12 rounded-xl bg-secondary-container/10 flex items-center justify-center text-secondary-container group-hover:scale-105 transition-transform mb-1.5">
              <span class="material-symbols-outlined text-[26px]"
                style="font-variation-settings: 'FILL' 1;">qr_code_scanner</span>
            </div>
            <span class="font-label-md text-label-md text-secondary text-center leading-tight">Scan Gate</span>
            <span class="font-body-sm text-[10px] text-secondary-container text-center mt-0.5">E-Tiket QR</span>
          </a>
        </div>
      </div>
      <!-- Scenic Rail Spot Spotlight (Visual Richness Placeholder) -->
      <div class="px-margin space-y-2">
        <div class="flex items-center justify-between">
          <h2 class="font-headline-md text-headline-md text-primary">Jelajah Jogja - Solo</h2>
        </div>
        <div class="rounded-xl overflow-hidden bg-surface-container-lowest shadow-sm flex flex-col">
          <div class="relative w-full h-36 bg-cover bg-center"
            data-alt="A scenic shot of the sleek red and silver Commuter Line electric train running smoothly across the lush green countryside between Yogyakarta and Klaten with Mount Merapi majestic silhouette in the background under morning blue sky"
            style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCGi06fggiuo5SWEiqxwIuVUAheg2vETPLbrIFe7bpQ14XjxUQk5BK5jCEjBw2hlBtQidanJvfBV1fq5rD2HnuIhrHr7Bkz287YcAyPBck2NsoZMs15oBW3glGXwJvgTqDUy08wGd90vwErE3X48q2p5UQOYp4qYIuxP5FMzH3GXsiPdehuSFGQMqboIvSstJM6UGgvYCH-JXDlIDwLtVyz9WwsO0BLBOOhJb5CaE7A')">
            <div class="absolute inset-0 bg-gradient-to-t from-primary/80 via-transparent to-transparent"></div>
            <div class="absolute bottom-2.5 left-3 right-3 flex items-end justify-between">
              <div class="text-on-primary">
                <span
                  class="font-label-caps text-label-caps bg-secondary-container text-on-primary px-2 py-0.5 rounded">Spot
                  Populer</span>
                <h3 class="font-title-station text-title-station leading-tight mt-1">Stasiun Klaten (KT)</h3>
                <p class="font-body-sm text-[11px] text-surface-container">Hub transit sentral penghubung candi
                  Prambanan &amp; wisata Solo</p>
              </div>
              <span class="bg-surface-container-lowest/90 text-primary-container rounded-full p-1.5 shadow">
                <span class="material-symbols-outlined text-[18px]">explore</span>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script>
      // Simple micro-interaction for tapping action buttons
      document.querySelectorAll('button, a').forEach(el => {
        el.addEventListener('click', function (e) {
          if (this.getAttribute('href') === '#') {
            e.preventDefault();
          }
        });
      });
    </script>
  </main>
  <?php include "nav.php" ?>
  <script src="js/script.js"></script>
  <script>
    set_nav("home_page");
  </script>
</body>

</html>