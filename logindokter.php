<?php 

include 'koneksi.php';

session_start();

if(isset($_POST['submit'])){
  $usernamedokter = $_POST['usernamedokter'];
  $passworddokter = md5($_POST['passworddokter']);

  $usernamedokterfilter = mysqli_real_escape_string($koneksi, $usernamedokter);
  $passworddokterfilter = mysqli_real_escape_string($koneksi, $passworddokter);

  if(!empty(trim($usernamedokter)) and !empty(trim($passworddokter))){
    $cekdatadokter = "SELECT * FROM dokter WHERE usernamedokter = '$usernamedokterfilter' and passworddokter = '$passworddokterfilter'";

    $hubungkandatadokter = mysqli_query($koneksi, $cekdatadokter);

    while($ambildatadokter = mysqli_fetch_array($hubungkandatadokter)){
      $username = $ambildatadokter['usernamedokter'];
      $password = $ambildatadokter['passworddokter'];
    }

    if($usernamedokter == $username && $passworddokter == $password){
      $_SESSION['namauserdokter'] = $username;
      session_start();
      header("location:tabledata.php");
    }else{
      echo "gagal login";
    }
  }else{
    echo "tidak boleh kosong";
  }
}


 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Login dokter</title>
  </head>
  <body>
 

            <div style="display: flex; justify-content: center;">
              
              <div>
                <form method="POST">
                  <table>
                    <tr>
                      <td><label>Username dokter</label></td>
                      <td><input type="text" name="usernamedokter"></td>
                    </tr>
                    <tr>
                      <td><label>Password dokter</label></td>
                      <td><input type="password" name="passworddokter"></td>
                    </tr>
                    <tr>
                      <td><input type="submit" name="submit" value="Login sebagai dokter"></td>
                    </tr>
                    <tr><label><a href="registerdokter.php">register</a></label></tr>
                  </table>
                </form>
              </div>

            </div>









    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>