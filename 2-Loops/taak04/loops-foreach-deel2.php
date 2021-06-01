<!DOCTYPE html>
<html>

<body>

<?php
$klassen = array("8A", "8B", "8C", "8D", "8E", "9A", "9B", "9C", "9D", "9E");

?>
<form name="Formulier" action="antwoord.php" method="get">
<select name="klas">
<?php
$klassen = array("8A", "8B", "8C", "8D", "8E", "9A", "9B", "9C", "9D", "9E");
foreach($klassen as $value){
    echo "<option value=" . $value . ">" . $value . "</option>";
}

?>
</select>
       
       <input type="submit" name= "submit" value="verstuur">


</form>


</body>
</html>