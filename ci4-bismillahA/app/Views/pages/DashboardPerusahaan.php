<?= $this->include('/partials/headerPerusahaan'); ?>
<html>
  <head> 
    <meta charset="utf-8">
    <meta name="author" content="Mohammad Zidan Yohanza">
    <meta name="description" content="Project PemWeb">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/cssDashboardPerusahaan.css">
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
        crossorigin="anonymous">
    <title>
      Layar Depan
    </title>
</head>
    
<body>
    <div class="main">
        <div class="copy-container">
            <form>
                <center>
                    <input class="search" type="text" placeholder="Cari Berdasarkan Jabatan, Nama Perusahaan atau Kata Kunci" required>	
                    <input class="button" type="button" value="Telusuri"><br><br>		
                </center>
            </form>
        </div>
        <?php foreach($company as $row) :  ?>
        <div class="content">
            <div class="container m-t-20">
                <div class="row">
                    <div class="col-md-3">
                        <div class="dashboard-menu panel"\>
                            <div class="dashboard-menu-header panel-body" >
                                <div class="membership-avatar-wrap">
                                    <center>
                                        <br>
                                        <img alt="Zidan Yohanza" src="/img/<?= $row['gambar_perusahaan'];?>" srcset="/img/<?= $row['gambar_perusahaan'];?>" data-ll-status="loaded" width="140" height="180"style="border-radius: 10px">
                                    </center>
                                    <p class="text-center">
                                    <br>
                                    <span style="font-size:20px"><?= $row['nama_perusahaan'];?></span>
                                    <br>
                                    </p>
                                </div>
                            </div>
                            <div class="list-item">
                                <a class="profil" href="/editPerusahaan/<?= $row['id_perusahaan'];?>">Edit Profil</a>
                                <a class="dashboard" href="/indexPerusahaan" style="border-bottom-right-radius: 25px; border-bottom-left-radius: 25px;">Dashboard</a>
                            </div>
                        </div>
                    </div>
                        <div class="txtLow col-md-9">
                            <strong>
                                <h1>Lowongan Perusahaan Kamu :</h1>
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
                                        <a href="/deleteLowongan/<?php echo $row->id_lowongan ?>" class="btn" style="background-color:red">Hapus Lowongan</a>
                                    </div>
                                </div>
                            <?php endforeach; ?>  
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>  
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>