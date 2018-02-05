<?php

// POST-ARRAY UITLEZEN
$voornaam = $_POST['voornaam'];
$tussenvoegsel = $_POST['tussenvoegsel'];
$achternaam = $_POST['achternaam'];
$mailadres = $_POST['mailadres'];

//DATA IN DATABASE STOPPEN
// 1. VERBINDING MAKEN MET DATABASE
$dbc = mysqli_connect('localhost','root','', '24423_db')or die('Error with connection');
// 2. OPDRACHT(QUERY)SCHRIJVEN VOOR DE DATABASE
$query = "INSERT INTO nieuwsbrief_tutorial VALUES (0,'$voornaam','$tussenvoegsel','$achternaam','$mailadres')";
// 3. QUERY UITVOEREN
$result = mysqli_query($dbc,$query) or die('error querying.');
// 4. VERBINDING VERBEKEN
mysqli_close($dbc);


//DBEVESTIGEN DAT DATA IN DATABASE STAAT
if ($result) {
    echo 'de volgende gegevens zijn toegevoegd aan de database <br>';
    echo $voornaam . '<br>';
    echo $tussenvoegsel . '<br>';
    echo $achternaam . '<br>';
    echo $mailadres . '<br>';
    echo'<a href="index.php">klik hier om terug te keren naar homepage</a><br>';
}
else {
    echo 'sorry iets misgegaan opnieuw proberen';
}