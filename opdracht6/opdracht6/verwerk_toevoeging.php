<?php

    // KLASGENOOT-DATA BINNENHALEN
    $voornaam = $_POST['voornaam'];
    $tussenvoegsel =  $_POST['tussenvoegsel'];
    $achternaam =   $_POST['achternaam'];
    $woonplaats =   $_POST['woonplaats'];

    // DATABASE-VARIABELEN AANMAKEN (LET OP: VERANDER JE DATABASENAAM)
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = '24423_db';
    // CONNECTIE MAKEN
    $dbc = mysqli_connect($host,$user,$password,$database) or die ('Er is geen connectie met de database. Check je databasevariabelen.');

    // QUERY (OPDRACHT) SCHRIJVEN
    $query = "INSERT INTO klasgenoten VALUES (0, $voornaam','$tussenvoegsel','$achternaam','$woonplaats')";

    // QUERY UITVOEREN
    $result = mysqli_query($dbc, $query) or die ('De query is mislukt.');
    // CONNECTIE SLUITEN
    $dbc_closed = mysqli_close($dbc);

    // GEBRUIKER TERUG STUREN NAAR DE INDEX-PAGINA
    header("Location: index.php");