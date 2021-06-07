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
    
    function rekenuit(int $x, int $y, int $t) {
        $z = $x + $y + $t;
        return $z;
      }
      
      echo "Als ik de getallen 5, 10 en 2 bij elkaar optel, is de uitkomst " . rekenuit(5,10,2) . "<br>";
      echo "Als ik de getallen 7, 13 en 3 bij elkaar optel, is de uitkomst " . rekenuit(7,13,3) . "<br>";
      echo "Als ik de getallen 99, 34 en 124 bij elkaar optel, is de uitkomst " . rekenuit(99,34,124);
    ?>
</body>
</html>