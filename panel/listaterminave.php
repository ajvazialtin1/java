<?php include "header.php";
session_start();

if(!isset($_SESSION['admin_1'])){
   header('location: ../login.php');
}

  
  $conn = mysqli_connect('localhost','root','','web');
  
// Checking for connections
if ($conn->connect_error) {
    die('Connect Error (' . 
    $conn->connect_errno . ') '. 
    $conn->connect_error);
}
  
// SQL query to select data from database
$sql = "SELECT * FROM terminet ORDER BY id";
$result = $conn->query($sql);
$conn->close(); 
?>
<html>
<head>
</head>
<link rel="stylesheet"  href="listaterminave.css">
<body>
  <h4 class="teri"> Terminet</h4>
<article class="listat">
  <div>
       <?php while($rows=$result->fetch_assoc())
   { ?> 

<div class="di">
    <h6>Emri i Plot:  <?php echo $rows['name'];?>   </h6>    
      <h6>  Email : <?php echo $rows['email'];?></h6>
    <p>Numri Telefonit : <?php echo $rows['phone'];?></p>
      <p>Data e Terminit : <?php echo $rows['data'];?></p>
  </div><?php } ?>

</article>

  </body>

</html>