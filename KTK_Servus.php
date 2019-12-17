<?php
    session_start();
    if(isset($_SESSION['id'])){
        include "logged_in_nav.php";
    } else {
        include "nav.php"; 
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="restoran_details.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Quicksand|Rubik&display=swap" rel="stylesheet">
</head>

<body class="body">

    <div class="container-fluid">
        <div class="container">

            <div id="demo" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                </ul>

                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/Servus_slideshow/pic1.jpg" alt="Los Angeles">
                    </div>
                    <div class="carousel-item">
                        <img src="images/Servus_slideshow/pic2.jpg" alt="Chicago">
                    </div>
                    <div class="carousel-item">
                        <img src="images/Servus_slideshow/pic3.jpg" alt="New York">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>

            </div>
        </div>
    </div>
    
    <ul class="nav nav-tabs nav-justified">
        <li class="nav-item tab-title">
            <a class="nav-link active" data-toggle="tab" href="#gotova-jela">Gotova jela</a>
        </li>
        <li class="nav-item tab-title">
            <a class="nav-link" data-toggle="tab" href="#jela-po-narudzbi">Jela po narudžbi</a>
        </li>
        <li class="nav-item tab-title">
            <a class="nav-link" data-toggle="tab" href="#jela-sa-rostilja">Jela sa roštilja</a>
        </li>
        <li class="nav-item tab-title">
            <a class="nav-link" data-toggle="tab" href="#mesne-plate">Mesne plate</a>
        </li>
        <li class="nav-item tab-title">
            <a class="nav-link" data-toggle="tab" href="#salate">Salate</a>
        </li>
    </ul>

    <div class="tab-content">
        <div class="tab-pane cointainer active" id="gotova-jela">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <table class="table table-bordered">
                        <thead class="thead-light">
                            <tr>
                                <th>Naziv</th>
                                <th>Cijena</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Grah varivo</td>
                                <td>20,00 kn</td>
                            </tr>
                            <tr>
                                <td>Grah sa kobasicom</td>
                                <td>25,00 kn</td>
                            </tr>
                            <tr>
                                <td>Sarma sa pire krumpirom</td>
                                <td>25,00 kn</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>
        <div class="tab-pane cointainer" id="jela-po-narudzbi">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <table class="table table-bordered">
                        <thead class="thead-light">
                            <tr>
                                <th>Naziv</th>
                                <th>Cijena</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Moslavački popečki
                                    <p><small>(Popečki 2 komada, rizi-bizi/pekarski krumpir, miješana salata)</small>
                                    </p>
                                </td>
                                <td>56,00 kn</td>
                            </tr>
                            <tr>
                                <td>Svinjske rolice u umaku od šampinjona
                                    <p><small>(Svinjske rolice 2 komada, kroketi/povrće na žaru, miješana
                                            salata)</small></p>
                                </td>
                                <td>70,00 kn</td>
                            </tr>
                            <tr>
                                <td>Bečki odrezak
                                    <p><small>(kroketi/pommes)</small></p>
                                </td>
                                <td>26,00 kn</td>
                            </tr>
                            <tr>
                                <td>Zagrebački odrezak
                                    <p><small>(rizi-bizi/pommes, miješana salata)</small></p>
                                </td>
                                <td>30,00 kn</td>
                            </tr>
                            <tr>
                                <td>Pržene lignje
                                    <p><small>(pommes, tartar)</small></p>
                                </td>
                                <td>45,00 kn</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>
        <div class="tab-pane cointainer" id="jela-sa-rostilja">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <table class="table table-bordered">
                        <thead class="thead-light">
                            <tr>
                                <th>Naziv</th>
                                <th>Cijena</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Grill mix</td>
                                <td>37,00 kn</td>
                            </tr>
                            <tr>
                                <td>Vratina sa žara</td>
                                <td>32,00 kn</td>
                            </tr>
                            <tr>
                                <td>Pileći file s prilogom</td>
                                <td>30,00 kn</td>
                            </tr>
                            <tr>
                                <td>Šareni pileći ražnjići</td>
                                <td>30,00 kn</td>
                            </tr>
                            <tr>
                                <td>Ražnjići</td>
                                <td>32,00 kn</td>
                            </tr>
                            <tr>
                                <td>Ćevapi (veliki)</td>
                                <td>28,00 kn</td>
                            </tr>
                            <tr>
                                <td>Ćevapi (srednji)</td>
                                <td>18,00 kn</td>
                            </tr>
                            <tr>
                                <td>Ćevapi (mali)</td>
                                <td>14,00 kn</td>
                            </tr>
                            <tr>
                                <td>Ćevapi u kajmaku</td>
                                <td>37,00 kn</td>
                            </tr>
                            <tr>
                                <td>Punjeni ćevapi</td>
                                <td>32,00 kn</td>
                            </tr>
                            <tr>
                                <td>Šiš ćevapi</td>
                                <td>32,00 kn</td>
                            </tr>
                            <tr>
                                <td>Mazalice</td>
                                <td>20,00 kn</td>
                            </tr>
                            <tr>
                                <td>Pljeskavica</td>
                                <td>32,00 kn</td>
                            </tr>
                            <tr>
                                <td>Punjena pljeskavica</td>
                                <td>35,00 kn</td>
                            </tr>
                            <tr>
                                <td>Pljeskavica u kajmaku</td>
                                <td>37,00 kn</td>
                            </tr>
                            <tr>
                                <td>Gurmanska pljeskavica</td>
                                <td>37,00 kn</td>
                            </tr>
                            <tr>
                                <td>Servusica</td>
                                <td>43,00 kn</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>
        <div class="tab-pane cointainer" id="mesne-plate">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <table class="table table-bordered">
                        <thead class="thead-light">
                            <tr>
                                <th>Naziv</th>
                                <th>Cijena</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Miješano meso
                                    <p><small>(2x ćevapi, 1x vratina, 1x ražnjić, 1x kobasica, 1x piletina, lepinja,
                                            luk)</small></p>
                                </td>
                                <td>55,00 kn</td>
                            </tr>
                            <tr>
                                <td>Ljubav
                                    <p><small>(4x ćevapi, 3x uštipci, 2x pileći ražnjići, 2x šiš ćevap, pekarski
                                            krumpir,<br> lepinja, ajvar, luk)</small></p>
                                </td>
                                <td>95,00 kn</td>
                            </tr>
                            <tr>
                                <td>Chicken plata
                                    <p><small>(2x moslavački popečak, 2x pohani file, 2x šareni ražnjić, 2x file
                                            grill,<br> rizi-bizi, tartar</small></p>
                                </td>
                                <td>145,00 kn</td>
                            </tr>
                            <tr>
                                <td>Trio gušt
                                    <p><small>(6x ćevapi, 3x uštipci, 2x pileći file, 2x ražnjići, 2x kobasica, 3x
                                            kotlet,<br> pekarski krumpir, lepinja, ajvar, luk</small></p>
                                </td>
                                <td>160,00 kn</td>
                            </tr>
                            <tr>
                                <td>Moslavačka rapsodija
                                    <p><small>(8x ćevapi, 4x uštipci, 2x šiš ćevap, 4x ražnjić, 2x kobasica, 2x
                                            kotlet,<br> rizi-bizi, pekarski krumpir, lepinja, ajvar, urnebes,
                                            luk)</small></p>
                                </td>
                                <td>240,00 kn</td>
                            </tr>
                            <tr>
                                <td>Plata maja
                                    <p><small>(10x ćevap, 6x uštipak, 2x šiš ćevap, 2x pileći ražnjić,<br> 2x moslavački
                                            popečak, 2x pohani pileći file, 2x kobasica, <br> 3x vratina, rizi-bizi,
                                            pekarski krumpir, lepinja, ajvar, urnebes, luk)</small></p>
                                </td>
                                <td>300,00 kn</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>
        <div class="tab-pane cointainer" id="salate">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <table class="table table-bordered">
                        <thead class="thead-light">
                            <tr>
                                <th>Naziv</th>
                                <th>Cijena</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Zelje</td>
                                <td>5,00 kn</td>
                            </tr>
                            <tr>
                                <td>Miješana</td>
                                <td>8,00 kn</td>
                            </tr>
                            <tr>
                                <td>Meksička</td>
                                <td>10,00 kn</td>
                            </tr>
                            <tr>
                                <td>Šopska</td>
                                <td>20,00 kn</td>
                            </tr>
                            <tr>
                                <td>Tuna</td>
                                <td>25,00 kn</td>
                            </tr>
                            <tr>
                                <td>Piletina</td>
                                <td>27,00 kn</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>
    </div>
</body>

</html>