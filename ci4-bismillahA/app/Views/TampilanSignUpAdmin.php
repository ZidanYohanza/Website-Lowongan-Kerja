<?= $this->include('/partials/headerLogin'); ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/cssTampilanSignUpPencariKerja.css">
    <title>Tampilan Sign-Up Pencari Kerja</title>
</head>
<body>

      <div class="adminn">
        <form class="admin" action="/registerAdmin" method="POST">
            <h2>Daftar sebagai Pencari Admin</h2>
            <?php if(session()->get('success')) : ?>
            <p style="color: green; font-size: small;"><?= session()->get('success') ?></p>
            <?php endif; ?>

            <label for="namaAdmin">Nama Lengkap</label><br>
            <input type="namaAdmin" class="form-control" name="namaAdmin" placeholder="Nama Lengkap"><br>

            <label for="email">Email</label><br>
            <input type="email" class="form-control" name="email" placeholder="Email"><br>

            <label for="password">Password</label><br>
            <input type="password" class="form-control" name="password" placeholder="Password"><br>

            <label for="password">Konfirmasi Password</label><br>
            <input type="password" class="form-control" name="password_confirm" placeholder="Konfirmasi Password"><br>
            <?php if(isset($validation)) : ?>
              <p style="color: red; font-size: small;"><?= $validation->listErrors() ?> 
            <?php endif; ?>
            <p > Already have an acoount? <a href="/login" style="color:blue">Click here</a> to login</p>
            <center>
              <button type="submit" name="signup" value="signup">Sign-Up</button>
            </center>
        </form>
      </div>
   
</body>
</html>