<?php
    if(isset($_SESSION['id'])){
        include "connect.php";
        if(isset($_POST)){
            echo "post is set!";
            $jelo = $_POST['button'];
            $korisnik = $_SESSION['id'];

            $sql = "INSERT INTO favs VALUES ('$jelo', '$korisnik')";
            $conn->query($sql);
        }
    }
?>