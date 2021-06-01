<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $Piet=array(
        "voornaam"=>"Piet",
        "achternaam"=>"jansen",
        "leeftijd"=>"19",
        "klas"=>"4b",
       );

       $Mohammed=array(
        "voornaam"=>"Mohammed",
        "achternaam"=>"Ali",
        "leeftijd"=>"17",
        "klas"=>"9g",
       );

       $Els=array(
        "voornaam"=>"Else",
        "achternaam"=>"Van dijk",
        "leeftijd"=>"18",
        "klas"=>"4c",
       );
       
       
       echo "Deze student heet " . $Mohammed['voornaam'] . " en is " . $Mohammed["leeftijd"] . " jaar oud en zit in klas " . $Mohammed["klas"]; 


    ?>
</body>
</html>