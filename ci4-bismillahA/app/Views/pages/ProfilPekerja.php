<!DOCTYPE html>
<html lang="en">

<?= $this->include('/partials/headerPekerja'); ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/csSProfilPekerja.css">
    <title>Tampilan Sign-Up Pencari Kerja</title>
</head>
<body>

      <div class="pencariKerja">
        <form class="worker" enctype="multipart/form-data" action="/editPekerja/<?= $pekerja['id_pencariKerja']?>" method="POST">
            <h2>Profil Pencari Kerja</h2>
            <center>
              <img alt="Zidan Yohanza" src="/img/<?= $pekerja['gambar_pekerja'];?>" srcset="/img/<?= $pekerja['gambar_pekerja'];?>" data-ll-status="loaded" width="140" height="180"style="border-radius: 10px">
            </center>
              <label for="image">Foto Profil</label><br>
            <input type="file" class="form-control" name="gambar_pekerja" placeholder="Gambar Profil"><br>

            <label for="nama_pekerja">Nama Lengkap</label><br>
            <input type="text" class="form-control" name="nama_pekerja" value="<?= $pekerja['nama_pekerja'];?>" placeholder="Nama Lengkap"><br>

            <label for="jenis_kelamin">Jenis Kelamin</label><br>
            <input type="text" class="form-control" name="jenis_kelamin" value="<?= $pekerja['jenis_kelamin'];?>" placeholder="Jenis Kelamin"><br>

            <label for="tgl_lahir">Tanggal Lahir</label><br>
            <input type="text" class="form-control" name="tgl_lahir" value="<?= $pekerja['tgl_lahir'];?>" placeholder="Tanggal Lahir(yyyy/mm/dd)"><br>

            <label for="no_hp">No. Handphone</label><br>
            <input type="text" class="form-control" name="no_hp" value="<?= $pekerja['no_hp'];?>" placeholder="Nomor Handphone"><br>

            <label for="address">Alamat</label><br>
            <input type="textarea" class="form-control" name="address" value="<?= $pekerja['address'];?>" placeholder="Alamat"><br>
          
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