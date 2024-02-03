<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>X_3_5</title>
  <link rel="stylesheet" type ="text/css" href=""/>
  <meta name="viewport" content="width=device-width,initial-scale=1" />

</head>
<body>
<?php
$salutation = $_POST['salutation'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$fulltitle = $salutation. $firstname." ". $lastname;
echo $fulltitle. " is a pretty formal way to address you, how about I just call you ".$firstname."?";
?>
</body>
</html>