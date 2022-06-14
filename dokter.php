<?php 
include 'koneksi.php';

session_start();

 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Rekam medis elektronik</title>
  </head>
  <body>

      <div style="margin-left: 10px;">
        <a href="tabledata.php" style="text-decoration: none;"><span style="color: red; font-weight: bolder;">kembali ke table data</span></a>
      </div>

    <div style="display: flex;">

      
    
        <div style="display: flex; flex-direction: column; width: 100%;">

          <!-- komponen 1 -->
          <div style="border: 1px solid black; border-radius: 10px;margin: 20px;padding: 10px;">
          <div style="font-weight: bolder;margin-left: 10px;">informasi pasien</div>
          <hr>
          <div style="display: flex; flex-direction: row;justify-content: space-around;">
          <!-- header column 1 -->
          <div style="display: flex;flex-direction: column;">


            <?php 

            include 'koneksi.php';

            $idpasienview = isset($_GET['idpasien']);
            $caridatapasien = "SELECT * FROM informasipasien WHERE id_pasien = '$idpasienview'";
            $hubungkancaridatapasien = mysqli_query($koneksi, $caridatapasien);
            while($ambildatapasienview = mysqli_fetch_array($hubungkancaridatapasien)){
              $idpasienambil = $ambildatapasienview['id_pasien'];
              $namapasiendb = $ambildatapasienview['nama_pasien'];
              $jeniskelamindb = $ambildatapasienview['jeniskelamin_pasien'];
              $alamatdb = $ambildatapasienview['alamat_pasien'];
              $umurpasiendb = $ambildatapasienview['umur_pasien'];
              $tempatlahirdb = $ambildatapasienview['tempatlahir_pasien'];
              $tanggallahirdb = $ambildatapasienview['tanggallahir_pasien'];
              $bulanlahirdb = $ambildatapasienview['bulanlahir_pasien'];
              $tahunlahirdb = $ambildatapasienview['tahunlahir_pasien'];
              $kewarganegaraandb = $ambildatapasienview['kewarganegaraan_pasien'];
              $agamapasiendb = $ambildatapasienview['agama_pasien'];
              $pekerjaandb = $ambildatapasienview['pekerjaan_pasien'];
              $timedb = $ambildatapasienview['time'];
            }

             ?>

            <table>
              <tr>
                <td><span style="font-weight: bolder;">Nama pasien</span></td>
                <td>: <?php echo $namapasiendb; ?></td>
              </tr>
              <tr>
                <td><span style="font-weight: bolder;">ID pasien</span></td>
                <td>: <?php echo $idpasienview; ?></td>
              </tr>
              <tr>
                <td><span style="font-weight: bolder;">Nama/Jenis kelamin</span></td>
                <td>: <?php echo $jeniskelamindb; ?></td>
              </tr>
              <tr>
                <td><span style="font-weight: bolder;">Alamat</span></td>
                <td>: <?php echo $alamatdb; ?></td>
              </tr>
            </table>
          </div>
          <!-- header column 1 -->


          <!-- header column 2 -->
          <div style="display: flex;flex-direction: column;">
            <table>
              <tr>
                <td><span style="font-weight: bolder;">Tempat/tgl. Lahir/Umur</span></td>
                <td>: <?php echo $tempatlahirdb; ?> / <?php echo $tanggallahirdb; ?> <?php echo $bulanlahirdb; ?> <?php echo $tahunlahirdb; ?> / <?php echo $umurpasiendb; ?></td>
              </tr>
              <tr>
                <td><span style="font-weight: bolder;">Kewarganegaraan</span></td>
                <td>: <?php echo $kewarganegaraandb; ?></td>
              </tr>
              <tr>
                <td><span style="font-weight: bolder;">Agama</span></td>
                <td>: <?php echo $agamapasiendb; ?></td>
              </tr>
            </table>
          </div>
          <!-- header column 2 -->



          </div>
          </div>
          <div>
              <a href="rekammedis.php?idpasienrm=<?php echo $idpasienview; ?>" style="text-decoration: none;"><span style="margin:10px;padding: 10px;">Tambah riwayat medis</span></a>
            </div>
          <!-- komponen 1 -->



          <div style="display: flex; flex-direction: column;">

            <h1 style="text-align: center;margin-top: 50px;font-weight: bolder;">Daftar riwayat medis pasien</h1> 



               <table border="1" style="margin: 10px; padding: 10px;text-align: center;">
                      <tr>
                        <td><span style="font-weight: bolder;">ID pasien</span></td>
                        <td><span style="font-weight: bolder;">Nama pasien</span></td>
                        <td><span style="font-weight: bolder;">Dokter pelaksana</span></td>
                        <td><span style="font-weight: bolder;">ACTION</span></td>
                      </tr>

            <?php 

              include 'koneksi.php';

              $carirm = "SELECT * FROM rm_db WHERE id_rekammedis = '$idpasienview'";
              $hubungkancarirm = mysqli_query($koneksi, $carirm);

               if(mysqli_num_rows($hubungkancarirm) > 0){
              
                while($ambilrmpasien = mysqli_fetch_array($hubungkancarirm)){
                $idrekammedis = $ambilrmpasien['id_rekammedis'];
                $dokterpelaksanarmpasien = $ambilrmpasien['dokterpelaksana']; 
                  ?>
                   <tr>
                        <td><?php echo $idpasienambil; ?></td>
                        <td><?php echo $namapasiendb; ?></td>
                        <td><?php echo $dokterpelaksanarmpasien; ?></td>
                        <td><a href="viewrekammedis.php?idrm=<?php echo $idrekammedis; ?>" style="text-decoration: none;">Detail</a></td>
                      </tr>
              <?php
              }
              ?>


                   
                    </table>
            



                <?php 
              }else{
                ?>
                  <h4 style="text-align: center; margin-top: 50px;">Pasien belum memiliki riwayat medis</h4>


                <?php 
              }
             ?>


             
             

        
          </div>






          



            
         


        </div>




    </div>









    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>