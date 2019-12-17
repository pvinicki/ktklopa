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
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="restorani.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand|Rubik&display=swap|Noto+Sans+TC&display=swap" rel="stylesheet">
</head>

<body class="body">

    <div class="container-fluid">
        <div class="row" id="border-top">
            <div class="col-lg-4">
                <div class="container">
                    <div class="content text-center">
                        <h1><a href="KTK_Servus.php">Bistro "Servus"</a></h1>
                        <img src="images/servus.jpg" alt="servus">
                        <p>Kontakt: 044 683 577 </p>
                        <p>Radno vrijeme: 07:00 - 23:00</p>

                        <div class="social">
                            <a href="https://www.facebook.com/BistroServusKutina/"><img src="facebook_icon.png"
                                    alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="container">
                    <div class="content text-center">
                        <h1><a href="">King's pub</a></h1>
                        <img src="images/kingspub.jpg" alt="servus" width="400px">
                        <p>Kontakt: 044 683 000 </p>
                        <p>Radno vrijeme: 08:00 - 23:00</p>

                        <div class="social">
                            <div class="social_icon_holder">
                                <a href="https://www.facebook.com/pg/thekingspubkutina/"><img src="facebook_icon.png"
                                        alt=""></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-4">
                <div class="container">
                    <div class="content text-center">
                        <h1><a href="">Tramontana</a></h1>
                        <img src="images/tramontana.jpg" alt="servus" width="400px">
                        <p>Kontakt: 044 625 666 </p>
                        <p>Radno vrijeme: 08:00 - 00:00</p>

                        <div class="social">
                            <div class="social_icon_holder">
                                <a href="https://www.facebook.com/Tramontana-322700627792806/"><img
                                        src="facebook_icon.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <div class="container">
                    <div class="content text-center">
                        <h1><a href="">Cookie restoran</a></h1>
                        <img id="resize" src="images/cookie.jpg" alt="servus" width="400px">
                        <p>Kontakt: 099 771 4833 </p>
                        <p>Radno vrijeme: 09:00 - 23:00</p>

                        <div class="social">
                            <div class="social_icon_holder">
                                <a href="https://www.facebook.com/CookieRestoran/"><img src="facebook_icon.png"
                                        alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="container">
                    <div class="content text-center">
                        <h1><a href="">Kebab kod Đurđe</a></h1>
                        <img src="images/kebab.jpg" alt="servus" width="400px">

                        <p>Kontakt: 099 878 0077 </p>
                        <p>Radno vrijeme: 08:00 - 00:00</p>

                        <div class="social">
                            <div class="social_icon_holder">
                                <a
                                    href="https://www.facebook.com/Kebab-Express-Ugostiteljski-obrt-Kod-%C4%90ur%C4%91e-227819227241332/"><img
                                        src="facebook_icon.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="container">
                    <div class="content text-center">
                        <h1><a href="">Mans</a></h1>
                        <img src="images/mans.jpg" alt="servus" width="400px">

                        <p>Kontakt: 044 682 352 </p>
                        <p>Radno vrijeme: 07:00 - 23:00</p>

                        <div class="social">
                            <div class="social_icon_holder">
                                <a href="https://www.facebook.com/Zdravljak-MANS-137286766343055/"><img
                                        src="facebook_icon.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-4">
                <div class="container">
                    <div class="content text-center">
                        <h1><a href="">Titanik</a></h1>
                        <img src="images/titanik.jpg" alt="servus" width="400px">
                        <p>Kontakt: 044 630 257 </p>
                        <p>Radno vrijeme: 06:00 - 23:00</p>

                        <div class="social">
                            <div class="social_icon_holder">
                                <a href="https://www.facebook.com/bistro.titanik/"><img src="facebook_icon.png"
                                        alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4">
                <div class="container">
                    <div class="content text-center">
                        <h1><a href="">Krafter</a></h1>
                        <img src="images/krafter.png" alt="servus" width="400px">
                        <p>Kontakt: 099 771 4833 </p>
                        <p>Radno vrijeme: 08:00 - 23:00</p>

                        <div class="social">
                            <div class="social_icon_holder">
                                <a href="https://www.facebook.com/barkrafter/"><img src="facebook_icon.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="container">
                    <div></div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>