<?php

$conn = mysqli_connect('localhost','root','','test');

if(mysqli_connect_error()){
   exit('Errore gjat lidhjes se databasese' . mysqli_connect_error());
}
?>
