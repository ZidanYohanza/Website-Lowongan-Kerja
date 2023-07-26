<!DOCTYPE html>
<html lang="en">

<?= $this->include('/partials/headerPekerja'); ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/cssConfirm.css">
    <title>Konfirmasi Pelamaran</title>
</head>
<body>
      <div class="confirm">
        <form class="confirmLowong" enctype="multipart/form-data" action="/indexDaftarLowongan" method="get">
        <h2>Konfirmasi Pelamaran</h2>

        <h3 class="form-control" name="nama_lowongan" value="S">Selamat Kamu Berhasil Mendaftar Ditunggu Pemanggilan Kamu untuk wawancara</h3><br>

        <center>
            <button type="submit" class="gaada" name="create-daftar" value="create-daftar">Kembali </button>
        </center>
        </form>
      </div>
</body>
</html>