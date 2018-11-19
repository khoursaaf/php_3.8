<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Exercise</title>
</head>
<body>
  <p>En allant de 200 à 0 avec un pas de 12, afficher le message Enfin !!!!.</p>
  <?php
  for ($a=200; $a >= 0 ; $a -= 12 ) {
    echo $a."Enfin!!!";
  }
  ?>
  <?php
  $a = 200;
  while ($a >= 0) {
    echo $a."Enfin!!!";
    $a -= 12;
  }
  ?>
</body>
</html>
