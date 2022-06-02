<?php 

include 'koneksi.php';

session_start();

if(isset($_POST['submit'])){
  $caripasien = $_POST['caripasien'];

  $pasienfilter = mysqli_real_escape_string($koneksi, $caripasien);

  if(!empty(trim($caripasien))){
    $caripasien = "SELECT * FROM informasipasien WHERE nama_pasien LIKE '%".$caripasien."%'";
    $hubungkancaripasien = mysqli_query($koneksi, $caripasien);

    if(mysqli_num_rows($hubungkancaripasien)>0){
      while($ambildatapasien = mysqli_fetch_array($hubungkancaripasien)){
        $namapasien = $ambildatapasien['nama_pasien'];
      }
        header("location:result.php?namapasien=$namapasien");

    }else{
      ?>
        <script type="text/javascript">
          alert("nama pasien tidak ditemukan");
        </script>
    <?php  
    }

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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Admin</title>
  </head>
  <body>


 
      
      <div style="display: flex; flex-direction: column;">
        <h1 style="text-align: center; margin-top: 10px;">CARI PASIEN</h1>

        <div style="text-align: left;margin-left: 20px;">
        <a href="logoutadmin.php" style="text-decoration:none; "><font color="red">Logout</font></a>
        </div>
       
     
            <form method="POST" action="">
              <div style="display: flex; flex-direction: row; width: 100%;justify-content: center;margin-top: 100px;">
                <input type="search" name="caripasien" placeholder="Cari pasien"style="outline: none;">
                <button type="submit" name="submit">Search</button>
              </div>
            </form>



      </div>

      <div style="display: flex; justify-content: center;flex-direction: row;">

     
        

      </div>













    








    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
  <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</html>