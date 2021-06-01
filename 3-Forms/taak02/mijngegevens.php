<!DOCTYPE html>
<head>
    <title>invoer</title>
</head>
<style>
      body {
          background-color: <?php echo $_POST["kleuren"]; ?>
      }
  </style>
<body>
    <?php
    echo "Voornaam is:<br/>".$_POST["voornaam"];

    echo "<br/>achternaam is:<br/>".$_POST["achternaam"];

    echo "<br/>klas is:<br/>".$_POST["klas"];

    echo "<br/>leeftijd is:<br/>".$_POST["leeftijd"];

    echo "<br/>adres is:<br/>".$_POST["adres"];

    echo "<br/>plaatsnaam is:<br/>".$_POST["plaatsnaam"];

    echo "<br/>favoriete-muziekband is:<br/>".$_POST["favoriete-muziekband"];

    echo "<br/>Geslacht is :<br/>".$_POST["geslacht"];

    echo "<br/>lievelingskleur:<br/>".$_POST["kleuren"];
    ?>
</body>
</html>