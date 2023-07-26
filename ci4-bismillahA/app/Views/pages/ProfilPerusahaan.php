<!DOCTYPE html>
<html lang="en">

<?= $this->include('/partials/headerPerusahaan'); ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/cssProfilPerusahaan.css">
    <title>Tampilan Sign-Up Perusahaan</title>
</head>
<body>
      <div class="Perusahaan">
        <form class="company" enctype="multipart/form-data" action="/editPerusahaan/<?= $company['id_perusahaan']?>" method="POST">
            <h2>Profil Perusahaan</h2>
            <center>
              <img alt="Zidan Yohanza" src="/img/<?= $company['gambar_perusahaan'];?>" srcset="/img/<?= $company['gambar_perusahaan'];?>" data-ll-status="loaded" width="140" height="180"style="border-radius: 10px">
            </center>
              <label for="image">Foto Profil</label><br>
            <input type="file" class="form-control" name="gambar_perusahaan" placeholder="Gambar Profil"><br>

            <label for="nama_perusahaan">Nama Perusahaan</label><br>
            <input type="text" class="form-control" name="nama_perusahaan" value="<?= $company['nama_perusahaan'];?>" placeholder="Masukkan Nama Perusahaan"><br>

            <label for="alamat_perusahaan">Alamat Perusahaan</label><br>
            <input type="text" class="form-control" name="alamat_perusahaan" value="<?= $company['alamat_perusahaan'];?>" placeholder="Masukkan Alamat"><br>

            <label for="telepon_perusahaan">Telepon Perusahaan</label><br>
            <input type="text" class="form-control" name="telepon_perusahaan" value="<?= $company['telepon_perusahaan'];?>" placeholder="Masukkan Nomor Telepon"><br>

            <label for="address">Penanggungjawab Perusahaan</label><br>
            <input type="text" class="form-control" name="pj_perusahaan" value="<?= $company['pj_perusahaan'];?>" placeholder="Masukkan Penanggungjawab Perusahaan"><br>

          
            <label for="email">Email</label><br>
            <input type="email" class="form-control" name="email" value="" placeholder="Email"><br>

            <label for="password">Password</label><br>
            <input type="password" class="form-control" name="password" value="" placeholder="Password"><br>

            <center>
              <button type="submit" name="Update_Profile" value="Update_Profile">Update Profile</button>
            </center>
        </form>
      </div>
</body>
</html>