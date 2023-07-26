<?= $this->include('/partials/headerLogin'); ?>
<html>
  <head> 
    <meta charset="utf-8">
    <meta name="author" content="Mohammad Zidan Yohanza">
    <meta name="description" content="Project PemWeb">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
        crossorigin="anonymous">
    <title>
    <title>
      Layar Depan
    </title>
    <link rel="stylesheet" href="/css/cssTampilanUtama.css">
</head>
    
<body>
    <div class="main">
        <div class="copy-container">
            <h1>Cari Lowongan Pekerjaan</h1><br>
            <p>Sesuai bidang yang diminati dan dikuasai</p>
        </div>
        <div class="content">
            <form>
                <center>
                    <input class="search" type="text" placeholder="Cari Berdasarkan Jabatan, Nama Perusahaan atau Kata Kunci" required>	
                    <input class="button" type="button" value="Telusuri"><br><br><br><br><br><br><br><br><br><br>		
                </center>
            </form>
        </div>
        <div class="row justify-content-center">
            <div class="txtLow col-md-8">
                <strong>
                    <center>
                        <h1 style="font-weight: bold; font-size: 50px; margin: 50px 0px 70px 0px">Lowongan Kerja</h1>
                    </center>
                </strong>
                <?php foreach($lowongan as $row) :  ?>
                <div class="food-menu-box p-3 mb-3" style= "box-shadow: 2px 2px 2px 2px; background-color:#8FD0B9">
                    <div class="food-menu-desc">
                        <img src="/img/<?php echo $row->gambar_perusahaan ?>" alt="Photo" class="img-responsive img-curve">
                        <h4 class="name-perusahaan"><?php echo $row->nama_perusahaan ?></h4>
                        <p class="alamat-perusahaan mb-4"><?php echo $row->alamat_perusahaan ?></p>
                        <p class="name-lowongan"><span style="font-weight:bold">Pekerjaan yang ditawarkan : </span><?php echo $row->nama_lowongan ?></p>
                        <p class="deskripsilowongan "><span style="font-weight:bold">Deskripsi Lowongan :</span> <?php echo $row->deskripsi_lowongan ?></p>
                        <p class="syarat-lowongan "><span style="font-weight:bold">Syarat Lowongan :</span> <?php echo $row->syarat_lowongan ?></p>
                        <p class="gaji "><span style="font-weight:bold">Gaji yang ditawarkan :</span> <?php echo $row->gaji ?></p>
                    </div>
                </div>
                <?php endforeach; ?>  
            </div>
        </div>
    </div>

    <?php include('partials/footer.php'); ?>
</body>
</html>