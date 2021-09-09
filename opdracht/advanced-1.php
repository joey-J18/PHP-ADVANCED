<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form name= "Invoerformulier" action="advanced-2.php" method="post"></form>
    
    <br><label for="dikteRand">Dikte-rand(px):</label><br>
          <select id="select" name="dikteRand">  
          <?php
            $dikteRand = array("5", "10", "15");
                foreach ($dikteRand as $value){
                    echo "<option value=" . $value . ">" . $value . "</option>";
                }
                ?>
          </select>  

    <br><label for="tussenruimte">cel-padding(px)</label><br>
        <select id="select" name="tussenruimte">
            <?php
            $tussenruimte = array("10", "20", "30");
            foreach ($tussenruimte as $value){
                echo "<option value=" . $value . ">" . $value . "</option>";
            }
            ?>
        </select><br>   

        <label for="achtergrondkleur">achtergrond-kleur</label><br>
        
        <form name="formulier"action="advanced-2.php" method="post">
            <select id="select" name="kleuren">  
            <?php
            $kleuren = array("red", "blue", "green","brown");
                foreach ($kleuren as $value){
                    echo "<option value=" . $value . ">" . $value . "</option>";
                }
                ?>
           
        </select><br>
        
        <label for="tekstkleur">tekst-kleur</label><br>

        <form name="formulier"action="advanced-2.php" method="post">
        <select id="select" name="tekstkleuren" >
        <?php
        $tekstkleuren = array("red", "blue", "green", "black", "brown");
        foreach($tekstkleuren as $value){
            echo "<option value=" . $value . ">" . $value . "</option>";
        }

        ?>
        </select><br><br>

<input type="submit" name= "submit" value="verstuur">


</body>
</html>
