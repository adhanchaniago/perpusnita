<!DOCTYPE html>
<html lang="en">

<head>
  <title>Cetak Kartu - <?= $anggota->nm_anggota; ?></title>
  <link href="<?= base_url('assets/home/') ?>vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
  <style type="text/css">
    body {
      color: aliceblue;
      font-size: 20px;
    }

    @page {
      /* size: landscape; */
      padding: 0px;
      margin: 0px
    }

    .pembungkus {
      position: relative;
    }

    .dalam {
      position: absolute;
      left: 50px;
      top: 120px;
    }

    #qrCode {
      position: absolute;
      top: 10px;
      left: 10px;
    }

    /* h2 {
            position: absolute;
            left: 410px;
            top: 320px;
        }

        p {
            position: absolute;
            left: 220px;
            top: 380px;
            width: 600px
        } */
  </style>
</head>

<body>
  <div class="container-fluid">
    <div class="pembungkus">
      <img id="sertifikat" src="<?= base_url('assets/uploads/kartu.png') ?>" alt="" width="50%">
      <div class="dalam">
        <table>

          <tr>
            <td>No. Anggota/ NIS</td>
            <td>: <?= $anggota->kd_anggota; ?></td>
          </tr>

          <tr>
            <td>Nama</td>
            <td>: <?= $anggota->nm_anggota; ?></td>
          </tr>

          <tr>
            <td>Tempat Tanggal Lahir</td>
            <td>: <?= $anggota->tempat_lahir . ', ' . $anggota->tanggal_lahir; ?></td>
          </tr>

          <tr>
            <td>Jenis Kelamin</td>
            <td>: <?= $anggota->kelamin; ?></td>
          </tr>

          <tr>
            <td>Agama</td>
            <td>: <?= $anggota->agama; ?></td>
          </tr>

          <tr>
            <td>No. Hp.</td>
            <td>: <?= $anggota->no_telepon; ?></td>
          </tr>

        </table>
      </div>
    </div>
  </div>

  <script>
    window.print()
  </script>
</body>

</html>