<?php

   session_start();
   require_once 'connect.php';

   $user = $_SESSION['idUser'];

   $name = filter_var(trim($_POST['name']),
   FILTER_SANITIZE_STRING); 

   $description = filter_var(trim($_POST['description']),
   FILTER_SANITIZE_STRING); 

   if  (isset ($_POST['btnSave'])) {
  //  $connect->query("INSERT INTO `vacancies` (`id_user`, `name`, `description`)
  //  VALUES('$user', '$name', '$description')");

  $NameParts = $_POST['nameParts'];
  print_r($NameParts);

 }

$connect->close(); 
// header('Location: /HTML/vacancy.html');
 
?>