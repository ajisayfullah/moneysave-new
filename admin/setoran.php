<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin - Setoran</title>
  <link rel="stylesheet" href="resources/css/setoran.css">
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
      <a href="verifikasi.php"><i class="bi bi-check2-circle"></i> Verifikasi</a>
      <a href="setoran.php" class="active"><i class="bi bi-wallet2"></i> Setoran</a>
      <a href="#"><i class="bi bi-file-earmark-text"></i> Laporan</a>
      <a href="#"><i class="bi bi-gear"></i> Pengaturan</a>
      <a href="#"><i class="bi bi-box-arrow-right"></i> Logout</a>
    </nav>
  </aside>

  <!-- Content -->
  <main class="content">
    <header>
      <h1>Data Setoran</h1>
      <p>Daftar setoran tabungan pengguna.</p>
    </header>

    <section class="table-container">
      <table>
        <thead>
          <tr>
            <th>No</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>No. Rekening</th>
            <th>Tanggal</th>
            <th>Jumlah Setoran</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>327601230001</td>
            <td>Fahri Maulana</td>
            <td>1234567890</td>
            <td>20/08/2025</td>
            <td>Rp 100.000</td>
            <td>
              <button class="btn-approve"><i class="bi bi-check2"></i></button>
              <button class="btn-reject"><i class="bi bi-x-circle"></i></button>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>327601230002</td>
            <td>Aji Prayoga</td>
            <td>9876543210</td>
            <td>21/08/2025</td>
            <td>Rp 200.000</td>
            <td>
              <button class="btn-approve"><i class="bi bi-check2"></i></button>
              <button class="btn-reject"><i class="bi bi-x-circle"></i></button>
            </td>
          </tr>
        </tbody>
      </table>
    </section>
  </main>

</body>
</html>
