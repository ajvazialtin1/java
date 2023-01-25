<?php
  
  $conn = mysqli_connect('localhost','root','','web');
  
// Checking for connections
if ($conn->connect_error) {
    die('Connect Error (' . 
    $conn->connect_errno . ') '. 
    $conn->connect_error);
}
  
// SQL query to select data from database
$sql = "SELECT * FROM paketat ORDER BY name";
$result = $conn->query($sql);
$conn->close(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/products.css">
    <title>Subscribe</title>
    <?php
  include "./header.html"
?>
</head>
<body>
  <br>
  <?php while($rows=$result->fetch_assoc())
   { ?>
<div class="kontenieri">
	<table class="tabela">
			<div class="tdhanat1"><?php echo $rows['name'];?></a></div>
      <div class="tdhanat1"><?php echo $rows['nameDoctor'];?></div>
      <div class="tdhanat1"><?php echo $rows['maxPersona'];?></div>
      <div class="tdhanat1"><?php echo $rows['minute'];?></div>
      <div class="tdhanat1"><?php echo $rows['price'];?></div>
      <a href="register.php"><input class="login" type="submit" value="regjistrohu">
   </table>
   </div>
   <?php } ?>
   <br>
</body>


<br>
  <?php
  include "./footer.html"
?>

</html>
