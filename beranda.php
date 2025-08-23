<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Money Save</title>
    <!-- Panggil CSS -->
    <link rel="stylesheet" href="resources/css/beranda.css">
</head>
<body>
    <!-- Header -->
    <div class="header">
        <div class="header-left">
            <p class="salam">Selamat Malam, Fahri Maulana</p>
            <img src="resources/img/money_save.png" alt="Logo" class="logo">
        </div>
        <div class="header-right">
            <img src="resources/img/profile.png" alt="Profile" class="profile-pic">
        </div>
    </div>
    <hr class="header-divider">

    <!-- Card Rekening -->
    <div class="rekening-card">
        <p class="nama">FAHRI MAULANA AL GHAZALI</p>
        <p class="rekening">HM Taplus Muda | 7263-2938-2390-****</p>
        <div class="saldo">
            <p class="rp">Rp ********</p>
        </div>
        <div class="info">
            <div>
                <p>Pendapatan Bunga</p>
                <span>Rp 50.000</span>
            </div>
            <div>
                <p>Suku Bunga</p>
                <span>7,00% p.a</span>
            </div>
        </div>
    </div>

    <!-- Target Menabung -->
    <div class="target-section">
        <div class="target-header">
            <p>Target Menabung</p>
            <!-- Tombol Tambah Target -->
            <button id="openModalBtn" class="btn-tambah-target">+ Tambah Target</button>

            <!-- Overlay -->
            <div id="modalOverlay" class="modal-overlay">
            <div class="modal-box">
                <!-- Header -->
                <div class="modal-header">
                <h3>Tambah Target</h3>
                <span id="closeModalBtn" class="close-btn">&times;</span>
                </div>

                <!-- Body -->
                <div class="modal-body">
                <label>Nama Target</label>
                <input type="text" placeholder="Contoh: Beli Laptop">

                <label>Tenggat Waktu</label>
                <div class="input-icon">
                    <input type="date">
                    <span class="icon"></span>
                </div>

                <h4>Rincian Pengeluaran</h4>

                <div class="rincian-item">
                    <input type="text" placeholder="Pengeluaran">
                    <input type="text" value="Rp 0">
                </div>

                <div class="rincian-item">
                    <input type="text" placeholder="Pengeluaran">
                    <input type="text" value="Rp 0">
                </div>

                <button class="btn-tambah-rincian">
                    <span class="plus-icon">+</span> Tambah Rincian Pengeluaran
                </button>
                </div>

                <!-- Footer -->
                <div class="modal-footer">
                <button class="btn-simpan">Simpan</button>
                <button class="btn-batal" id="closeModalBtn2">Batal</button>
                </div>
            </div>
            </div>

        </div>

        <!-- Target 1 -->
        <div class="target-card">
            <p class="judul">Kunjungan Industri Bali</p>
            <p class="target-info">Rp 5.000.000</p>
            <div class="progress">
                <div class="progress-fill" style="width:30%"></div>
            </div>
            <p class="progress-text">Rp 1.500.000 / Rp 5.000.000</p>
            <ul class="detail-target">
                <li>Transportasi: Rp 500.000</li>
                <li>Hotel: Rp 1.500.000</li>
                <li>Oleh-oleh: Rp 1.000.000</li>
                <li>Uang Saku: Rp 2.000.000</li>
            </ul>
        </div>

        <!-- Target 2 -->
        <div class="target-card">
            <p class="judul">Kunjungan Industri Bali</p>
            <p class="target-info">Rp 5.000.000</p>
            <div class="progress">
                <div class="progress-fill" style="width:30%"></div>
            </div>
            <p class="progress-text">Rp 1.500.000 / Rp 5.000.000</p>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <div class="footer-item">
            <img src="resources/icon/home.png" alt="Home">
            <p>Beranda</p>
        </div>
        <div class="footer-item">
            <img src="resources/icon/riwayat.png" alt="Riwayat">
            <p>Riwayat</p>
        </div>
        <div class="footer-item qr">
            <img src="resources/icon/money.png" alt="Wallet">
        </div>
        <div class="footer-item">
            <img src="resources/icon/notif.png" alt="Notif">
            <p>Notifikasi</p>
        </div>
        <div class="footer-item">
            <img src="resources/icon/profile.png" alt="Profile">
            <p>Profile</p>
        </div>
    </div>
</body>
<script>
  const modalOverlay = document.getElementById("modalOverlay");
  const openModalBtn = document.getElementById("openModalBtn");
  const closeModalBtn = document.getElementById("closeModalBtn");
  const closeModalBtn2 = document.getElementById("closeModalBtn2");

  // buka modal
  openModalBtn.addEventListener("click", () => {
    modalOverlay.style.display = "flex";
  });

  // tutup modal
  [closeModalBtn, closeModalBtn2].forEach(btn => {
    btn.addEventListener("click", () => {
      modalOverlay.style.display = "none";
    });
  });

  // klik luar modal untuk tutup
  modalOverlay.addEventListener("click", (e) => {
    if (e.target === modalOverlay) {
      modalOverlay.style.display = "none";
    }
  });
</script>

</html>
