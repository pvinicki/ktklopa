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
    <link rel="stylesheet" href="klopa.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <link href="fontawesome/css/all.css" rel="stylesheet">
    <script defer src="fontawesome/js/all.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Quicksand|Rubik&display=swap" rel="stylesheet">
</head>
<body>
        <?php
            if(isset($_SESSION['id'])){
                include "logged_in_nav.php";
            } else {
                include "nav.php"; 
            }

        ?>
        <div class="container-fluid">
            <div class="row text-center">
                <div class="col-xl-1"></div>
                <div class="col-xl-2">
                    <div class="card" style="margin-top:60px;">
                        <div class="card-body">
                            <h2 class="card-title">Kategorije</h2>
                            <p><a href="gotova_jela.php" class="card-link">Gotova Jela</a></p>
                            <p><a href="jela_po_narudzbi.php" class="card-link">Jela po narudžbi</a></p>
                            <p><a href="" class="card-link">Jela s Roštilja</a></p>
                            <p><a href="" class="card-link">Mesne Plate</a></p>
                            <p><a href="" class="card-link">Salate</a></p>

                            <h4>Filtriraj po:</h4>
                            <select class="form-control" name="filter" id="filter" >
                                <option value="">...</option>
                                <option value="1">Cijeni: manja prema većoj</option>
                                <option value="2">Cijeni: veća prema manjoj</option>
                                <option value="3">Ocjeni</option>
                            </select>
                        </div>
                    </div>

                </div>

                <div class="col-xl-8" style="margin-top: 60px;">
                    <table class="table table-bordered" id="tableID">
                        <thead class="thead-light">
                            <tr>
                                <th>Naziv</th>
                                <th>Cijena</th>
                                <th>Restoran</th>
                            </tr>
                        </thead>

                        <tbody id="tbody">

                        </tbody>
                    </table>
                </div>
                <div class="col-xl-1">

                </div>
            </div>
        </div>
</body>
</html>