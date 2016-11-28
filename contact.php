<?php
  $connection = mysqli_connect("localhost","root","root","yashwanthsoodini");
  if(!$connection){
    die("error");
  }
  if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $sql = "INSERT INTO `entries` (`name`,`email`,`message`) VALUES ('$name','$email','$message');";
    $rs = mysqli_query($connection,$sql);
    if($rs){
      mail("yashwanth.soodini.15csc@bml.edu.in","GG",$message);
      die("Success!");
    }
  }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Contact</title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <p><input type="text" name="name"></p>
  <p><input type="email" name="email"></p>
  <p><textarea name="message"></textarea></p>
  <p><button type="submit" name="submit">Send!</button></p>
</form>
</body>
</html>
