<?php 
include 'koneksi.php';

$ambilid = $_GET['idpasien'];
$cekpasien = "SELECT * FROM informasipasien WHERE id_pasien = '$ambilid'";
$connectpasien = mysqli_query($koneksi, $cekpasien);
while($takedata = mysqli_fetch_array($connectpasien)){
	$namapasien = $takedata['nama_pasien'];
	$alamatpasien = $takedata['alamat_pasien'];
	$jeniskelamin = $takedata['jeniskelamin_pasien'];
}

$masukkanwaitinglist = "INSERT INTO waitinglist set id_pasien = '$ambilid', nama_pasien = '$namapasien', alamat_pasien = '$alamatpasien', jenis_kelamin = '$jeniskelamin'";
$connectmasukkanwaitinglist = mysqli_query($koneksi, $masukkanwaitinglist);
if($connectmasukkanwaitinglist){
	header("location:iklan.php");	
}else{
	echo "gagal pengajuan pasien";
}




 ?>