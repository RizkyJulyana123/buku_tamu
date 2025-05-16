<?php
session_start();
$pesan = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Ganti sesuai username & password kamu
  if ($username == "admin" && $password == "123456") {
    $_SESSION['admin'] = true;
    header("Location: admin_bukutamu.php");
    exit;
  } else {
    $pesan = "Username atau password salah!";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login Admin</title>
  <style>
    body {
      font-family: Arial;
      background-color: #ffe6f0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    form {
      background: #fff0f5;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 10px #ccc;
    }
    input {
      padding: 10px;
      width: 100%;
      margin: 10px 0;
    }
    .btn {
      background-color: #ec407a;
      border: none;
      color: white;
      padding: 10px;
      width: 100%;
      border-radius: 8px;
      cursor: pointer;
    }
    .btn:hover {
      background-color: #d81b60;
    }
    .error {
      color: red;
      text-align: center;
    }
  </style>
</head>
<body>
  <form method="POST">
    <h2>Login Admin</h2>
    <input type="text" name="username" placeholder="Username" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <button class="btn" type="submit">Login</button>
    <?php if ($pesan != '') echo "<p class='error'>$pesan</p>"; ?>
  </form>
</body>
</html>
