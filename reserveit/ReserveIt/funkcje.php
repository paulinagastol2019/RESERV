<?php
//podpięcie bazy danych
require ('Database/DBController.php');

//podpięcie klasy filmy
require ('Database/Filmy.php');

//obiekt DBController
$db = new DBController();

//obiekt Filmy
$filmy = new Filmy($db);
