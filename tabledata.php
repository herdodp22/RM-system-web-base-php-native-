<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Data</title>
  </head>
  <body>



  	<div style="display: flex; flex-direction: column;"> 

  		<div style="text-align: left; margin-left: 10px;">
  				<a href="logout.php" style="text-decoration: none; color: black
  				"><span style="font-weight: bolder; font-size: 20px;color: red;">Keluar</span></a>
  			</div>
  			<h1 style="text-align: center; margin-top: 10px; font-weight: bolder;">DAFTAR PASIEN</h1>
  			
  				<div style="display: flex;flex-direction: column;">
  			<table border="1" style="margin: 10px; padding: 10px; text-align: center;">
  				<tr>
  					<td><span style="font-weight: bolder;">ID pasien</span></td>
  					<td><span style="font-weight: bolder;">Nama pasien</span></td>
  					<td><span style="font-weight: bolder;">Alamat pasien</span></td>
  					<td><span style="font-weight: bolder;">Jenis kelamin</span></td>
  					<td><span style="font-weight: bolder;">ACTION</span></td>
  				</tr>

  				<?php 

  				include 'koneksi.php';
  				session_start();

  				$cekdata = "SELECT * FROM informasipasien";
  				$hubungkancekdata = mysqli_query($koneksi, $cekdata);
  				while($ambildata = mysqli_fetch_array($hubungkancekdata)){
  					$idpasien = $ambildata['id_pasien'];
  					$namapasien = $ambildata['nama_pasien'];
  					$alamatpasien = $ambildata['alamat_pasien'];
  					$jeniskelaminpasien = $ambildata['jeniskelamin_pasien'];
  					?>

  					<tr>
  						<td><?php echo $idpasien; ?></td>
  						<td><?php echo $namapasien; ?></td>
  						<td><?php echo $alamatpasien; ?></td>
  						<td><?php echo $jeniskelaminpasien; ?></td>
  						<td><a href="dokter.php?idpasien=<?php echo $idpasien; ?>">View</a></td>
  					</tr>

  				<?php  
  				}
  				 ?>

  			</table>
  		</div>




  	</div>








  
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>