<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

echo "Mijn Artiest heet".$_GET["artiest"]. "titel is" . $_GET["Titel"]."Jaar is".$_GET["jaar"]."Muzieksoort is".$_GET["muzieksoort"];



  ?>
  http://localhost/eagledev/php-advanced/3-Forms/taak03/mijnmuziek.php?artiest=jan&Titel=mooieBloem&jaar=2008&muzieksoort=rustig
</body>
</html>