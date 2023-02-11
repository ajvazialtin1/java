<?php
  
  $conn = mysqli_connect('localhost','root','','web');
  
// Checking for connections
if ($conn->connect_error) {
    die('Connect Error (' . 
    $conn->connect_errno . ') '. 
    $conn->connect_error);
}
  
// SQL query to select data from database
$sql = "SELECT * FROM about ORDER BY id";
$result = $conn->query($sql);
$conn->close(); 
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
  <link rel="stylesheet" href="about.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <?php
  include "./header.html"
?>
</head>
<?php while($rows=$result->fetch_assoc())
   { ?> 
<body>
<main>
    <br>
    <div class="about">
        <h1>About Us</h1> <br>
        <div>
        <p><?php echo $rows['text1'];?>
        </p>
        </div>
    </div>
</main>
<div class="ekipa">
    <h1>Our Team</h1>
    <div class="our_team">
        <div class="team_member">
          <div class="member_img">
             <img src="img/mjeku1.jpg" alt="our_team">
            <div class="social_media">
             </div>
          </div>
          <h3>Test 1</h3>
          <span>Doktorr i Pergjitshem</span>
          <p><?php echo $rows['text2'];?></p>
        </div>
        <div class="team_member">
           <div class="member_img">
             <img src="img/mjeku2.jpg" alt="our_team">
          </div>
          <h3>Test 2</h3>
          <span>Pediater</span>
          <p><?php echo $rows['text3'];?></p>
      </div>
        <div class="team_member">
           <div class="member_img">
             <img src="img/mjeku3.jpg" alt="our_team">
          </div>
          <h3>Test 3</h3>
          <span>Stomatolog</span>
          <p><?php echo $rows['text4'];?></p>
      </div>
        <div class="team_member">
           <div class="member_img">
             <img src="img/mjeku4.jpg" alt="our_team">
          </div>
          <h3>Test 4</h3>
          <span>Psikolog</span>
          <p><?php echo $rows['text5'];?></p>
      </div>  
    </div>
</div>	
<?php } ?>
    <br>
    <?php
  include "./footer.html"
?>
</body>
</html>