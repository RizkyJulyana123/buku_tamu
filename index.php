<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Dashboard Buku Tamu</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #ffe6f0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    .dashboard {
      background-color: #fff0f5;
      padding: 40px;
      border-radius: 15px;
      text-align: center;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
    }
    h1 {
      color: #d81b60;
      margin-bottom: 30px;
    }
    .btn {
      display: block;
      background-color: #ec407a;
      color: white;
      padding: 15px 25px;
      margin: 15px 0;
      border: none;
      border-radius: 10px;
      text-decoration: none;
      font-weight: bold;
      transition: background 0.3s ease;
    }
    .btn:hover {
      background-color: #d81b60;
    }
  </style>
</head>
<body>
  <div class="dashboard">
    <h1>📖 Buku Tamu Perpustakaan</h1>
    <a href="form_bukutamu.php" class="btn">📚 Saya Pengunjung</a>
    <a href="login_admin.php" class="btn">👩‍💼 Masuk Sebagai Admin</a>
  </div>
</body>
</html>
