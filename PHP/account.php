<?php
    session_start();
    require_once 'connect.php';

    $user = $_SESSION['idUser'];
    $result = mysqli_query($connect, "SELECT `name`, `surname` FROM  `recruiters` WHERE `id` = '$user'");
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    $NameUser = $row['name'];
    $SurnameUser = $row['surname'];

    $result = mysqli_query($connect, "SELECT `work_days` FROM  `recruiters` WHERE `id` = '$user'");
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    $DaysUser = $row['work_days'];
    $DaysUser = explode(" ", $DaysUser);

    $result = mysqli_query($connect, "SELECT `work_time_start` FROM  `recruiters` WHERE `id` = '$user'");
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    $TimeUserStart = date('h:i', strtotime($row['work_time_start']));

    
    $result = mysqli_query($connect, "SELECT `work_time_end` FROM  `recruiters` WHERE `id` = '$user'");
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    $TimeUserEnd = date('h:i', strtotime($row['work_time_end']));

?>