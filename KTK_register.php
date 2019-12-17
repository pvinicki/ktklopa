<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="login_style.css">
    <script src="scripts/form_validation.js"></script>
</head>

<body class="body">

    <?php
        $servername = "localhost";
        $username   = "root";
        $password   = "";
        $dbname     = "ktklopa";
    
        include "connect.php";

        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $user     = $_POST['username'];
            $password = $_POST['password'];
            $email    = $_POST['email'];

            $hash = password_hash($password, PASSWORD_DEFAULT);

            $sql = "SELECT * FROM korisnici WHERE username = '$user' ";
            $result = $conn->query($sql);

            if($result->num_rows == 0){
                $sql = "INSERT INTO korisnici (username, lozinka, email, uloga) VALUES ('$user', '$hash', '$email', 'korisnik')";
                $conn->query($sql);
                $conn->close();
                header('Location: KTK_login.php');
            } else {
                echo '<script> alert("korisničko ime je zauzeto!") </script>';
            }
        }
     ?>
    
    <script>
        $(document).ready(function() {
            $("#submit").on("click", checkValidity);

            function checkValidity(){
                var username = document.getElementById("username").value;
                var pw = document.getElementById("password").value;
                var pw2 = document.getElementById("repeat-password").value;
                var email = document.getElementById("email").value;
                var hasNumber = /\d/;
                var hasAtSign = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;

                if(username.length < 3 || username.length > 20){
                    alert("invalid username!");
                } else if(pw != pw2){
                    alert("passwords do not match!");
                } else if(pw.length < 6) {
                    alert("password is too short!");
                } else if(!hasNumber.test(pw)){
                    alert("password must contain atleast one number!");
                } else if(!hasAtSign.test(email)){
                    alert("Invalid email!");
                }
            }
        })
    </script>

    <nav class="navbar sticky-top navbar-expand-md bg-light navbar-light">
        <a href="index.php" class="navbar-brand">
            <img src="images/logo.png" alt="">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav text-center">
                <li class="nav-item">
                    <a href="KTK_restorani.php" class="nav-link">RESTORANI</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">KLOPA</a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto text-center">
                <li class="nav-item">
                    <a href="KTK_login.php" class="nav-link">LOGIN</span></a>
                </li>
                <li class="nav-item">
                    <a href="KTK_register.php" class="nav-link">REGISTER</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="container">
            <form class="" action="" method="post">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" name="username" id="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" name="password" id="password" required>
                </div>
                <div class="form-group">
                    <label for="repeat-password">Repeat password:</label>
                    <input type="password" class="form-control" name="repeat-password" id="repeat-password" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" name="email" id="email" required>
                </div>
                <button type="submit" class="btn btn-lg btn-light" id="submit">Submit</button>
            </form>
        </div>
    </div>
</body>

</html>