<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Hello, world!</title>
  <link rel="stylesheet" href="css/assignment_1_styles.css"/>
  <meta name="viewport" content="width=device-width,initial-scale=1" />

</head>
<body>
   <div id="logo">
      <img src="http://profperry.com/Classes20/PHPwithMySQL/KingLibLogo.jpg">
   </div>
   <h2><b><br/><br/><br/><br/>Thank You for Registering!</b></h2>
   <h3>
   <?php
   $firstname = $_POST['firstname'];
   $lastname = $_POST['lastname'];
   $email = $_POST['email'];
   $city = $_POST['city'];
   $fullname = $firstname ." ". $lastname;
   echo "Name: ". $fullname."<br/>";
   echo "Email: ". $email. "<br/>";
   echo "City: ". $city;

   ?>
   </h3>
</body>
</html>