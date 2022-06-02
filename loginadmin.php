<?php 

include 'koneksi.php';

session_start();

if(isset($_POST['submit'])){
  $usernameadmin = $_POST['usernameadmin'];
  $passwordadmin = md5($_POST['passwordadmin']);

  $usernameadminfilter = mysqli_real_escape_string($koneksi, $usernameadmin);
  $passwordadminfilter = mysqli_real_escape_string($koneksi, $passwordadmin);

  if(!empty(trim($usernameadmin)) and !empty(trim($passwordadmin))){
    $cekdataadmin = "SELECT * FROM admin WHERE usernameadmin = '$usernameadminfilter' and passwordadmin = '$passwordadminfilter'";

    $hubungkandataadmin = mysqli_query($koneksi, $cekdataadmin);

    while($ambildataadmin = mysqli_fetch_array($hubungkandataadmin)){
      $username = $ambildataadmin['usernameadmin'];
      $password = $ambildataadmin['passwordadmin'];
    }

    if($usernameadmin == $username and $passwordadmin == $password){
      $_SESSION['namauseradmin'] = $username;
      session_start();
      header("location:admin.php");
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

    <title>Login admin</title>
  </head>
  <body>
 

            <div style="display: flex; justify-content: center;flex-direction: column;">

              
                          
              <div>
                <form method="POST">
                  <table>
                    <tr>
                      <td><label>Username admin</label></td>
                      <td><input type="text" name="usernameadmin"></td>
                    </tr>
                    <tr>
                      <td><label>Password admin</label></td>
                      <td><input type="password" name="passwordadmin"></td>
                    </tr>
                    <tr>
                      <td><input type="submit" name="submit" value="Login sebagai admin"></td>
                    </tr>
                  </table>
                </form>
              </div>

            </div>









    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
  <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</html>