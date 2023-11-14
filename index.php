<?php 

  include_once "./calculoimc.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PTI</title>
</head>
<body>
  <form action="calculoimc.php" method="post">
    <label for="imc">Insira o IMC:</label>
    <input type="number" step="any" id="imc">
    <input type="submit" value="Calcular">
  </form>
</body>
</html>