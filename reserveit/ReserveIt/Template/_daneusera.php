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
                    <li><a href="panelklienta.html">Twoje rezerwacje</a></li>
                    <li><a href="daneusera.html">Dane użytkwonika</a></li>
                </ul>

                <hr class="m-o">
                <h3><i class="icon-phone"></i>+48 666 888 999</h3>
                <h3><i class="icon-mail"></i>info@reserveit.pl</h3>
                <hr class="m-o">

            </div>
            <div class="col-sm-10 py-5">
                <h2>Twoje dane</h2>
                <hr class="m-o">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">lp.</th>
                        <th scope="col"></th>
                        <th scope="col">Działanie</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">Imię i nazwisko</th>
                        <td>Janusz Kowalski</td>
                    </tr>
                    <tr>
                        <th scope="row">Adres e-mail</th>
                        <td>januszek@gmail.com</td>
                        <td><a href="#">Zmień</a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>