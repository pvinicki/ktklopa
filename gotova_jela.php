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
            echo '<script>
                    $(document).ready(function() {
                        document.getElementById("reg-link").innerHTML = "ODJAVI SE";
                        document.getElementById("reg-link").href = "odjava.php";

                        var login_element = document.getElementById("login");
                        login_element.remove();
                    });
                  </script>';
        }

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
        $sql = "SELECT jela.naziv, jela.cijena, restorani.ime FROM jela LEFT JOIN restorani ON jela.restoranID=restorani.id WHERE kategorija = 'Gotova Jela' ";
        $result = $conn->query($sql) or die($conn->error);
        generateTable($result);

        if($_SERVER['REQUEST_METHOD'] == "POST"){
            echo '<script>
                    $(document).ready(function(){
                        document.getElementById("tbody").innerHTML = " ";
                    });
                  </script>';
            
            $filter = $_POST['filter'];

            if($filter == 1){
                $sql = "SELECT jela.naziv, jela.cijena, restorani.ime FROM jela LEFT JOIN restorani ON jela.restoranID=restorani.id WHERE kategorija = 'Gotova Jela' ORDER BY cijena ASC";
                $result = $conn->query($sql);
                generateTable($result);
                
            } else if($filter == 2){
                $sql = "SELECT jela.naziv, jela.cijena, restorani.ime FROM jela LEFT JOIN restorani ON jela.restoranID=restorani.id WHERE kategorija = 'Gotova Jela' ORDER BY cijena DESC ";
                $result = $conn->query($sql);
                generateTable($result);
            }
        }

        function generateTable($result){
            while($row = $result->fetch_assoc()){
              //  echo '<script>
               //         $(document).ready(function(){
               //             var table_row = document.createElement("tr");
              //              var table_data = document.createElement("td");
              //              var table_data2 = document.createElement("td");
               //             var table_data3 = document.createElement("td");
                //            table_data.innerText = "'.$row['naziv'].'";
                  //          table_data2.innnerText = "'.$row['cijena'].'";
                  //          table_data3.innerText = "'.$row['ime'].'";

                 //           table_row.appendChild(table_data);
                 //           table_row.appendChild(table_data2);
                 //           table_row.appendChild(table_data3);

                 //           document.getElementById("tbody").appendChild(table_row);
                 //       });
                 //     </script>';
                 
                echo '<script>
                        $(document).ready(function(){
                            document.getElementById("tbody").innerHTML += "<tr><td>'.$row['naziv'].' </td><td>'.$row['cijena'].' kn</td></tr>";
                        });
                      </script>';
            }

        }

        $conn->close();
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
                            <form action="" method="post">
                                <div class="form-group">
                                    <select class="form-control" name="filter" id="filter">
                                        <option value="">...</option>
                                        <option value="1">Cijeni: manja prema većoj</option>
                                        <option value="2">Cijeni: veća prema manjoj</option>
                                        <option value="3">Ocjeni</option>
                                    </select>
                                    <br>
                                    <input type="submit" class="btn btn-lg btn-light" value="Filtriraj">
                                </div>
                            </form>
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
                <div class="col-xl-1"></div>
            </div>
        </div>
</body>
</html>