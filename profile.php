<?php
// Nanti bisa tambahin session cek login di sini
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile - Money Save</title>
  <link rel="stylesheet" href="resources/css/profile.css">
</head>
<body>

  <!-- Header -->
  <div class="header">
    <button onclick="history.back()">
      <img src="resources/icon/kembali.png" alt="Kembali">
    </button>
    <img src="resources/img/money_save.png" alt="Logo" class="logo">
    <div style="width:24px;"></div> <!-- biar seimbang -->
  </div>

  <!-- Profile Info -->
  <div class="profile-container">
    <img src="resources/img/profile.png" alt="Foto Profil">
    <h3>Fahri Maulana</h3>
  </div>

  <!-- Menu List -->
  <div class="menu-list">
    <div class="menu-item">
      <div class="left">
        <img src="resources/icon/user.png" alt="">
        <span class="text">Informasi Profile</span>
      </div>
      <img src="resources/icon/arrow.png" alt="">
    </div>

    <div class="menu-item">
      <div class="left">
        <img src="resources/icon/guard.png" alt="">
        <span class="text">Keamanan Akun</span>
      </div>
      <img src="resources/icon/arrow.png" alt="">
    </div>

    <div class="menu-item">
      <div class="left">
        <img src="resources/icon/settings.png" alt="">
        <span class="text">Settings</span>
      </div>
      <img src="resources/icon/arrow.png" alt="">
    </div>

    <div class="menu-item">
      <div class="left">
        <img src="resources/icon/information.png" alt="">
        <span class="text">Syarat & Ketentuan</span>
      </div>
      <img src="resources/icon/arrow.png" alt="">
    </div>

    <div class="menu-item">
      <div class="left">
        <img src="resources/icon/help.png" alt="">
        <span class="text">Help Center</span>
      </div>
      <img src="resources/icon/arrow.png" alt="">
    </div>
  </div>

  <!-- Logout -->
  <div class="logout">Keluar</div>

  <!-- Footer -->
  <div class="footer">
        <div class="footer-item">
            <img src="resources/icon/home_polos.png" alt="Home">
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
            <img src="resources/icon/profile_isi.png" alt="Profile">
            <p>Profile</p>
        </div>
    </div>

</body>
</html>
