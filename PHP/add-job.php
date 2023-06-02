<?php

  session_start();
  require_once 'connect.php'; 

  $user = $_SESSION['idUser']; //id рекрутера из файла login.php 

  $NameVac = $_POST['NameJob']; // Название вакансии
  $DescriptionVac = $_POST['Description'];  // Описание вакансии

  // Запись названия и описания вакансии в таблицу `vacancies` с id рекрутера
  $connect->query("INSERT INTO `vacancies` (`id_user`, `name`, `description`) 
  VALUES('$user', '$NameVac', '$DescriptionVac')");      

  // Получение id только что созданной вакансии
  $idVac = mysqli_insert_id($connect);
  $_SESSION['idVacancy'] = $idVac; // передача доступа другим файлам php к номеру id вакансии 

  // Получение остальных данных из ajax participant.js
  $NameParts = $_POST['nameParts'];  
  $SurnameParts = $_POST['SurnameParts'];  
  $TimeStart = $_POST['timeStart']; 
  $TimeEnd = $_POST['timeEnd'];  
  

  // Получение отдельных элементов массива
  $Mass = count($NameParts); //Найти длину массива 
  $Num = 0; // Нулевой элемент массива

  //Повторять от 0 до длины массива, чтобы пройтись по всем существующим элементам
  for ($i = 0; $i < $Mass; $i = $i + 1) {

  //Запись данных в таблицу `participants` по очереди каждую строку, разделяя массив
  $connect->query("INSERT INTO `participants` (`name`, `surname`, `work_time_start`, `work_time_end`, `id_vacancy`)
  VALUES('$NameParts[$Num]', '$SurnameParts[$Num]', '$TimeStart[$Num]', '$TimeEnd[$Num]', '$idVac')");

    $Num = $Num + 1; //увеличение индекса массива на единицу 
  }
  
  $connect->close();
 
  