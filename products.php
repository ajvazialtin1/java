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

<style>
 *{
  font-family: 'Exo 2', sans-serif;
}


#tabe 
   {
    margin: 2%;
    display: inline-block;
  background-color: orange;
  width: 15%;
  padding: 10px 0px;
   text-align: center;
}


.tab h3{
  background-color: rgb(43, 120, 221);
  color: white;
  text-transform: uppercase;
  line-height: 45px;
  letter-spacing: 0px;

}


.tab  p{
  margin-top: 20px;
  font-size: 14px;
  line-height: 20px;
  padding: 10px 0;
  border-bottom: 1px solid #ebebeb;
  color: white;
}

.butonat{
  background-color: #3f69a8;
  border: none;
  color: white;
  padding: 8px 50px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}


.butonat:hover {
  background-color: white;
  text-decoration: none;
}

</style>
</head>
<?php while($rows=$result->fetch_assoc())
   { ?> 
<body>


 <aside id="tabe">
    <div class="tab">
      <div align="content">
          <h3><?php echo $rows['name'];?></h3>
          <p><?php echo $rows['nameDoctor'];?></p>
          <p><?php echo $rows['maxPersona'];?></p>
          <p><?php echo $rows['minute'];?></p>
          <p><?php echo $rows['price'];?></p>
          <a class="butonat" a href="aboutshow.php" type="button">About</a>
    </div>
  </div>
  </aside>
<?php } ?> 


   </body>
   <br>
  <?php
  include "./footer.html"
?>

</html>
