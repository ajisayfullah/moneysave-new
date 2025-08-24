<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin - Verifikasi Akun</title>
  <link rel="stylesheet" href="resources/css/verifikasi.css">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>

  <!-- Sidebar -->
  <aside class="sidebar">
    <div class="logo">
      <h2>MS Admin</h2>
    </div>
    <nav class="menu">
      <a href="#"><i class="bi bi-house-door"></i> Dashboard</a>
      <a href="data_user.php"><i class="bi bi-people"></i> Data User</a>
      <a href="verifikasi.php" class="active"><i class="bi bi-check2-circle"></i> Verifikasi</a>
      <a href="setoran.php"><i class="bi bi-wallet2"></i> Setoran</a>
      <a href="#"><i class="bi bi-file-earmark-text"></i> Laporan</a>
      <a href="#"><i class="bi bi-gear"></i> Pengaturan</a>
      <a href="#"><i class="bi bi-box-arrow-right"></i> Logout</a>
    </nav>
  </aside>

  <!-- Content -->
  <main class="content">
    <header>
      <h1>Verifikasi Akun</h1>
      <p>Daftar calon nasabah yang menunggu verifikasi.</p>w
    </header>

    <section class="table-container">
      <table>
        <thead>
          <tr>
            <th>No</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>TTL</th>
            <th>Agama</th>
            <th>Alamat</th>
            <th>Tujuan</th>
            <th>Setoran</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>35158273210202</td>
            <td>Fahri Maulana Al Ghazali</td>
            <td>Sidoarjo, 13/09/2005</td>
            <td>Islam</td>
            <td>TAMAN PONDOK LEGI</td>
            <td>Investasi</td>
            <td>100.000</td>
            <td>
              <button class="btn-approve"><i class="bi bi-check2"></i></button>
              <button class="btn-reject"><i class="bi bi-x-circle"></i></button>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>35158273882992</td>
            <td>Aji Prayoga Sayfullah</td>
            <td>Surabaya, 05/08/2006</td>
            <td>Islam</td>
            <td>JL. MERDEKA NO. 10</td>
            <td>Menabung</td>
            <td>100.000</td>
            <td>
              <button class="btn-approve"><i class="bi bi-check2"></i></button>
              <button class="btn-reject"><i class="bi bi-x-circle"></i></button>
            </td>
          </tr>
          <!-- Tambahkan data lain sesuai kebutuhan -->
        </tbody>
      </table>
    </section>
  </main>

</body>
</html>
