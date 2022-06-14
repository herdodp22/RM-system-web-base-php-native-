<?php 

include 'koneksi.php';

$ambilidwaitinglist = $_GET['idwaitinglist'];
$deleteid = "DELETE FROM waitinglist WHERE id_waitinglist = '$ambilidwaitinglist'";
$connectdeleteid = mysqli_query($koneksi, $deleteid);
header("location:tabledata.php");


 ?>