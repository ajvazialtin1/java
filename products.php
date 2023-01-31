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
    <link rel="stylesheet" href="css/product.css">
    <title>Subscribe</title>
    <?php
  include "./header.html"
?>
</head>

<body>
    <article>
    <div class="container" style="width: 100%;">

       <?php while($rows=$result->fetch_assoc())
   { ?> 
        
       <div class="priceing-table-main">
            <div class="col-md-3 price-grid">
          <div class="price-block agile">
            <div class="price-gd-top pric-clr1"> 
              <h4>Basic Plan</h4>
              <h3>$10</h3>
              <h5>Per Month</h5>
            </div>
            <div class="price-gd-bottom">
              <div class="price-list">
                <ul>
                  <li><?php echo $rows['nameDoctor'];?></li>
                  <li><?php echo $rows['maxPersona'];?></li>
                  <li><?php echo $rows['minute'];?></li>
                  <li><?php echo $rows['price'];?></li>
                </ul>
              </div>
              <div class="price-selet pric-sclr1">
                <a href="register.php" data-toggle="modal" data-target="#myModal1" >Sign Up</a> 
              </div>
            </div>
          </div>
           </div>  <?php } ?>

</article>


  
  <?php
  include "./footer.html"
?>
</article>
   </body>
</html>
