<?php
session_start();
if (!isset($_SESSION['admin'])) {
  header("Location: login_admin.php");
  exit;
}

include 'koneksi.php';
$data = mysqli_query($conn, "SELECT * FROM tamu ORDER BY waktu DESC");
?>

<!DOCTYPE html>
<html>
<head>
  <title>Data Buku Tamu</title>
  <style>
    body {
      font-family: Arial;
      background-color: #fff0f5;
      padding: 20px;
    }
    table {
      border-collapse: collapse;
      width: 100%;
      background: white;
    }
    th, td {
      border: 1px solid #ccc;
      padding: 8px;
    }
    th {
      background-color: #ec407a;
      color: white;
    }
    a.logout {
      float: right;
      background: #d32f2f;
      color: white;
      padding: 8px 12px;
      text-decoration: none;
      border-radius: 6px;
    }
  </style>
</head>
<body>
  <h2>👩‍💼 Data Buku Tamu</h2>
  <a href="index.php" class="logout">Keluar ke Dashboard</a>
  <table>
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Keperluan</th>
      <th>Waktu</th>
    </tr>
    <?php $no = 1; while ($row = mysqli_fetch_assoc($data)): ?>
      <tr>
        <td><?= $no++ ?></td>
        <td><?= htmlspecialchars($row['nama']) ?></td>
        <td><?= htmlspecialchars($row['email']) ?></td>
        <td><?= htmlspecialchars($row['keperluan']) ?></td>
        <td><?= $row['waktu'] ?></td>
      </tr>
    <?php endwhile; ?>
  </table>
</body>
</html>
