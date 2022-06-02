<?php 

include 'koneksi.php';

session_start();

if(isset($_POST['submit'])){
  $usernameuser = $_POST['usernamedokter'];
  $passworduser = md5($_POST['passworddokter']);

  //$usernamefilter = mysqli_real_escape_string($koneksi, $usernameuser);
  //$passwordfilter = mysqli_real_escape_string($koneksi, $passworduser);

  $cekdatauser = "SELECT * FROM accountpriority WHERE usernamedokter = '$usernameuser' and passworddokter = '$passworduser'";

  $hubungkancekdatauser = mysqli_query($koneksi, $cekdatauser);
  if(mysqli_num_rows($hubungkancekdatauser) > 0){
    while($row = mysqli_fetch_array($hubungkancekdatauser)){
      $namauserlogin = $row['usernamedokter'];
      $passworduserlogin = $row['passworddokter'];
    }

    if($usernameuser == $namauserlogin and $passworduser == $passworduserlogin){
      $rowdata = mysqli_fetch_assoc($hubungkancekdatauser);
      $_SESSION['username'] = $rowdata['usernamedokter'];
      header("location : index.php");
    }
  }




}


       

 ?> 



<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
</head>
<body>

  <form method="POST">
    <table>
  
      <tr>
        <td><label>username dokter</label></td>
        <td><input type="text" name="usernamedokter"></td>
      </tr>

      <tr>
        <td><label>password dokter</label></td>
        <td><input type="password" name="passworddokter"></td>
      </tr>

    
      <tr>
        <td><input type="submit" name="submit" value="Login"></td>
      </tr>
    </table>
  </form>

</body>
</html>