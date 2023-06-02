<?php
    session_start();
    require_once 'connect.php';

    $login = filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING);
 
    $password = filter_var(trim($_POST['password']),         
    FILTER_SANITIZE_STRING);

    $result = mysqli_query($connect, "SELECT `id` FROM  `recruiters` WHERE `login` = '$login'");
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result); 
    if($count==1){
        $Chrow = $row['id']; 
        // echo $Chrow;
            $passDB = mysqli_query($connect, "SELECT `password` FROM  `recruiters` WHERE `id`= '$Chrow' ");
            $row = mysqli_fetch_array($passDB, MYSQLI_ASSOC);
            $Chpass = $row['password'];
            // echo $Chpass;
                if(password_verify($password, $Chpass)){
                    // die('Пароль правильный');
                    $connect->close();
                    $_SESSION['idUser'] = $Chrow; // передача доступа другим файлам php к номеру id 
                    header("Location: /HTML/account.php");
                } else {
                    die('Неверный пароль!!!');
                }
            // print_r($passDB);
            exit();
    } else {
        // print_r($row);
        die('Неправильный логин!');
        exit();
    }
?>