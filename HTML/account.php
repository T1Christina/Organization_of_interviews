<?php
    include "../PHP/account.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ecruitment</title>
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700;800;900;1000&display=swap');
    </style>

    <link rel="shortcut icon" href="/design/Images/R.png" type="image/png">
    <link rel="stylesheet" href="/CSS/style.css">
    <link rel="stylesheet" href="/CSS/pages.css"> 
    <link rel="stylesheet" href="/CSS/account.css">
</head>
<body>
        <header>  
            <div class="header_section">
                <div class="header_item"> 
                    <a href="/HTML/account.html"><img src="/design/Images/LogoDark.png" alt="Логотип" class="headerlogo"></a>
                </div> 
            </div>

            <div class="header_section">
                    <div class="header_item headerButton"><a href="/index.html">Выйти </a></div>
            </div>    
        </header>

        <section class="sec-1">
                <h1> 
                    <?php 
                        echo $NameUser.' '.$SurnameUser;
                    ?>
                </h1> 

                <h1 class="subtitle">Расписание</h1>      
                <div class="Container_time">
                    <div class="days">
                        <p class="time-title" id="selectDays">Рабочие дни:</p>
                        <p  id="selectDay"><?php echo $DaysUser[0]; ?></p>
                        <p id="selectDay"><?php echo $DaysUser[1]; ?></p>
                        <p id="selectDay"><?php echo $DaysUser[2]; ?></p>
                        <p id="selectDay"><?php echo $DaysUser[3]; ?></p>
                        <p id="selectDay"><?php echo $DaysUser[4]; ?></p>
                        <p id="selectDay"><?php echo $DaysUser[5]; ?></p>
                        <p id="selectDay"><?php echo $DaysUser[6]; ?></p> 
                    </div>

                    <div>
                        <p class="time-title">Свободное время:</p>
                        <div class="time">
                            <div>
                                <p class="text_time">Начало:<output name="start_time"><?php echo $TimeUserStart ?></output></p>
                            </div>

                            <div>
                                <p class="text_time">Конец: <output name="end_time"><?php echo $TimeUserEnd ?></output></p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- При нажатии "Изменить", открывается форма для ввода данных (дни и время), кнопка "Изменить" меняется на "Сохранить"-->
                <button class="btn btn-2" onclick="ChangeWork()">Изменить</button>

                 <!-- При нажатии "Сохранить", сохраняются новые данные-->
                <!-- <input type="submit" class="btn" value="Сохранить" required> -->
                
                <h1 class="subtitle">Вакансии</h1> 
                
                <div class="vacancies">
                    <div class="vacancy">
                        <div class="symbols cross"></div>
                        <a href="/HTML/vacancy.html" class="link_Vac"><p>Название вакансии</p></a>
                        <div class="symbols copy"></div>

                    </div>
                    <div class="plus">
                        <a href="/HTML/add-job.html"><img src="/design/Images/Symbols/Add.png" alt="Создать карточку вакансии" class="adding"></a>
                    </div>
                </div>
        </section>
        
        <footer>
            <div class="footer_items">
                <div>
                    <a href="/HTML/account.html"><img src="/design/Images/LogoLight.png" alt="Логотип" class="headerlogo"></a>
                </div>
                <div class="footer_inf">
                    <div class="footer_item footer_cont">
                        <h2>
                            Контакты
                        </h2>
                        <p>+ 7 965 823 52 67</p>
                    </div>
                </div>
            </div>
        </footer>

        <script src="/JS/account.js"> 
        </script>
    </body>
</html>