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
$sql = "SELECT * FROM kontakt ORDER BY id";
$result = $conn->query($sql);
$conn->close(); 
?>
<html>
<head>
</head>
<link rel="stylesheet"  href="email.css">
<body>
    <h4 style="text-align: center; margin-top: 30px;">Email</h4>
<article class="email">
  <div>
       <?php while($rows=$result->fetch_assoc())
   { ?> 

<div class="di">
    <h6> Full Name :  <?php echo $rows['name'];?>   </h6>    
      <h6>  Email : <?php echo $rows['email'];?></h6>
    <p>Subject : <?php echo $rows['subject'];?></p>
  </div><?php } ?>

</article>

  </body>

</html>