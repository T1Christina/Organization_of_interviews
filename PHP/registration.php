<?php
   require_once 'connect.php';

   $name = filter_var(trim($_POST['name']),
   FILTER_SANITIZE_STRING); 

   $surname = filter_var(trim($_POST['surname']),
   FILTER_SANITIZE_STRING); 

   $login = filter_var(trim($_POST['login']),
   FILTER_SANITIZE_STRING);

   $email = filter_var(trim($_POST['email']),
   FILTER_SANITIZE_STRING);

   $password = filter_var(trim($_POST['password']),
   FILTER_SANITIZE_STRING);
   
   $repeat_pass = filter_var(trim($_POST['repeat_pass']),
   FILTER_SANITIZE_STRING);

   $days = $_POST['day'];
   $allData = implode($days, ', ');

   $time_start = $_POST['time_start'];
   $time_end = $_POST['time_end'];

   $dublicate = mysqli_query($connect, "SELECT * FROM  `recruiters` WHERE `login` = '$login' OR `email` = '$email'");
   if(mysqli_num_rows($dublicate) > 0) {
      echo "Логин или почта уже заняты";
      Exit();
   }
 
   if(mb_strlen($name) < 3 || mb_strlen($name) > 50) {
      echo "Недопустимая длина имени"; 
      exit();
   } else if(mb_strlen($surname) < 3 || mb_strlen($surname) > 50) {
      echo "Недопустимая длина фамилии";
      exit();
   } else if(mb_strlen($login) < 5 || mb_strlen($login) > 90) {
      echo "Недопустимая длина логина";
      exit();
   }  else if(mb_strlen($email) < 2 || mb_strlen($email) > 90) {
      echo "Недопустимая длина email";
      exit();
   }  else if(mb_strlen($password) < 8 || mb_strlen($password) > 16) {
      echo "Недопустимая длина пароля";
      exit();
   }

   if ($password == $repeat_pass) {
      // => account.html
   } else {
      die('Пароли не совпадают');
   }

   $password = password_hash($password, PASSWORD_DEFAULT);

   $connect->query("INSERT INTO `recruiters` (`name`, `surname`, `login`, `email`, `password`, `work_days`, `work_time_start`, `work_time_end`)
   VALUES('$name', '$surname', '$login', '$email', '$password', '$allData', '$time_start', '$time_end')");

   $connect->close();

   header('Location: /HTML/account.html');
?>   