<?php
    session_start();
    
    include "connect.php";

    if($_SESSION['uloga'] != 'admin'){
       header('Location: index.php');
    }


    if(isset($_SESSION['id'])){
        include "logged_in_nav.php";
    } else {
        include "nav.php"; 
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