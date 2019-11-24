<?php 
    session_start();
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
<body class="body">
    <?php 
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

    <div class="headline">
      
    </div> 

    <div class="row text-center">
        <div class="container-fluid text-center maintext">
            <h1>O ČEMU SE RADI?</h1>
        </div>
        <div class="col-lg-4">
            <div class="content">
                <h1>SVI RESTORANI NA JEDNOM MJESTU</h1>
                <p>Provjerite ponude dostupnih restorana u Kutini. Brzo i jednostavno.</p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="content">
                <h1>PRONAĐI KLOPU</h1>
                <p>Sva hrana na jednom mjestu, pregledajte široku ponudu i pronađite svoj idealni obrok</p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="content">
                <h1>REGISTRIRAJ SE</h1>
                <p>Napravi korisnički račun, ostavi komentar i recenziju na jelo.</p>
            </div>
        </div>
    </div>

</body>
</html>