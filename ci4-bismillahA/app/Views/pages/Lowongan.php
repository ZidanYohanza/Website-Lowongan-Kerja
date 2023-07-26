<!DOCTYPE html>
<html lang="en">

<?= $this->include('/partials/headerPerusahaan'); ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/cssProfilLowongan.css">
    <title>Pasang Lowongan</title>
</head>
<body>

      <div class="lowongan">
        <form class="lowong" enctype="multipart/form-data" action="/editLowongan/<?= $company['id_perusahaan']?>" method="POST">
            <h2>Pemasangan Lowongan</h2>
            <center>
              <img alt="Zidan Yohanza" src="/img/<?= $company['gambar_perusahaan'];?>" srcset="/img/<?= $company['gambar_perusahaan'];?>" data-ll-status="loaded" width="140" height="180"style="border-radius: 10px">
            </center>

            <label for="nama_lowongan">Nama Lowongan</label><br>
            <input type="text" class="form-control" name="nama_lowongan" value="" placeholder="Nama Lowongan"><br>

            <label for="syarat_lowongan">Syarat Lowongan</label><br>
            <input type="textarea" class="form-control" name="syarat_lowongan" value="" placeholder="Syarat Lowongan"><br>

            <label for="deskripsi_lowongan">Deskripsi Lowongan</label><br>
            <input type="textarea" class="form-control" name="deskripsi_lowongan" value="" placeholder="Deskripsi Lowongan"><br>

            <label for="gaji">Gaji</label><br>
            <input type="text" class="form-control" name="gaji" value="" placeholder="Gaji"><br>

            <center>
              <button type="submit" name="create Lowongan" value="create Lowongan">Buat Lowongan</button>
            </center>
        </form>
      </div>
</body>
</html>