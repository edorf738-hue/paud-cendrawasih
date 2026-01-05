<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Login Admin - PAUD Ceria</title>
  <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>

<header class="admin-header">
  <a href="{{ route('home') }}" class="back">←</a>
  <div>
    <h1>login admin</h1>
    <p>akses dashboard pendaftaran</p>
  </div>
</header>

<main class="login-container">

  <div class="login-card">
    <h2>Masuk Dashboard Admin</h2>
    <p>Masukkan password untuk melanjutkan</p>

<form action="{{ route('admin.login') }}" method="post">
      @csrf

      <div class="input-group">
        <label>Password</label>
        <input type="password" name="password" required>
      </div>

      <button type="submit" class="login-btn">Login</button>
    </form>
  </div>

</main>

</body>
</html>
