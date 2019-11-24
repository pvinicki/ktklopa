<?php
    session_start();
    //check if regular user is trying to access admin site
 //   if($_SESSION['uloga'] != 'admin'){
  //      header('Location: index.php');
   // }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="mainpage.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Quicksand|Rubik&display=swap" rel="stylesheet">
</head>
<body>
    <?php 
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "ktklopa";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        //check if logged in and change nav accordingly
        if(isset($_SESSION['id'])){
            echo '<script>
                    $(document).ready(function() {
                        document.getElementById("reg-link").innerHTML = "ODJAVI SE";
                        document.getElementById("reg-link").href = "odjava.php";

                        var login_element = document.getElementById("login");
                        login_element.remove();
                    });
                  </script>';
        }

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $naziv      = $_POST['naziv'];
            $opis       = $_POST['opis'];
            $cijena     = $_POST['cijena'];
            $kategorija = $_POST['kategorija'];
            $restoranID = $_POST['restoranID'];

            $sql = "INSERT INTO jela (naziv, opis, cijena, kategorija, restoranID) VALUES ('$naziv', '$opis', '$cijena', '$kategorija', '$restoranID')";
            $conn->query($sql);
        }
    ?>

    <nav class="navbar sticky-top navbar-expand-md bg-light navbar-light">
        <a href="" class="navbar-brand">
            <img src="images/logo.png" alt="" >
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="KTK_restorani.php" class="nav-link">RESTORANI</a>
                </li>
                <li class ="nav-item">
                    <a href="" class="nav-link">KLOPA</a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item" id="login">
                    <a href="KTK_login.php" class="nav-link">LOGIN</a>
                </li>
                <li class="nav-item" id="register">
                    <a href="KTK_register.php" class="nav-link" id="reg-link">REGISTER</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="container" style="text-align:center">
                    <h1>UNESI JELO</h1>
                </div>
                <div class="container">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="naziv">Naziv jela:</label>
                            <input type="text" class="form-control" name="naziv" id="naziv" required>
                        </div>
                        <div class="form-group">
                            <label for="opis">Opis:</label>
                            <textarea class="md-textarea form-control" name="opis" id="opis" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="cijena">Cijena:</label>
                            <input type="number" class="form-control" step=".01" name="cijena" id="cijena" required>
                        </div>
                        <div class="form-group">
                            <label for="kategorija">Kategorija:</label>
                            <input type="text" class="form-control" name="kategorija" id="kategorija" required>
                        </div>
                        <div class="form-group">
                            <label for="restoranID">Restoran(ID):</label>
                            <input type="number" class="form-control" name="restoranID" id="restoranID">
                        </div>
                        <button type="submit" class="btn btn-lg btn-light">Submit</button> 
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>