<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hasil pencarian</title>
  </head>
  <body>



      <div style="display: flex; justify-content: center;flex-direction: column;">

        <h1 style="text-align: center;margin-top: 100px;">Hasil pencarian</h1>

        <table border="1" style="margin:10px; padding: 10px;text-align: center;">
          <tr>
            <td><span style="font-weight: bolder;">Nama</span></td>
            <td><span style="font-weight: bolder;">Alamat</span></td>
            <td><span style="font-weight: bolder;">Tempat/TTL</span></td>
            <td><span style="font-weight: bolder;">Kewarganegaraan</span></td>
            <td><span style="font-weight: bolder;">Agama</span></td>
            <td><span style="font-weight: bolder;">Pekerjaan</span></td>
            <td><span style="font-weight: bolder;">Waktu registrasi</span></td>
            <td><span style="font-weight: bolder;">ACTION</span></td>

          </tr>

          <?php 

              include 'koneksi.php';
              session_start();

              $namapasien = $_GET['namapasien'];
              $caripasien = "SELECT * FROM informasipasien WHERE nama_pasien = '$namapasien'";
              $hubungkancaripasien = mysqli_query($koneksi, $caripasien);
              while($ambildatapasien = mysqli_fetch_array($hubungkancaripasien)){
                      $namapasien = $ambildatapasien['nama_pasien'];
                      $alamatpasien = $ambildatapasien['alamat_pasien'];
                      $tempatlahir = $ambildatapasien['tempatlahir_pasien'];
                      $tanggallahir = $ambildatapasien['tanggallahir_pasien'];
                      $bulanlahir = $ambildatapasien['bulanlahir_pasien'];
                      $tahunlahir = $ambildatapasien['tahunlahir_pasien'];
                      $kewarganegaraan = $ambildatapasien['kewarganegaraan_pasien'];
                      $agamapasien = $ambildatapasien['agama_pasien'];
                      $pekerjaanpasien = $ambildatapasien['pekerjaan_pasien'];
                      $wakturegister = $ambildatapasien['time'];
                ?>
                      <tr>
                        <td><?php echo $namapasien; ?></td>
                        <td><?php echo $alamatpasien; ?></td>
                        <td><?php echo $tempatlahir; ?>,<?php echo $tanggallahir; ?>-<?php echo $bulanlahir; ?>-<?php echo $tahunlahir; ?></td>
                        <td><?php echo $kewarganegaraan; ?></td>
                        <td><?php echo $agamapasien; ?></td>
                        <td><?php echo $pekerjaanpasien; ?></td>
                        <td><?php echo $wakturegister; ?></td>
                        <td><a href="daftartunggu.php">Ajukan</a></td>
                      </tr>
              <?php 
              }
               ?>
          
        </table>



      </div>





    

 
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>