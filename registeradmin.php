<?php 

include 'koneksi.php';

if(isset($_POST['submit'])){
	$usernameadmin = $_POST['usernameadmin'];
	$passwordadmin = md5($_POST['passwordadmin']);

	$masukkandataadmin = "INSERT INTO admin set usernameadmin = '$usernameadmin', passwordadmin = '$passwordadmin'";
	$hubungkanmasukkandataadmin = mysqli_query($koneksi, $masukkandataadmin);

	if($hubungkanmasukkandataadmin){
		header("location:loginadmin.php");
	}
}



 ?>
<!DOCTYPE html>
<html>
<head>
	<title>register admin</title>
</head>
<body>


	<div style="display: flex; justify-content: center;">
		
		<form method="POST">
			<table>
				<tr>
					<td><label>username admin</label></td>
					<td><input type="text" name="usernameadmin"></td>
				</tr>

				<tr>
					<td><label>password admin</label></td>
					<td><input type="password" name="passwordadmin"></td>
				</tr>

				<tr>
					<td><input type="submit" name="submit" value="register admin"></td>
				</tr>
			</table>
		</form>

	</div>




</body>
</html>