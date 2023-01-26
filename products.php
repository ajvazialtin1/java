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
<style>
  


</style>
<body >
            
<table>
           
 <tr>
 <th>Name</th>
 <th>Name Doctor</th>
 <th>Max Persona</th>
 <th>Minute </th>
 <th>Price</th>
 <th>Register</th>
 </tr>
   <?php while($rows=$result->fetch_assoc())
   { ?>
 <tr>
 <td><?php echo $rows['nameDoctor'];?></td>
 <td><?php echo $rows['nameDoctor'];?></td>
 <td><?php echo $rows['maxPersona'];?></td>
 <td><?php echo $rows['minute'];?></td>
  <td><?php echo $rows['price'];?></td>
 <td><a href="register.php" data-toggle="modal"  class="login" type="submit" value="regjistrohu">Register </a> </td>
 </tr>
 <?php } ?>
 </table>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


<br>
   </body>

<br>

  <?php
  include "./footer.html"
?>

</html>
