<?= $this->include('/partials/headerLogin'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/cssTampilanPilihanSignUp.css">
</head>
<body>

    <div class="main">
      <div class="pil-signUp">
          <center>
            <table>
              <tr>
                <td class="btn">
                <center>
                  <h4>Daftar sebagai Pencari Kerja</h4><br><br>
                  <img src="/img/cwo.png" alt="worker" style="width:170px; height:170px"><br><br>
                  <a href="/registerPekerja" style="color: #000000;">Pencari Kerja</a>
                  </center>
                </td>
                <td class="btn">
                <center>
                  <h4>Daftar sebagai Perusahaan</h4><br><br>
                  <img src="/img/company.png" alt="company" style="width:170px; height:170px"><br><br>
                  <a href="/registerPerusahaan" style="color: #000000;">Perusahaan</a>
                </center>
                </td>
              </tr>
            </table>
          </center>
      </div>
    </div>
    <?= $this->include('/partials/footer'); ?>
</body>
</html>