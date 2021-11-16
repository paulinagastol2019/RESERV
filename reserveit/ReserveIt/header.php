<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Zarezerwuj swoje miejsce" />
    <meta name="keywords" content="kino, rezerwacja miejsc, repertuary" />
    <meta name="author" content="Paulina Gąstoł">
    <link rel="preconnect" href="https://fonts.googleapis.com"> <!--fonty-->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> <!--fonty-->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet"> <!--fonty-->
    <link rel="stylesheet" href="./icons/css/fontello.css" type="text/css"> <!-- ikony-->
    <title>ReserveIt.pl - zarezerwuj swoje miejsce na seans filmowy!</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">  <!--lokalnie podpięty bootstrap-->
    <link rel="stylesheet" href="style.css" type="text/css"> <!-- własne style-->

    <?php
        //podpięcie pliku funkcje.php
        require ('funkcje.php')
    ?>

</head>

<body>
<div class="wrapper">

    <header>
        <section class="pierwsza">
            <a href="index.php"><h1 class="logo"><img src="./images/Reserveit.pl-%20LOGO.jpg" alt="logo"></h1></a>
            <h2 class="zaloguj"><a href="logowanie.php">Zaloguj się!</a></h2>  <!-- zastanów się czy to nie bedzie problem-->
        </section>

        <nav class="nawigacja navbar navbar-expand-lg">
            <div class="container-fluid">
                <h3 class="sentencja">Znajdź i zarezerwuj swoje miejsce na ReserveIt.pl!</h3>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainMenu" aria-controls="mainMenu" aria-expanded="false" aria-label="Przełącznik nawigacji">
                    <span class="navbar-toggler-icon"></span> <!--ikona hamburgera-->
                </button>
                <div class="collapse navbar-collapse" id="mainMenu"> <!--zapadnięcie menu i pojawia się toggler-->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="link nav-link" href="index.php">Strona główna</a>
                        </li>
                        <li class="nav-item">
                            <a class="link nav-link" href="oaplikacji.php">O aplikacji</a>
                        </li>
                        <li class="nav-item">
                            <a class="link nav-link" href="kontakt.php">Kontakt</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
