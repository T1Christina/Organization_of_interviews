<?php

  session_start();
  require_once 'connect.php'; 

  $user = $_SESSION['idUser']; //id рекрутера из файла login.php 
  $vacancy = $_SESSION['idVacancy']; //id вакансии из файла add-job.php 

  $NameVac = mysqli_query($connect, "SELECT `name` FROM  `vacancies` WHERE `id`= '$vacancy' ");
  $row = mysqli_fetch_array($NameVac, MYSQLI_ASSOC);
  $NameVac1 = $row['name']; 

  $AboutVac = mysqli_query($connect, "SELECT `description` FROM  `vacancies` WHERE `id`= '$vacancy' ");
  $row = mysqli_fetch_array($AboutVac, MYSQLI_ASSOC);
  $AboutVac1 = $row['description']; 

  // Посчитать участников, которые относятся к одной и той же вакансии по id_vacancy
  $COUNTID = mysqli_query($connect, "SELECT COUNT(*), COUNT(*) FROM  `participants` WHERE `id_vacancy`= '$vacancy' "); 
  $row = mysqli_fetch_array($COUNTID, MYSQLI_ASSOC);
  $COUNTID1 = $row['COUNT(*)']; //получение количества
  // echo $COUNTID1;

  // Передать значение count js для добавления участников с классами, в js прогнать по циклу
  // for ($i = 0; $i < $COUNTID1; $i = $i + 1) {
  // }

  // echo $AboutVac1;    