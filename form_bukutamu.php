<?php include 'koneksi.php'; ?>

<?php
$sukses = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nama = $_POST['nama'];
  $email = $_POST['email'];
  $keperluan = $_POST['keperluan'];

  $query = "INSERT INTO tamu (nama, email, keperluan) VALUES ('$nama', '$email', '$keperluan')";
  if (mysqli_query($conn, $query)) {
    $sukses = true;
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Form Buku Tamu</title>
  <style>
    body {
      font-family: Arial;
      background-color: #ffe6f0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    form, .sukses {
      background: #fff0f5;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 10px #ccc;
      width: 300px;
      text-align: center;
    }
    input, textarea {
      width: 100%;
      margin: 10px 0;
      padding: 10px;
    }
    .btn {
      background-color: #ec407a;
      color: white;
      border: none;
      padding: 10px;
      width: 100%;
      border-radius: 8px;
      cursor: pointer;
    }
    .btn:hover {
      background-color: #d81b60;
    }
  </style>
</head>
<body>

<?php if (!$sukses): ?>
  <form method="POST">
    <h2>Form Buku Tamu</h2>
    <input type="text" name="nama" placeholder="Nama Lengkap" required>
    <input type="email" name="email" placeholder="Email" required>
    <textarea name="keperluan" placeholder="Keperluan" required></textarea>
    <button class="btn" type="submit">Kirim</button>
  </form>
<?php else: ?>
  <div class="sukses">
    <h3>✅ Data berhasil dikirim!</h3>
    <a href="index.php" class="btn">Kembali ke Dashboard</a>
  </div>
<?php endif; ?>

</body>
</html>
