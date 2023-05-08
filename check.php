<?php
   $link = mysqli_connect("localhost", "root", "", "diploma");
 
   if($link === false){
      die("ERROR: Could not connect. " . mysqli_connect_error());
   }

   $login = $_POST['login'];
   echo $login;
 
?> 