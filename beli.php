<?php 
  session_start();
  $arah = "";
  $stasiun = $_SESSION["stasiun"];
  if(!isset($_GET["arah"])){
    header("Location: beli.php?arah=YP");
    exit;
  }else{
    $arah = $_GET["arah"];
    if($arah != "YP" && $arah != "PY"){
      header("Location: beli.php?arah=PY");
      exit;
    }
  }
  
?>
<!DOCTYPE html>

<html lang="id">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover"
    name="viewport" />
  <meta content="mobile_tab" name="shell-type" />
  <title>Beli Tiket</title>
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

<body class="bg-background font-body-md text-on-surface antialiased flex flex-col min-h-screen" data-halaman="beli">
  <?php include "header.php";
  ?>
  <main class="flex-1 flex flex-col self-center relative w-4/6 pt-16 pb-24 bg-surface">
    <div class="flex flex-col w-full px-margin pt-4 gap-space-md">
      <h1 class="font-headline-xl-mobile text-headline-xl-mobile text-primary">Beli E-Tiket</h1>
      <form id="form-beli" action="buy_check.php" method="post" 
            class="flex flex-col gap-space-md bg-surface-container-lowest rounded-xl p-5 shadow-sm">
        <div class="flex flex-col" items-center justify-center>
          <label class="flex flex-col gap-1.5">
          <span class="self-center font-label-md text-label-md text-on-surface-variant">Arah</span></label>
          <div class="flex items-center justify-center w-1/2 self-center gap-space-sm ">
            <a href="beli.php?arah=<?php if($arah == "YP"){ echo "PY"; }else{ echo "YP"; } ?>">
              <button id="arah_btn" type="button" class="self-center flex">
                <span class="material-symbols-outlined text-[24px] self-center">swap_vert</span>
              </button>
            </a>
              <?php if($arah == "YP"){ ?> 
                <p>Yogyakarta -> Palur</p> 
              <?php }else{ ?> 
                <p>Palur -> Yogyakarta</p>
              <?php } ?>
          </div>
        </div>
        <label class="flex flex-col gap-1.5">
          <span class="font-label-md text-label-md text-on-surface-variant">Asal</span>
          <select id="asal" name="asal" required
            class="w-full h-12 px-4 rounded-lg bg-surface border border-outline-variant font-body-md text-body-md text-on-surface focus:outline-none focus:ring-2 focus:ring-secondary-container">
            <?php if($arah == "YP"){
                    for($i = 0; $i < count($_SESSION["stasiun"]); $i++){ ?>
                    <option>
                      <?php echo $stasiun[$i]["nama"] ?>
                    </option>
            <?php }}else{ 
                    for($i = count($stasiun) - 1; $i >= 0; $i--){?> 
                    <option>
                      <?php echo $stasiun[$i]["nama"] ?>
                    </option>  
                  <?php }} ?>
          </select>
        </label>
        <label class="flex flex-col gap-1.5">
          <span class="font-label-md text-label-md text-on-surface-variant">Tujuan</span>
          <select id="tujuan" name="tujuan" required
            class="w-full h-12 px-4 rounded-lg bg-surface border border-outline-variant font-body-md text-body-md text-on-surface focus:outline-none focus:ring-2 focus:ring-secondary-container">
            <?php if($arah == "YP"){
                    for($i = 1; $i < count($_SESSION["stasiun"]); $i++){ ?>
                    <option>
                      <?php echo $stasiun[$i]["nama"] ?>
                    </option>
            <?php }}else{ 
                    for($i = count($stasiun) - 2; $i >= 0; $i--){?> 
                    <option>
                      <?php echo $stasiun[$i]["nama"] ?>
                    </option>  
                  <?php }} ?>
          </select>
        </label>
        <div class="flex flex-col gap-1.5">
          <span class="font-label-md text-label-md text-on-surface-variant">Penumpang</span>
          <div class="flex items-center justify-between h-12 px-1 rounded-lg bg-surface border border-outline-variant">
            <button type="button" id="kurang" aria-label="Kurangi"
              class="w-10 h-10 flex items-center justify-center rounded-lg text-primary hover:bg-surface-container transition-colors"><span
                class="material-symbols-outlined">remove</span></button>
            <span id="jumlah_tampilan" class="font-label-lg text-label-lg text-primary">1</span>
            <button type="button" id="tambah" aria-label="Tambah"
              class="w-10 h-10 flex items-center justify-center rounded-lg text-primary hover:bg-surface-container transition-colors"><span
                class="material-symbols-outlined">add</span></button>
          </div>
        </div>
        <div class="flex items-center justify-between px-space-sm py-3 rounded-lg bg-surface-container-low">
          <span class="font-body-md text-body-md text-on-surface-variant">Total</span>
          <span class="font-title-station text-title-station text-secondary">Rp <span id="total_label"></span></span>
          <input type="hidden" id="total" name="total" value="0">
        </div>
        <p id="pesan" class="hidden font-body-sm text-body-sm" style="color:#ba1a1a;"></p>
        <button type="submit"
          class="h-12 rounded-lg bg-secondary-container hover:bg-secondary text-on-secondary font-label-lg text-label-lg transition-colors">Bayar</button>
      </form>
    </div>
  </main>

  <script>
    var MAKS_PENUMPANG = 5;
    var TARIF = 8000;
    var jumlah = 1;
    var total_harga
    var elPesan = document.getElementById("pesan");

    function setTotal() {
      total_harga = TARIF *jumlah;
      document.getElementById("total").value = total_harga.toString();
      document.getElementById("jumlah_tampilan").textContent = jumlah;
      document.getElementById("total_label").textContent = total_harga;
      console.log(document.getElementById("total").value)
    }

    document.getElementById("kurang").addEventListener("click", function () {
      if (jumlah > 1) jumlah--;
      setTotal();
    });
    document.getElementById("tambah").addEventListener("click", function () {
      if (jumlah < MAKS_PENUMPANG) jumlah++;
      setTotal();
    });

    setTotal();
  </script>
  <?php include "nav.php" ?>
  <script src="js/script.js"></script>
  <script>
    set_nav("buy_page");
  </script>
</body>

</html>