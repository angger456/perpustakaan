<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title></title>
  </head>
  <body>
      <div class="row" style="margin-top:50px;">
        <div class="col-md"></div> 
        <div class="col-md rounded bg-light" style="box-shadow: 4px 4px 5px 4px; padding:10px">
          <form action="" method="POST">
            <h3 align="center">LOGIN Perpus Online</h3>
            Username:
            <input type="text" name="username" placeholder="Masukkan Username" value="" class="form-control">
            Password:
            <input type="password" name="password" placeholder="Masukkan Password" class="form-control"><br>
            <center><button type="submit" name="submit" class="btn btn-success" value="LOGIN">LOGIN</button></center>
          </form>
        </div>
        <div class="col-md"></div>
        <?php
            if (isset($_POST['submit'])) {
              session_start();
              include 'koneksi.php';

              $user = $_POST['username'];
              $pass = $_POST['password'];

              $cek = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE username = '".$user."' AND password = '".MD5($pass)."'");
              if(mysqli_num_rows($cek) > 0){
                $d = mysqli_fetch_object($cek);
                $_SESSION['status_login'] = true;
                $_SESSION['a_global'] = $d;
                $_SESSION['id'] = $d->admin_id;
                echo '<script>window.location="header.php"</script>';
              }else{
                echo '<script>alert("username atau password anda salah!")</script>';
              }
            }
          ?>
      </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>