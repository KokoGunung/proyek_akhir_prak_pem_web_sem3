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

<body class="bg-background font-body-md text-on-surface antialiased flex flex-col min-h-screen" data-halaman="rute">
  <?php include "header.php" ?>
  <main class="flex-1 flex flex-col relative w-full pt-16 pb-24 bg-surface">
    <div class="flex flex-col w-full">
      <!-- Top Visual Banner & Context Hero -->
      <div class="px-gutter pt-space-md pb-space-sm flex flex-col gap-space-sm">

        <div>
          <h1 class="font-headline-xl-mobile text-headline-xl-mobile text-primary-container tracking-tight">
            Peta Jalur KRL Jogja–Solo–Palur
          </h1>

        </div>


      </div>
      <!-- VIEW 1: SCHEMATIC TRANSIT MAP VIEW -->
      <div class="px-gutter pb-space-lg flex flex-col" id="view-schematic">
        <!-- Direction Pill Indicator -->
        <div
          class="flex items-center justify-between py-2 px-3 bg-primary-container text-on-primary rounded-lg shadow-sm mb-4">
          <div class="flex items-center gap-1.5">
            <span class="w-2.5 h-2.5 rounded-full bg-secondary-container"></span>
            <span class="font-label-caps text-label-caps uppercase tracking-wider text-secondary-fixed">Arah
              Operasional</span>
          </div>
          <div class="flex items-center gap-1 font-label-md text-label-md text-primary-fixed">
            <span>Yogyakarta (Barat)</span>
            <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
            <span>Palur (Timur)</span>
          </div>
        </div>
        <!-- Interactive Schematic Spine -->
        <div class="relative flex flex-col">
          <!-- Continuous Transit Line Background -->
          <div class="absolute left-6 top-6 bottom-8 w-1.5 bg-primary-container/20 rounded-full z-0"></div>
          <!-- Rail Ember Live Line Segment (animated feel) -->
          <div
            class="absolute left-6 top-6 bottom-8 w-1.5 bg-secondary-container rounded-full z-0 origin-top opacity-90">
          </div>
          <!-- 1. Yogyakarta (Hub Barat) -->
          <div class="station-node relative z-10 flex items-start gap-3.5 mb-5 cursor-pointer group"
            onclick="toggleDetails('station-yk')">
            <div
              class="w-12 h-12 rounded-xl bg-primary-container text-on-primary shadow-md flex flex-col items-center justify-center shrink-0 ring-4 ring-surface">
              <span class="font-label-caps text-label-caps tracking-widest text-secondary-container">01</span>
              <span class="font-label-md text-label-md leading-none">YK</span>
            </div>
            <div
              class="flex-1 bg-surface-container-lowest p-3.5 rounded-xl shadow-sm hover:shadow-md transition-shadow">
              <div class="flex items-center justify-between">
                <div class="flex items-center gap-1.5">
                  <span class="font-title-station text-title-station text-primary-container">Yogyakarta (Tugu)</span>

                </div>
              </div>


            </div>
          </div>
          <!-- 2. Lempuyangan -->
          <div class="station-node relative z-10 flex items-start gap-3.5 mb-5 cursor-pointer group"
            onclick="toggleDetails('station-lpn')">
            <div
              class="w-12 h-12 rounded-xl bg-surface-container-lowest text-primary-container shadow-sm flex flex-col items-center justify-center shrink-0 ring-4 ring-surface">
              <span class="font-label-caps text-label-caps text-on-surface-variant">02</span>
              <span class="font-label-md text-label-md leading-none font-bold">LPN</span>
            </div>
            <div
              class="flex-1 bg-surface-container-lowest p-3.5 rounded-xl shadow-sm hover:shadow-md transition-shadow">
              <div class="flex items-center justify-between">
                <span class="font-title-station text-title-station text-primary-container">Lempuyangan</span>
              </div>


            </div>
          </div>
          <!-- 3. Maguwo -->
          <div class="station-node relative z-10 flex items-start gap-3.5 mb-5 cursor-pointer group"
            onclick="toggleDetails('station-mgw')">
            <div
              class="w-12 h-12 rounded-xl bg-surface-container-lowest text-primary-container shadow-sm flex flex-col items-center justify-center shrink-0 ring-4 ring-surface">
              <span class="font-label-caps text-label-caps text-on-surface-variant">03</span>
              <span class="font-label-md text-label-md leading-none font-bold">MGW</span>
            </div>
            <div
              class="flex-1 bg-surface-container-lowest p-3.5 rounded-xl shadow-sm hover:shadow-md transition-shadow">
              <div class="flex items-center justify-between">
                <div class="flex items-center gap-1.5">
                  <span class="font-title-station text-title-station text-primary-container">Maguwo</span>

                </div>
              </div>


            </div>
          </div>
          <!-- 4. Brambanan -->
          <div class="station-node relative z-10 flex items-start gap-3.5 mb-5 cursor-pointer group"
            onclick="toggleDetails('station-bbn')">
            <div
              class="w-12 h-12 rounded-xl bg-surface-container-lowest text-primary-container shadow-sm flex flex-col items-center justify-center shrink-0 ring-4 ring-surface">
              <span class="font-label-caps text-label-caps text-on-surface-variant">04</span>
              <span class="font-label-md text-label-md leading-none font-bold">BBN</span>
            </div>
            <div
              class="flex-1 bg-surface-container-lowest p-3.5 rounded-xl shadow-sm hover:shadow-md transition-shadow">
              <div class="flex items-center justify-between">
                <div class="flex items-center gap-1.5">
                  <span class="font-title-station text-title-station text-primary-container">Brambanan</span>

                </div>
              </div>

            </div>
          </div>
          <!-- 5. Srowot -->
          <div class="station-node relative z-10 flex items-start gap-3.5 mb-5 cursor-pointer group"
            onclick="toggleDetails('station-swt')">
            <div
              class="w-12 h-12 rounded-xl bg-surface-container-lowest text-primary-container shadow-sm flex flex-col items-center justify-center shrink-0 ring-4 ring-surface">
              <span class="font-label-caps text-label-caps text-on-surface-variant">05</span>
              <span class="font-label-md text-label-md leading-none font-bold">SWT</span>
            </div>
            <div
              class="flex-1 bg-surface-container-lowest p-3.5 rounded-xl shadow-sm hover:shadow-md transition-shadow">
              <div class="flex items-center justify-between">
                <span class="font-title-station text-title-station text-primary-container">Srowot</span>
              </div>

            </div>
          </div>
          <!-- 6. Klaten (Hub Klaten) -->
          <div class="station-node relative z-10 flex items-start gap-3.5 mb-5 cursor-pointer group"
            onclick="toggleDetails('station-kt')">
            <div
              class="w-12 h-12 rounded-xl bg-primary-container text-on-primary shadow-md flex flex-col items-center justify-center shrink-0 ring-4 ring-surface">
              <span class="font-label-caps text-label-caps tracking-widest text-secondary-container">06</span>
              <span class="font-label-md text-label-md leading-none">KT</span>
            </div>
            <div
              class="flex-1 bg-surface-container-lowest p-3.5 rounded-xl shadow-sm hover:shadow-md transition-shadow">
              <div class="flex items-center justify-between">
                <div class="flex items-center gap-1.5">
                  <span class="font-title-station text-title-station text-primary-container">Klaten</span>

                </div>
              </div>


            </div>
          </div>
          <!-- 7. Ceper -->
          <div class="station-node relative z-10 flex items-start gap-3.5 mb-5 cursor-pointer group"
            onclick="toggleDetails('station-ce')">
            <div
              class="w-12 h-12 rounded-xl bg-surface-container-lowest text-primary-container shadow-sm flex flex-col items-center justify-center shrink-0 ring-4 ring-surface">
              <span class="font-label-caps text-label-caps text-on-surface-variant">07</span>
              <span class="font-label-md text-label-md leading-none font-bold">CE</span>
            </div>
            <div
              class="flex-1 bg-surface-container-lowest p-3.5 rounded-xl shadow-sm hover:shadow-md transition-shadow">
              <div class="flex items-center justify-between">
                <span class="font-title-station text-title-station text-primary-container">Ceper</span>
              </div>

            </div>
          </div>
          <!-- 8. Delanggu -->
          <div class="station-node relative z-10 flex items-start gap-3.5 mb-5 cursor-pointer group"
            onclick="toggleDetails('station-dl')">
            <div
              class="w-12 h-12 rounded-xl bg-surface-container-lowest text-primary-container shadow-sm flex flex-col items-center justify-center shrink-0 ring-4 ring-surface">
              <span class="font-label-caps text-label-caps text-on-surface-variant">08</span>
              <span class="font-label-md text-label-md leading-none font-bold">DL</span>
            </div>
            <div
              class="flex-1 bg-surface-container-lowest p-3.5 rounded-xl shadow-sm hover:shadow-md transition-shadow">
              <div class="flex items-center justify-between">
                <span class="font-title-station text-title-station text-primary-container">Delanggu</span>
              </div>

            </div>
          </div>
          <!-- 9. Gawok -->
          <div class="station-node relative z-10 flex items-start gap-3.5 mb-5 cursor-pointer group"
            onclick="toggleDetails('station-gw')">
            <div
              class="w-12 h-12 rounded-xl bg-surface-container-lowest text-primary-container shadow-sm flex flex-col items-center justify-center shrink-0 ring-4 ring-surface">
              <span class="font-label-caps text-label-caps text-on-surface-variant">09</span>
              <span class="font-label-md text-label-md leading-none font-bold">GW</span>
            </div>
            <div
              class="flex-1 bg-surface-container-lowest p-3.5 rounded-xl shadow-sm hover:shadow-md transition-shadow">
              <div class="flex items-center justify-between">
                <span class="font-title-station text-title-station text-primary-container">Gawok</span>
              </div>

            </div>
          </div>
          <!-- 10. Purwosari -->
          <div class="station-node relative z-10 flex items-start gap-3.5 mb-5 cursor-pointer group"
            onclick="toggleDetails('station-pws')">
            <div
              class="w-12 h-12 rounded-xl bg-surface-container-lowest text-primary-container shadow-sm flex flex-col items-center justify-center shrink-0 ring-4 ring-surface">
              <span class="font-label-caps text-label-caps text-on-surface-variant">10</span>
              <span class="font-label-md text-label-md leading-none font-bold">PWS</span>
            </div>
            <div
              class="flex-1 bg-surface-container-lowest p-3.5 rounded-xl shadow-sm hover:shadow-md transition-shadow">
              <div class="flex items-center justify-between">
                <div class="flex items-center gap-1.5">
                  <span class="font-title-station text-title-station text-primary-container">Purwosari</span>

                </div>
              </div>


            </div>
          </div>
          <!-- 11. Solo Balapan (Hub Solo) -->
          <div class="station-node relative z-10 flex items-start gap-3.5 mb-5 cursor-pointer group"
            onclick="toggleDetails('station-slo')">
            <div
              class="w-12 h-12 rounded-xl bg-primary-container text-on-primary shadow-md flex flex-col items-center justify-center shrink-0 ring-4 ring-surface">
              <span class="font-label-caps text-label-caps tracking-widest text-secondary-container">11</span>
              <span class="font-label-md text-label-md leading-none">SLO</span>
            </div>
            <div
              class="flex-1 bg-surface-container-lowest p-3.5 rounded-xl shadow-sm hover:shadow-md transition-shadow">
              <div class="flex items-center justify-between">
                <div class="flex items-center gap-1.5">
                  <span class="font-title-station text-title-station text-primary-container">Solo Balapan</span>

                </div>
              </div>


            </div>
          </div>
          <!-- 12. Solo Jebres -->
          <div class="station-node relative z-10 flex items-start gap-3.5 mb-5 cursor-pointer group"
            onclick="toggleDetails('station-sk')">
            <div
              class="w-12 h-12 rounded-xl bg-surface-container-lowest text-primary-container shadow-sm flex flex-col items-center justify-center shrink-0 ring-4 ring-surface">
              <span class="font-label-caps text-label-caps text-on-surface-variant">12</span>
              <span class="font-label-md text-label-md leading-none font-bold">SK</span>
            </div>
            <div
              class="flex-1 bg-surface-container-lowest p-3.5 rounded-xl shadow-sm hover:shadow-md transition-shadow">
              <div class="flex items-center justify-between">
                <div class="flex items-center gap-1.5">
                  <span class="font-title-station text-title-station text-primary-container">Solo Jebres</span>

                </div>
              </div>

            </div>
          </div>
          <!-- 13. Palur (Terminus Timur) -->
          <div class="station-node relative z-10 flex items-start gap-3.5 mb-2 cursor-pointer group"
            onclick="toggleDetails('station-pl')">
            <div
              class="w-12 h-12 rounded-xl bg-secondary-container text-on-secondary shadow-md flex flex-col items-center justify-center shrink-0 ring-4 ring-surface">
              <span class="font-label-caps text-label-caps tracking-widest text-secondary-fixed">13</span>
              <span class="font-label-md text-label-md leading-none font-bold">PL</span>
            </div>
            <div
              class="flex-1 bg-surface-container-lowest p-3.5 rounded-xl shadow-sm hover:shadow-md transition-shadow">
              <div class="flex items-center justify-between">
                <div class="flex items-center gap-1.5">
                  <span class="font-title-station text-title-station text-primary-container">Palur</span>

                </div>
              </div>


            </div>
          </div>
        </div>
      </div>
      <!-- Interactive Modal Bottom Sheet for Detail Preview -->
      <div class="fixed inset-0 z-50 bg-primary/40 backdrop-blur-sm hidden flex items-end justify-center"
        id="station-modal">
        <div
          class="w-full max-w-lg bg-surface-container-lowest rounded-t-2xl p-space-md shadow-2xl flex flex-col gap-space-sm transform transition-transform duration-300">
          <div class="w-10 h-1 rounded-full bg-outline-variant self-center mb-1"></div>
          <div class="flex items-start justify-between">
            <div>
              <span class="font-label-caps text-label-caps text-secondary-container uppercase tracking-wider"
                id="modal-station-code">KODE STASIUN</span>
              <h2 class="font-headline-lg text-headline-lg text-primary-container" id="modal-station-name">Nama Stasiun
              </h2>
            </div>
            <button
              class="w-9 h-9 rounded-full bg-surface-container flex items-center justify-center text-on-surface-variant hover:text-primary-container"
              onclick="closeModal()">
              <span class="material-symbols-outlined text-[20px]">close</span>
            </button>
          </div>
          <p class="font-body-md text-body-md text-on-surface-variant" id="modal-station-desc">Deskripsi perhentian
            stasiun dan integrasi transit langsung.</p>
          <div class="grid grid-cols-2 gap-2 mt-1">
            <button
              class="h-11 rounded-lg bg-surface-container text-primary-container font-label-lg text-label-lg flex items-center justify-center gap-1"
              onclick="closeModal()">
              <span class="material-symbols-outlined text-[18px]">close</span>
              <span>Tutup</span>
            </button>
            <button
              class="h-11 rounded-lg bg-secondary-container text-on-secondary font-label-lg text-label-lg shadow-sm flex items-center justify-center gap-1 active:scale-[0.98]"
              id="modal-action-btn">
              <span class="material-symbols-outlined text-[18px]">schedule</span>
              <span>Lihat Jadwal</span>
            </button>
          </div>
        </div>
      </div>
      <script>
        // Station Data Dictionary for Quick Micro-Interactions
        const stationData = {
          'station-yk': {
            code: 'YK / YOGYAKARTA',
            name: 'Stasiun Yogyakarta (Tugu)',
            desc: 'Stasiun kelas besar A dan hub utama DIY. Terkoneksi skybridge ke KA Bandara YIA dan terminal bus Trans Jogja Malioboro.'
          },
          'station-lpn': {
            code: 'LPN / LEMPUYANGAN',
            name: 'Stasiun Lempuyangan',
            desc: 'Stasiun bersejarah kereta rakyat dengan akses jalur pedestrian ramah sepeda ke pusat kuliner Danurejan.'
          },
          'station-mgw': {
            code: 'MGW / MAGUWO',
            name: 'Stasiun Maguwo',
            desc: 'Stasiun bandara pertama di Indonesia yang terintegrasi terowongan bawah tanah langsung ke terminal Bandara Adisutjipto.'
          },
          'station-bbn': {
            code: 'BBN / BRAMBANAN',
            name: 'Stasiun Brambanan',
            desc: 'Akses utama menuju Kompleks Percandian Prambanan. Dilengkapi area parkir bus wisata dan shuttle dokar/ojek.'
          },
          'station-swt': {
            code: 'SWT / SROWOT',
            name: 'Stasiun Srowot',
            desc: 'Stasiun persinggahan asri penghubung desa pengrajin tenun lurik Pedan dan Pabrik Gula Gondang Winangoen.'
          },
          'station-kt': {
            code: 'KT / KLATEN',
            name: 'Stasiun Klaten',
            desc: 'Stasiun transit utama Kabupaten Klaten. Melayani KRL Commuter Line dan kereta api jarak jauh antarkota Jawa.'
          },
          'station-ce': {
            code: 'CE / CEPER',
            name: 'Stasiun Ceper',
            desc: 'Melayani sentra pengecoran logam Batur dan logistik pergudangan Klaten Utara.'
          },
          'station-dl': {
            code: 'DL / DELANGGU',
            name: 'Stasiun Delanggu',
            desc: 'Pemberhentian komuter di kawasan sentra lumbung beras Delanggu dan mata air alami Ponggok.'
          },
          'station-gw': {
            code: 'GW / GAWOK',
            name: 'Stasiun Gawok',
            desc: 'Stasiun perbatasan Sukoharjo dengan keunikan pasar tradisional Pon Gawok dan industri kerajinan rotan.'
          },
          'station-pws': {
            code: 'PWS / PURWOSARI',
            name: 'Stasiun Purwosari',
            desc: 'Stasiun cagar budaya di barat Solo. Titik awal Railbus Bathara Kresna serta integrasi Batik Solo Trans Slamet Riyadi.'
          },
          'station-slo': {
            code: 'SLO / SOLO BALAPAN',
            name: 'Stasiun Solo Balapan',
            desc: 'Pusat transportasi kota Bengawan dengan fasilitas Skybridge pejalan kaki ke Terminal Tirtonadi & KA Bandara Adi Soemarmo.'
          },
          'station-sk': {
            code: 'SK / SOLO JEBRES',
            name: 'Stasiun Solo Jebres',
            desc: 'Bangunan cagar budaya bergaya Neoklasik peninggalan Kasunanan Surakarta. Pintu masuk komuter civitas akademika UNS.'
          },
          'station-pl': {
            code: 'PL / PALUR',
            name: 'Stasiun Palur',
            desc: 'Stasiun akhir elektrifikasi Karanganyar. Memiliki fasilitas Park & Ride modern bagi komuter dari Sragen & Madiun.'
          }
        };

        const modal = document.getElementById('station-modal');
        const modalCode = document.getElementById('modal-station-code');
        const modalName = document.getElementById('modal-station-name');
        const modalDesc = document.getElementById('modal-station-desc');

        function toggleDetails(stationKey) {
          const data = stationData[stationKey];
          if (!data) return;

          modalCode.textContent = data.code;
          modalName.textContent = data.name;
          modalDesc.textContent = data.desc;


          modal.classList.remove('hidden');
        }

        function closeModal() {
          modal.classList.add('hidden');
        }

        modal.addEventListener('click', (e) => {
          if (e.target === modal) closeModal();
        });

      </script>
    </div>
  </main>
  <?php include "nav.php" ?>
  <script src="js/script.js"></script>
  <script>
    set_nav("route_page");
  </script>
</body>

</html>