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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="login_style.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand|Rubik&display=swap|Noto+Sans+TC&display=swap"
        rel="stylesheet">
</head>

<body class="body">
    <?php
        $servername = "localhost";
        $username   = "root";
        $password   = "";
        $dbname     = "ktklopa";
    
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
    
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $user     = $_POST['username'];
            $password = $_POST['password'];

            $sql    = "SELECT * FROM korisnici WHERE username = '$user'";
            $result = $conn->query($sql);

            //check if user exists
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){

                    //check if admin
                    if(($row['uloga'] == 'admin') && ($password == $row['lozinka'])){
                        $_SESSION['id'] = $row['id'];
                        $_SESSION['uloga'] = 'admin';
                        header('Location: adminpage.php');
                    }
                    
                    //check password
                    if(password_verify($password, $row['lozinka'])){
                        $_SESSION['id'] = $row['id'];
                        $_SESSION['uloga'] = 'korisnik';
                        header('Location: index.php');
                    } else if($password == $row['lozinka']){
                        $_SESSION['id'] = $row['id'];
                        $_SESSION['uloga'] = 'korisnik';
                        header('Location: index.php');
                    } else {
                        echo '<script>alert("Invalid username or password!")</script>';
                    }
                }
            } else {
                echo '<script>alert("Invalid username or password!")</script>';
            }
        }
    ?>

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
            <form action="" method="post">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" name="username" id="username">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>
                <div class="form-group form-check">
                    <label for="remember-me" class="form-check-label">
                        <input class="form-check-input" class="remember" type="checkbox" name="remember-me" id="remember-me">Remember me
                    </label>
                </div>
                <button type="submit" class="btn btn-lg btn-light">Submit</button> 
            </form>
        </div>
    </div>
</body>

</html>