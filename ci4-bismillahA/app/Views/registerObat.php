<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="vieport" content="width-device-width, initial-scale=1.0">
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
        crossorigin="anonymous">
    <title>Halaman Data Apotik</title>
</head>
<?= $this->include('/navbar'); ?>
<section class="Sign Up-Obat">
    <div class="container">
        <div class="row mb-1">
            <div class="col mt-5">
                <h3 class="text-dark"><strong>Sign Up Obat</strong></h3>
                <hr>
            </div>
        </div>
        <?php if(session()->get('success')) : ?>
            <p style="color: green; font-size: small;"><?= session()->get('success') ?></p>
        <?php endif; ?>
        <form action="/register" method="post" enctype="multipart/form-data">
            <table style="width: 40%;">
                <div class="mb-3 row">
                    <label for="npm" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" autocomplete="off" name="email" value="<?= set_value('email') ?>" placeholder="input Email">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="id" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" autocomplete="off" name="password" placeholder="input Password">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="id" class="col-sm-2 col-form-label">Password Confirm</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" autocomplete="off" name="password_confirm" placeholder="input Password">
                    </div>
                </div>
                <?php if(isset($validation)) : ?>
                    <?= $validation->listErrors() ?>
                <?php endif; ?>
                <tr>
                    <td colspan="2">
                        <input class="btn btn-primary mt-2" type="submit" name="submit" value="Sign Up">
                    </td>
                </tr>
                <tr>
                    <td>
                        <p> Already have an acoount? <a href="/">Click here</a> to login</p>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</section>

<h2>Lamaran Kerja</h2>

            <h4 class="form-control" name="nama_lowongan" value="">Nama Lowongan : <?= $lowong['nama_lowongan'];?></h4><br>

            <h4 class="form-control"  name="syarat_lowongan" value="">Syarat Lowongan : <?= $lowong['syarat_lowongan'];?></h4><br><br>

            <h4 class="form-control" name="deskripsi_lowongan" value="">Deskrispi Lowongan : <?= $lowong['deskripsi_lowongan'];?></h4><br>

            <h4 class="form-control" name="haji" value="">Gaji : <?= $lowong['gaji'];?></h4><br>

            <?php foreach($pekerja as $work) :  ?>
                <center>
                    <img alt="Zidan Yohanza" src="/img/<?= $work['gambar_pekerja'];?>" srcset="/img/<?= $work['gambar_pekerja'];?>" data-ll-status="loaded" width="140" height="180"style="border-radius: 10px">
                </center>
                
                <h4 class="form-control" name="deskripsi_lowongan" value="">Nama Pelamar : <?= $work['nama_pekerja'];?></h4><br>

                <h4 class="form-control" name="jenis-kelamin" value="">Jenis Kelamin : <?= $work['jenis_kelamin'];?></h4><br><br>

            <?php endforeach; ?>

            <label for="waktu">Waktu Pendaftaran</label><br>
            <input type="date" class="gaada" name="tgl_daftar" value="" placeholder="YYYY/MM/DD"><br>
    
            <center>
              <button type="submit" class="gaada" name="create-daftar" value="create-daftar">Lamar</button>
            </center>