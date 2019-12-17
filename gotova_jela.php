<?php 
    session_start();
?>
<?php 
    if(isset($_SESSION['id'])){
        include "logged_in_nav.php";
    } else {
        include "nav.php"; 
    }

    global $result;
    global $size;
    
    include "connect.php";

    $sql = "SELECT jela.naziv, jela.cijena, restorani.ime FROM jela LEFT JOIN restorani ON jela.restoranID=restorani.id WHERE kategorija = 'Gotova Jela' ";
    $result = $conn->query($sql) or die($conn->error);
    $size = $result->num_rows;

    if(isset($_POST['button'])){
        $jelo = $_POST['button'];
        $korisnik = $_SESSION['id'];
        echo $jelo;
        echo $korisnik;
        $sql = "INSERT INTO favs VALUES ('1', '$korisnik')";
        $conn->query($sql);
    }

    if(isset($_GET['filter'])){
        echo '<script>
                $(document).ready(function(){
                    document.getElementById("tbody").innerHTML = " ";
                });
                </script>';
        
        $filter = $_GET['filter'];

        if($filter == 1){
            $sql = "SELECT jela.naziv, jela.cijena, restorani.ime FROM jela LEFT JOIN restorani ON jela.restoranID=restorani.id WHERE kategorija = 'Gotova Jela' ORDER BY cijena ASC";
            $result = $conn->query($sql);
            $size = $result->num_rows;
            
        } else if($filter == 2){
            $sql = "SELECT jela.naziv, jela.cijena, restorani.ime FROM jela LEFT JOIN restorani ON jela.restoranID=restorani.id WHERE kategorija = 'Gotova Jela' ORDER BY cijena DESC ";
            $result = $conn->query($sql);
            $size = $result->num_rows;
        }
    }

    $conn->close();
?>

<script>    
    $(document).ready(function(){
        document.getElementById("fav-1").style.color = "yellow";
    });
</script>

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
                            <form action="" method="get">
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
                    <table class="table table-bordered tb" id="tableID">
                        <thead class="thead-light">
                            <tr>
                                <th>Naziv</th>
                                <th>Cijena</th>
                                <th>Restoran</th>
                            </tr>
                        </thead>

                        <tbody id="tbody">
                            <?php 
                            $counter = 1;
                            while($row = $result->fetch_assoc()){ ?>
                                <tr>
                                    <td><?php echo $row['naziv'];?></td>
                                    <td><?php echo $row['cijena']." kn";?></td>
                                    <td><?php echo $row['ime'];?></td>
                                    <td>
                                        <div style="text-align: center;" class="wrapper">
                                            <form style="margin:0;" action="" method="post">
                                                <?php echo '<button style="background:none; border:none;" name="button" id="favbutton" value="'.$row['naziv'].'" type="submit">'?>
                                                    <?php echo '<i class="fas fa-star" id="fav-'.$counter.'" name="'.$row['naziv'].'"></i>';?>
                                                <?php echo '</button>'?>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            <?php }; ?>
                        </tbody>
                    </table>
                </div>
                <div class="col-xl-1">
                </div>
            </div>
        </div>
</body>
</html>
