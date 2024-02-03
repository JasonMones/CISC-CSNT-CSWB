<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Hello, world!</title>
  <meta name="viewport" content="width=device-width,initial-scale=1" />
</head>
<body>
  <h1>This is a website that uses PHP!</h1>
  <?php
    $time = date('Y-m-d h:i:s');
    echo "<h1><b><span style='color: green; font-size: 60px'>The current date and time is: $time</span><b></h1>";
  ?>
</body>
</html>