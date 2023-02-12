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
    <title></title>
    <?php
  include "./header.html"
?>
</head>
<?php while($rows=$result->fetch_assoc())
   { ?> 
<body>
<main>
</main>
<br>

    <div class="container">
    <div class="price">
          <h3><?php echo $rows['name'];?></h3>
          <p><?php echo $rows['nameDoctor'];?></p>
          <p><?php echo $rows['maxPersona'];?></p>
          <p><?php echo $rows['minute'];?></p>
          <p><?php echo $rows['price'];?></p>
          <button><a href="register.php"><input type="submit" value="regjistrohu"></button>
    </div>
  </div>
<?php } ?> 


   </body>
   <br>
  <?php
  include "./footer.html"
?>

</html>
<style>
@import url('https://fonts.googleapis.com/css?family=Exo+2|Yatra+One');

*{
  font-family: 'Exo 2', sans-serif;
}


.price {
  background-color: orange;
  margin-left: 40%;
  margin-right: 40%;
  padding: 10px 0px;
   text-align: center;
}


.price h3{
  background-color: rgb(43, 120, 221);
  color: white;
  text-transform: uppercase;
  line-height: 45px;
  letter-spacing: 0px;

}


.price  p{
  margin-top: 20px;
  font-size: 14px;
  line-height: 20px;
  padding: 10px 0;
  border-bottom: 1px solid #ebebeb;
  color: white;
}



</style> 