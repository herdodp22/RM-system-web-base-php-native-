<?php 
include 'koneksi.php';

session_start();

$idpasientake = $_GET['idpasienrm'];
$ambildatapasien = "SELECT * FROM informasipasien WHERE id_pasien = '$idpasientake'";
$hubungkanambildatapasien = mysqli_query($koneksi, $ambildatapasien);
while($datapasien = mysqli_fetch_array($hubungkanambildatapasien)){
	$idpasien = $datapasien['id_pasien'];
	$namapasien = $datapasien['nama_pasien'];
}

if(isset($_POST['submit'])){
	$dokterpelaksana = $_POST['dokterpelaksana'];
	$kesadaran = $_POST['kesadaran'];
	$sistole = $_POST['sistole'];
	$diastole = $_POST['diastole'];
	$nafas = $_POST['nafas'];
	$suhu = $_POST['suhu'];
	$sistempernafasan = $_POST['sistempernafasan'];
	$sistemkardiovaskular = $_POST['sistemkardiovaskular'];
	$sistempencernaan = $_POST['sistempencernaan'];
	$sistemmuskuloskeletal = $_POST['sistemmuskuloskeletal'];
	$sistempersyarafan = $_POST['sistempersyarafan'];
	$sistemintegumen = $_POST['sistemintegumen'];
	$sistemperkemihan = $_POST['sistemperkemihan'];


	$masukkandatarekammedis = "INSERT INTO rm_db set id_pasiendb = '$idpasientake', namapasien = '$namapasien', dokterpelaksana = '$dokterpelaksana', kesadaran = '$kesadaran', sistole = '$sistole', diastole = '$diastole', nafas = '$nafas', suhu = '$suhu', sistempernafasan = '$sistempernafasan', sistemkardiovaskular = '$sistemkardiovaskular', sistempencernaan = '$sistempencernaan', sistemmuskuloskeletal = '$sistemmuskuloskeletal', sistempersyarafan = '$sistempersyarafan', sistemintegumen = '$sistemintegumen', sistemperkemihan = '$sistemperkemihan'";

	$hubungkanmasukkandatarekammedis = mysqli_query($koneksi, $masukkandatarekammedis);

	if($hubungkanmasukkandatarekammedis){
		header("location : tabledata.php");
	}else{
	?>
		<script type="text/javascript">
			alert("gagal memasukkan data");
		</script>
	<?php  
	}





}

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Rekam medis</title>
 </head>
 <body>

 	<div style="display: flex;flex-direction: column;">
 	

 			
 			<!-- komponen 2 -->
          <div style="display: flex;margin: 10px; justify-content: center;">
            
          <div style="width: 50%;border: 1px solid black;border-radius: 10px;margin: 10px;padding: 10px;">
              <div style="font-weight: bolder; text-align: center;">INPUT PEMERIKSAAN PASIEN</div>
              <hr>

              <form method="POST">
                <table>

                  <tr>
                    <td><label>Dokter pelaksana</label></td>
                    <td>
                    	<select name="dokterpelaksana">
                    		<option value="dr.Herlin Ramadhanti">dr.Herlin ramadhanti</option>
                    	</select>
                    </td>
                  </tr>

                  <tr>
                    <td><label>Kesadaran</label></td>
                     <td>
                      <div class="form-group">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="kesadaran"></textarea>
                      </div>
                    </td>
                  </tr>

                  <tr>
                    <td>
                      <label>Tensi</label>
                      <table style="margin-left: 50px;">
                        <tr>
                          <td><label>Sistole</label></td>
                          <td><input type="text" name="sistole"></td>
                        </tr>
                        <tr>
                          <td><label>Diastole</label></td>
                          <td><input type="text" name="diastole"></td>
                        </tr>
                      </table>
                    </td>
                  </tr>

                  <tr>
                    <td><label>Nafas (kali/menit)</label></td>
                    <td>
                      <div class="form-group">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="nafas"></textarea>
                      </div>
                    </td>
                  </tr>

                  <tr>
                    <td><label>Suhu(celcius)</label></td>
                     <td>
                      <div class="form-group">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="suhu"></textarea>
                      </div>
                    </td>
                  </tr>

                  <tr>
                    <td><label>Sistem pernafasan</label></td>
                     <td>
                      <div class="form-group">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="sistempernafasan"></textarea>
                      </div>
                    </td>
                  </tr>

                  <tr>
                    <td><label>Sistem kardiovaskular</label></td>
                     <td>
                      <div class="form-group">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="sistemkardiovaskular"></textarea>
                      </div>
                    </td>
                  </tr>

                  <tr>
                    <td><label>Sistem pencernaan</label></td>
                     <td>
                      <div class="form-group">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="sistempencernaan"></textarea>
                      </div>
                    </td>
                  </tr>

                  <tr>
                    <td><label>Sistem muskuloskeletal</label></td>
                     <td>
                      <div class="form-group">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="sistemmuskuloskeletal"></textarea>
                      </div>
                    </td>
                  </tr>

                  <tr>
                    <td><label>Sistem persyarafan</label></td>
                     <td>
                      <div class="form-group">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="sistempersyarafan"></textarea>
                      </div>
                    </td>
                  </tr>

                  <tr>
                    <td><label>Sistem integumen</label></td>
                     <td>
                      <div class="form-group">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="sistemintegumen"></textarea>
                      </div>
                    </td>
                  </tr>

                  <tr>
                    <td><label>Sistem perkemihan dan genitalia</label></td>
                     <td>
                      <div class="form-group">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="sistemperkemihan"></textarea>
                      </div>
                    </td>
                  </tr>

                  <tr>
                    <td><input type="submit" name="submit" value="submit" style="background-color: green;color: white;border-radius: 5px;"></td>
                  </tr>
                </table>
              </form>
              
            </div>



 		</div>



 
 </body>
 </html>