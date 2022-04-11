<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
    <link rel="stylesheet" type="text/css" href="css/mystyle.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel='stylesheet' type='text/css' media='screen' href='css/gallery.css'>  
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
  include "./header.html"
?>
  </head>
<body>

<aside>
    <div class="container1">
        <div class="image-box">
          <div class="image">
            <img class="img1" src="css/f.jpg" alt="">
          </div>
          <div class="image">
            <img class="img2" src="css/w.jpg" alt="">
          </div>
          <div class="image">
            <img class="img3" src="css/family.jpg" alt="">
          </div>
          <div class="image">
            <img class="img4" src="css/f.jpg" alt="">
          </div>
        </div>
      </div>
    </aside>
  <div class="h1">
    <h1>The Purest of Babys</h1>
  </div>
<main> 
    <div class="grid-container">
        <div class="f">
          <img class='grid-item grid-item-1' src='img/1.jpg' alt=''>
          <p>"Is My <span class="red">First</span> Birthday !"</p>
        </div>
        <div class="f">
          <img class='grid-item grid-item-2' src='img/2.jpg' alt=''>
          <p>"Is My <span class="red">Second</span> Birthday !"</p>
        </div>
        <div class="f">
          <img class='grid-item grid-item-3' src='img/3.jpg' alt=''>
          <p>"Is My <span class="red">Third</span> Birthday !"</p>
        </div>
        <div class="f">
          <img class='grid-item grid-item-4' src='img/5.5.jpg' alt=''>
          <p>"Is My <span class="red">Fourth</span> Birthday !"</p>
        </div>
        <div class="f">
          <img class='grid-item grid-item-5' src='img/5.jpg' alt=''>
          <p>"Is My <span class="red">Fifth</span> Birthday !"</p>
        </div>
        <div class="f">
          <img class='grid-item grid-item-6' src='img/6.jpg' alt=''>
          <p>Is My <span class="red">Sixth </span>Birthday !"</p>
        </div>
        <div class="f"> 
          <img class='grid-item grid-item-7' src='img/7.jpg' alt=''>
          <p>"Is My <span class="red">Seventh</span> Birthday !"</p>
        </div>
        <div class="f">
          <img class='grid-item grid-item-8' src='img/8.jpg' alt=''>
          <p>"Is My <span class="red">Eighth </span> Birthday !"</p>
        </div>
        <div class="f">
          <img class='grid-item grid-item-9' src='img/9.jpg' alt=''>
          <p>"Is My <span class="red">Nineth </span> Birthday !"</p>
        </div>
        <div class="f">
          <img class='grid-item grid-item-10' src='img/10.jpg' alt=''>
          <p>"Is My <span class="red">Tenth </span> Birthday !"</p>
        </div>
      </div>
</main>

<article>
<div class="article">
    <h1>Regjistroni Femijen </h1>
    <label class="input">Emri<br></label>
<input type="text" value="" name="" class="in"><br><br>
<div>
<label class="input">Mbiemri</label><br></div>
<input type="text" value="" name="" class="in"><br><br>
<label for="datemax" >Enter a date before 2021-01-01:</label><br>
<input type="date" id="datemax" name="datemax" max="2021-12-31" class="in"><br><br>

<label for="datemin" >Enter a date after 2011-01-01:</label><br>
<input type="date" id="datemin" name="datemin" min="2011-01-02" class="in"><br><br>

<label for="quantity">Mosha (between 1 and 10):</label><br>
<input type="number" id="quantity" name="quantity" min="1" max="10" class="in"><br><br>

<div class="gj">
    <label >Gjinia : </label>
<label>M<input type="checkbox" id="" name="" class="in1"></label>
<label>F<input type="checkbox" id="" name="" class="in1"></label><br></div>
<div class="inp">

    <label for="img">Select image:</label>
  <input type="file" id="img" name="img" accept="image/*" ><br><br>
</div>


<input type="submit" value="Submit" class="in">
</div>
</div>
</article>
<?php
  include "./footer.html"
?>
    </body>
    </html>