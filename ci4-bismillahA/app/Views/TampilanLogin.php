<?= $this->include('/partials/headerLogin'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/cssTampilanLogin.css">
    <title>Tampilan Login</title>
</head>
<body>
  <div class="container">
    <h1>Login</h1>
    <?php if(session()->get('success')) : ?>
      <p style="color: green; font-size: small;"><?= session()->get('success') ?></p>
    <?php endif; ?>
    <form action="/" method="POST">
      <label>Email</label><br>
      <input type="text" class="form-control" name="email" placeholder="Masukkan Email" required><br>
      <label>Password</label><br>
      <input type="password" name="password" placeholder="Masukkan Password" required><br>
      <?php if(isset($validation)) : ?>
        <?= $validation->listErrors() ?>
      <?php endif; ?>
      <a class="akun" href="/register" style="color: blue;float: right;">Anda Belum memiliki Akun?</a>
      <button type="submit" name="submit" value="login" >Log in</button>
    </form>
  </div>     
</body>
</html>