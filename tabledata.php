<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="refresh" content="1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Data</title>
  </head>
  <body>




  	<div style="display: flex; flex-direction: column;"> 

  		<div style="text-align: left; margin-left: 10px;display: flex;flex-direction: row;margin: 10px;">
  				<a href="logout.php" style="text-decoration: none; color: black
  				"><span style="font-weight: bolder; font-size: 20px;color: red;">Keluar</span></a>
  			</div>
  			<h1 style="text-align: center; margin-top: 10px; font-weight: bolder;">DAFTAR PASIEN TUNGGU</h1>
  			
  				<div style="display: flex;flex-direction: column;">
  			<table border="1" style="margin: 10px; padding: 10px; text-align: center;">
  				<tr>
            <td><span style="font-weight: bolder;">ID waiting list</span></td>
  					<td><span style="font-weight: bolder;">ID pasien</span></td>
  					<td><span style="font-weight: bolder;">Nama pasien</span></td>
  					<td><span style="font-weight: bolder;">Alamat pasien</span></td>
  					<td><span style="font-weight: bolder;">Jenis kelamin</span></td>
  					<td><span style="font-weight: bolder;">ACTION</span></td>
  				</tr>

  				<?php 

  				include 'koneksi.php';
  				session_start();

  				$cekdata = "SELECT * FROM waitinglist";
  				$hubungkancekdata = mysqli_query($koneksi, $cekdata);
  				while($ambildata = mysqli_fetch_array($hubungkancekdata)){
            $idwaitinglist = $ambildata['id_waitinglist'];
  					$idpasien = $ambildata['id_pasien'];
  					$namapasien = $ambildata['nama_pasien'];
  					$alamatpasien = $ambildata['alamat_pasien'];
  					$jeniskelaminpasien = $ambildata['jenis_kelamin'];
            
  					?>

  					<tr>
              <td><?php echo $idwaitinglist; ?></td>
  						<td><?php echo $idpasien; ?></td>
  						<td><?php echo $namapasien; ?></td>
  						<td><?php echo $alamatpasien; ?></td>
  						<td><?php echo $jeniskelaminpasien; ?></td>
  						<td>
                <div style="margin: 10px;">
                <a href="dokter.php?idpasien=<?php echo $idpasien; ?>" style="margin: 10px;">View</a>
                <a href="delete.php?idwaitinglist=<?php echo $idwaitinglist; ?>" style="margin: 10px;">Delete</a>
                </div>
              </td>
  					</tr>

  				<?php  
  				}
  				 ?>

  			</table>
  		</div>




  	</div>








  
   
  </body>
</html>