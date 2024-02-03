<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>X_3_4</title>
  <link rel="stylesheet" type ="text/css" href=""/>
  <meta name="viewport" content="width=device-width,initial-scale=1" />

</head>
<body>
<?php
  $number_of_pets = $_POST['petsnumber'];
  $factor = 2;
  $double_of_pets = $number_of_pets * $factor;
  echo "You have $number_of_pets pets now, but wouldn't you rather have $double_of_pets?";
?>
</body>
</html>