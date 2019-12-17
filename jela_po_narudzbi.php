<?php
        include 'gotova_jela.php';

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

        global $result;
    
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
    
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT jela.naziv, jela.cijena, restorani.ime FROM jela LEFT JOIN restorani ON jela.restoranID=restorani.id WHERE kategorija = 'Jela po narudžbi' ";
        $result = $conn->query($sql) or die($conn->error);
        //generateTable($result);

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
                
            } else if($filter == 2){
                $sql = "SELECT jela.naziv, jela.cijena, restorani.ime FROM jela LEFT JOIN restorani ON jela.restoranID=restorani.id WHERE kategorija = 'Gotova Jela' ORDER BY cijena DESC ";
                $result = $conn->query($sql);
            }
        }

        $conn->close();
    ?>