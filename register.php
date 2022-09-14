<?php

include 'koneksi.php';

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    // $password = $_POST['password'];
    $password = md5($_POST['password']);

    // enkripsi password
    // $encpassword = password_hash($password, PASSWORD_DEFAULT);

    // insert regis
    $insert = mysqli_query($koneksi, "INSERT INTO admin (username,password) values ('$username','$password')");

    if ($insert) {
        header('location:login.php');
    }else{
        header('location:register.php');
    }
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Login</title>

    <style>
        a{
            text-decoration: none;
        }
    </style>
  </head>
  <body>

    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
            <form method="POST">
                <h4 class="text-center">FORM Register</h4>
                <?php
                    // if($err) {
                    //     echo "<ul>$err</ul>";
                    // }
                ?>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Username</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username" placeholder="Masukkan Username anda">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Masukkan Password Anda">
                </div>
                <input class="btn btn-primary" type="submit" name="register" value="Register">
                <h5>Have an Account?</h5>
                <a href="login.php">Login here</a>
                <!-- <button type="submit" class="btn btn-primary" name="login" value="Masuk Ke Sistem">Login</button> -->
            </form>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>