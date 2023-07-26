<!DOCTYPE html>
<html lang="en">

<?= $this->include('/partials/headerPekerja'); ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/cssListLowong.css">
    <title>Pelamaran</title>
</head>
<body>
      <div class="confirm">
        <form class="listLowong" enctype="multipart/form-data" action="/listLowong/<?= $lowong['id_lowongan'];?>" method="POST">
        <h2>Pelamaran</h2>

            <h4 class="form-control" name="nama_lowongan" value="">Lowongan ditawarkan : <?= $lowong['nama_lowongan'];?></h4><br>

            <h4 class="form-control" name="syarat_lowongan" value="">Syarat Lowongan : <?= $lowong['syarat_lowongan'];?></h4><br>

            <h4 class="form-control" name="deskripsi_lowongan" value="">Deskripsi Lowongan : <?= $lowong['deskripsi_lowongan'];?></h4><br>

            <h4 class="form-control" name="gaji" value="">Gaji : <?= $lowong['gaji'];?></h4><br>

            <?php foreach($pekerja as $row) :  ?>
                <center>
                    <img alt="Zidan Yohanza" src="/img/<?= $row['gambar_pekerja'];?>" srcset="/img/<?= $row['gambar_pekerja'];?>" data-ll-status="loaded" width="140" height="180"style="border-radius: 10px">
                </center><br>

                <h4 class="form-control" name="nama_pelamar" value="">Nama Pelamar : <?= $row['nama_pekerja'];?></h4><br>

                <h4 class="form-control" name="nama_lowongan" value="">Jenis Kelamin Pelamar : <?= $row['jenis_kelamin'];?></h4><br>

                <h4 class="form-control" name="nama_lowongan" value="">Alamat Pelamar : <?= $row['address'];?></h4><br>
            <?php endforeach; ?> 

            <label for="tgl_daftar">Tanggal Pendaftaran</label><br>
            <input type="date" class="form-control" name="tgl_daftar" value="" placeholder="YYYY/MM/DD"><br><br>
            
        <center>
            <button type="submit" class="gaada" name="create-daftar" value="create-daftar">Lamar</button>
        </center>
        </form>
      </div>
</body>
</html>