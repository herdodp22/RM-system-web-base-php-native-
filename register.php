<?php 

include 'koneksi.php';


if(isset($_POST['submit'])){
	$namadokter = $_POST['namadokter'];
	$usernamedokter = $_POST['usernamedokter'];
	$passworddokter = md5($_POST['passworddokter']);
	$domisilidokter = $_POST['domisilidokter'];
	$nohpdokter = $_POST['nohpdokter'];

	$simpandatadokter = "INSERT INTO accountpriority set namadokter = '$namadokter', usernamedokter = '$usernamedokter', passworddokter = '$passworddokter', domisilidokter = '$domisilidokter', nohpdokter = '$nohpdokter'";

	$hubungkansimpandatadokter  = mysqli_query($koneksi, $simpandatadokter);
	
		header("location:login.php");


}

 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Register</title>
</head>
<body>

  <form method="POST">
    <table>
      <tr>
        <td><label>nama dokter</label></td>
        <td><input type="text" name="namadokter"></td>
      </tr>

      <tr>
        <td><label>username dokter</label></td>
        <td><input type="text" name="usernamedokter"></td>
      </tr>

      <tr>
        <td><label>password dokter</label></td>
        <td><input type="password" name="passworddokter"></td>
      </tr>

      <tr>
        <td><label>domisili dokter</label></td>
        <td><input type="text" name="domisilidokter"></td>
      </tr>

      <tr>
        <td><label>nomor telepon</label></td>
        <td><input type="text" name="nohpdokter"></td>
      </tr>

      <tr>
        <td><input type="submit" name="submit" value="Register"></td>
      </tr>
    </table>
  </form>

</body>
</html>