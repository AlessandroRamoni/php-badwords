<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First PHP - badwords</title>
</head>

<body>
<?php
    $testo = "Ne parlavamo tanto tanti anni fa
    Di quanto è paranoica questa città
    Della sua gente, delle sue manie
    Due discoteche, centosei farmacie
    E ci troviamo ancora al punto che
    Si gira in macchina il mattino alle tre
    Alla ricerca di qualcosa che poi
    Cos'è non lo sappiamo nemmeno noi
    Con un deca non si può andar via
    Non ci basta neanche in pizzeria
    Fermati un attimo
    All'automatico
    Almeno a piedi non ci lascerà
    In questa città";

    $testoModificato =  str_replace('città', '***', $testo);
    
    $parolaDaModificare = $_GET["pizzeria"];

    ?>  


    <p><?= $testo ?></p>
    <p><?php echo $testoModificato ?></p>
    
    <p><?= strlen($testo); ?></p>


</body>

</html>