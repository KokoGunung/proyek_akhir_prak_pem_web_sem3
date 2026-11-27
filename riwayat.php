<?php 
  include "conn.php";
  session_start();
  $usr_id = $_SESSION["id"];
  $query = mysqli_query($conn, 
  "select e.total, e.tanggal, s1.nama as asal, s2.nama as tujuan from etiket e 
  inner join stasiun s1 on e.asal = s1.id 
  inner join stasiun s2 on e.tujuan = s2.id 
  where tanggal < curdate() and acc_id=$usr_id");
?>

<!DOCTYPE html>

<html lang="id">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover"
    name="viewport" />
  <meta content="mobile_tab" name="shell-type" />
  <title>Riwayat Perjalanan</title>
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

<body class="bg-background font-body-md text-on-surface antialiased flex flex-col min-h-screen" data-halaman="riwayat">
  <?php include "header.php" ?>
  <main class="flex-1 flex flex-col relative w-full pt-16 pb-24 bg-surface">
    <div class="flex flex-col w-full px-margin pt-4 gap-space-md">
      <h1 class="font-headline-xl-mobile text-headline-xl-mobile text-primary">Riwayat E-Tiket</h1>
      <div id="daftar" class="flex flex-col gap-space-sm"></div>
      <p id="kosong" class="hidden text-center text-on-surface-variant font-body-md text-body-md py-10">Belum ada
        riwayat perjalanan.</p>

      <?php while($data = mysqli_fetch_array($query)){ ?>
        <div class="tiket_container bg-surface-container-lowest rounded-xl p-space-md shadow-sm flex flex-col gap-space-sm">
          <div class="flex items-center justify-between pt-1">
            <div class="flex flex-col">
              <span class="font-body-md text-body-lg font-semibold text-on-surface leading-tight"><?php echo $data["asal"] ?></span>
            </div>
            <div class="flex flex-col items-center px-2 flex-1 max-w-[120px]">
              <div class="w-full flex items-center justify-between">
                <div class="w-2 h-2 rounded-full bg-primary-container"></div>
                <div class="flex-1 h-0.5 bg-surface-container-highest mx-1 relative">
                  <span
                    class="material-symbols-outlined text-[14px] text-secondary absolute -top-1.5 left-1/2 -translate-x-1/2">arrow_forward</span>
                </div>
                <div class="w-2 h-2 rounded-full bg-secondary-container"></div>
              </div>
            </div>
            <div class="flex flex-col items-end text-right">
              <span class="font-body-md text-body-lg font-semibold text-on-surface leading-tight"><?php echo $data["tujuan"] ?></span>
            </div>
          </div>
            <div class="flex items-center justify-between pt-2 bg-surface-container-low px-space-sm py-2 rounded-lg">
              <span class="font-body-sm text-body-sm text-on-surface-variant">Tarif</span>
              <span class="font-label-lg text-label-lg text-secondary font-bold">Rp <?php echo $data["total"] ?></span>
            </div>
              <div class="flex justify-between">
                <p class="pt-2 font-body-md text-body-md text-on-surface-variant"><?php echo $data["tanggal"] ?></p>
                <p class="pt-2 font-body-md text-body-md text-on-surface-variant">Kadaluwarsa</p>
              </div>
          </div>
        <?php } ?>
    </div>
  </main>
  <?php include "nav.php" ?>
  <script src="js/script.js"></script>
  <script>
    set_nav("history_page");
  </script>
</body>




</html>