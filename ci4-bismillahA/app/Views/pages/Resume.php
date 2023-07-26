<!DOCTYPE html>
<html lang="en">

<?= $this->include('/partials/headerPekerja'); ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/cssProfilResume.css">
    <title>Pembuatan Resume</title>
</head>
<body>
      <div class="resume">
        <form class="cv" enctype="multipart/form-data" action="/editResume/<?= $pekerja['id_pencariKerja']?>" method="POST">
            <h2>Pembuatan Resume</h2>
            <center>
              <img alt="Zidan Yohanza" src="/img/<?= $pekerja['gambar_pekerja'];?>" srcset="/img/<?= $pekerja['gambar_pekerja'];?>" data-ll-status="loaded" width="140" height="180"style="border-radius: 10px">
            </center>

            <label for="Ringkasan Diri">Ringkasan Diri :</label><br>
            <textarea class="form-control" rows=10 cols=100 name="ringkasan_diri" value="" placeholder="Input Ringkasan Diri"></textarea><br><br>

            <label for="keahlian">Keahlian :</label><br>
            <input type="text" class="form-control" name="keahlian" value="" placeholder="Input Keahlian"><br>

            <label for="pengalaman_kerja">Pengalaman Kerja :</label><br>
            <textarea class="form-control" rows=10 cols=100  name="pengalaman_kerja" value="" placeholder="Input Pengalaman Kerja"></textarea><br><br>

            <label for="riwayat_pendidikan">Riwayat Pendidikan :</label><br>
            <input type="text" class="form-control" name="riwayat_pendidikan" value="" placeholder="Input Riwayat Pendidikan"><br>

            <center>
              <button type="submit" name="create-resume" value="create-resume">Buat Resume</button>
            </center>
        </form>
      </div>
</body>
</html>