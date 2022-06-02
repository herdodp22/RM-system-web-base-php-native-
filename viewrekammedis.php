<?php 

include 'koneksi.php';

session_start();

$idrm = $_GET['idrm'];
$ambilrm = "SELECT * FROM rm_db WHERE id_rekammedis = '$idrm'";
$hubungkanambilrm = mysqli_query($koneksi, $ambilrm);
while($ambildatarm = mysqli_fetch_array($hubungkanambilrm)){
	$idrekammedis = $ambildatarm['id_rekammedis'];
	$idpasien = $ambildatarm['id_pasiendb'];
	$namapasien = $ambildatarm['namapasien'];
	$dokterpelaksana = $ambildatarm['dokterpelaksana'];
	$kesadaran = $ambildatarm['kesadaran'];
	$sistole = $ambildatarm['sistole'];
	$diastole = $ambildatarm['diastole'];
	$nafas = $ambildatarm['nafas'];
	$suhu = $ambildatarm['suhu'];
	$sistempernafasan = $ambildatarm['sistempernafasan'];
	$sistemkardiovaskular = $ambildatarm['sistemkardiovaskular'];
	$sistempencernaan = $ambildatarm['sistempencernaan'];
	$sistemmuskuloskeletal = $ambildatarm['sistemmuskuloskeletal'];
	$sistempersyarafan = $ambildatarm['sistempersyarafan'];
	$sistemintegumen = $ambildatarm['sistemintegumen'];
	$sistemperkemihan = $ambildatarm['sistemperkemihan'];
	$timerm = $ambildatarm['time_rm'];
}

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>view rekam medis</title>
 </head>
 <body>

 	<div style="display: flex;justify-content: center;">
 		

 		<div style="width: 50%;border: 1px solid black;border-radius: 10px;margin: 10px;padding: 10px;line-height: 30px;">
               <div style="font-weight: bolder; text-align: center;">HASIL PEMERIKSAAN</div>
               <hr>

               <table>
                 <tr>
                   <td><label>Diperiksa oleh </label></td>
                   <td><span style="margin: 10px;">: <?php echo $dokterpelaksana; ?></span></td>
                 </tr>

                 <tr>
                   <td><label>Kesadaran </label></td>
                   <td><span style="margin: 10px;">: <?php echo $kesadaran; ?></span></td>
                 </tr>

                 <tr>
                   <td><label>Sistole </label></td>
                   <td><span style="margin: 10px;">: <?php echo $sistole; ?></span></td>
                 </tr>

                 <tr>
                   <td><label>Diastole </label></td>
                   <td><span style="margin: 10px;">: <?php echo $diastole; ?></span></td>
                 </tr>

                 <tr>
                   <td><label>Nafas </label></td>
                   <td><span style="margin: 10px;">: <?php echo $nafas; ?></span></td>
                 </tr>

                 <tr>
                   <td><label>Suhu </label></td>
                   <td><span style="margin: 10px;">: <?php echo $suhu; ?></span></td>
                 </tr>

                 <!--
                 <tr>
                   <td><label>Berat badan </label></td>
                   <td><span style="margin: 10px;">: </span></td>
                 </tr>
             	-->

                 <tr>
                   <td><label>Sistem pernafasan </label></td>
                   <td><span style="margin: 10px;">: <?php echo $sistempernafasan; ?></span></td>
                 </tr>

                 <tr>
                   <td><label>Sistem persyarafan </label></td>
                   <td><span style="margin: 10px;">: <?php echo $sistempersyarafan; ?></span></td>
                 </tr>

                 <tr>
                   <td><label>Sistem kardiovaskular </label></td>
                   <td><span style="margin: 10px;">: <?php echo $sistemkardiovaskular; ?></span></td>
                 </tr>

                 <tr>
                   <td><label>Sistem integumen </label></td>
                   <td><span style="margin: 10px;">: <?php echo $sistemintegumen; ?></span></td>
                 </tr>

                 <tr>
                   <td><label>Sistem pencernaan </label></td>
                   <td><span style="margin: 10px;">: <?php echo $sistempencernaan; ?></span></td>
                 </tr>

                 <tr>
                   <td><label>Sistem pencernaan </label></td>
                   <td><span style="margin: 10px;">: <?php echo $sistempencernaan; ?></span></td>
                 </tr>

                 <tr>
                   <td><label>Sistem perkemihan dan genitalia </label></td>
                   <td><span style="margin: 10px;">: <?php echo $sistemperkemihan; ?></span></td>
                 </tr>

                 <tr>
                   <td><label>Sistem muskuloskeletal </label></td>
                   <td><span style="margin: 10px;">: <?php echo $sistemmuskuloskeletal; ?></span></td>
                 </tr>

                 <tr>
                   <td>
                     <div style="display: flex; flex-direction: row;">
                       <a href="edit.php" style="text-decoration: none;margin: 10px;color: red;">Edit</a>
                     </div>
                   </td>
                 </tr>
               </table>


            </div>

          </div>




 	</div>
 
 </body>
 </html>