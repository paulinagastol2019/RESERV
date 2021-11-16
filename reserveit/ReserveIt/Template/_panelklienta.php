<?php
session_start();
if (!isset($_SESSION['zalogowany']))
{
    header('Location: logowanie.php');
    exit();
}
?>

<section id="panelklienta">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-2 panelklienta container-fluid">
                <hr class="m-o">
                <h2>Panel użytkownika</h2>
                <hr class="m-o">
                <ul>
                    <li><a href="#">Twoje rezerwacje</a></li>
                    <li><a href="daneusera.html">Dane użytkownika</a></li>
                </ul>

                <hr class="m-o">
                <h3><i class="icon-phone"></i>+48 666 888 999</h3>
                <h3><i class="icon-mail"></i>info@reserveit.pl</h3>
                <hr class="m-o">

            </div>
            <div class="col-sm-10 py-5">
                <?php echo "<p> ".' [ <a href="wylogowanie.php">Wyloguj się!</a> ]</p>';?>
                <h2>Witaj w swoim koncie - sprawdź swoje rezerwacje!</h2>
                <hr class="m-o">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">lp.</th>
                        <th scope="col">Repertuar</th>
                        <th scope="col">Data i godzina</th>
                        <th scope="col">Sala</th>
                        <th scope="col">Ilość miejsc</th>
                        <th scope="col">Działanie</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td><a href="ofilmie.html">W 80 dni do okoła świata</a></td>
                        <td>xyz</td>
                        <td>nr 5</td>
                        <td>2</td>
                        <td><a href="#">Usuń/Zmień</a></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td><a href="ofilmie.html">Incepcja</a></td>
                        <td>xyz</td>
                        <td>nr 6</td>
                        <td>1</td>
                        <td><a href="#">Usuń/Zmień</a></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td> <a href="ofilmie.html">Harry Potter i Kamień Filozoficzny</a></td>
                        <td>xyz</td>
                        <td>nr 1</td>
                        <td>2</td>
                        <td><a href="#">Usuń/Zmień</a></td>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

