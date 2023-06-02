<?php
    include "../PHP/vacancy.php"; //подключение php файла
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
    <link rel="stylesheet" href="/CSS/vacancy.css">
</head>
<body>
        <header> 
            <div class="header_section">
                <div class="header_item"> 
                    <a href="/HTML/account.php"><img src="/design/Images/LogoDark.png" alt="Логотип" class="headerlogo"></a>
                </div>
            </div>

            <div class="header_section">


                    <div class="header_item headerButton"><a href="/index.html">Выйти </a></div>
            </div>    
        </header> 

        <section class="sec-1">

                <!-- НАзвание вакансии -->
                 <h1> <?php echo $NameVac1; ?></h1>

                 <!-- Описание вакансии -->
                 <p class="about_vac"> <?php echo $AboutVac1; ?> </p> 

                     <div class="vacancies">
                        <div class="vacancy Title_r">
                            <p class="time-title"> <?php  echo $NameUser.' '.$SurnameUser; ?></p>
                        </div>
                     </div>
    
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
                                <p class="text_time">Конец: <output name="end_time"></output> <?php echo $TimeUserEnd ?> </p>
                            </div>
                        </div>
                    </div>
                </div> 

        </section>

        <section class="sec-2">

                <h1 class="subtitle">Дополнительные участники собеседования</h1>
 
                <!-- Первый участник --> 
                <!-- <div class="vacancies">
                    <div class="vacancy">
                        <p class="time-title">Виктория Иванова</p>
                    </div>
                    <div class="Number_time">
                            <p class="text_time"> Свободное время: <output name="start_time">15:00</output> - <output name="end_time">16:00</output></p>
                    </div>
                </div> -->
        </section> 

        <section class="sec-3">
                    <h1 class="subtitle">Кандидаты</h1>

                    <!-- <div class="vacancies">
                        <div class="vacancy Title_r">
                            <p class="time-title">Александр Васильев</p>
                        </div>

                        <div class="vacancy">
                            <p>Дата и время: <output>15.05.2023</output> <output name="start_time">15:00</output>-<output name="end_time">15:30</output></p>

                            <div class="download_btn">
                                <a href="#" download><input type="submit" class="btn down " value="⇪ тест"></a>
                                <a href="#" download><input type="submit" class="btn down" value="⇪ резюме"></a>
                            </div>
                        </div>

                        <div><p> Email: <output name="start_time">Alexandr_vasiliev@gmail.com</output></p></div>

                        <div class="slider"> 
                            <p>Статус кандидата: 
                                <input type="range" id="fader" min="0" max="10" step="1" value="6" oninput="outputUpdate(value)">
                                <output for="fader" id="volume"></output>
                            </p>
                        </div>

                        <script type="text/javascript">
                            function outputUpdate(vol) {
                                var output = document.querySelector('#volume');
                                output.value = vol;
                                output.style.left = vol - 20 + 'px'; 
                            }
                        </script>
 
                        <div>
                            <p><label for="comment">Комментарий: </label></p>
                            <input type="text" class="BG-input comment" id="comment" required>
                        </div>
                        <input type="submit" class="btn save-btn" value="Сохранить" required>

                        <div>
                            <p><label for="comment">Дополнительные сведения о кандидате: </label></p>
                            <input type="text" class="BG-input comment" id="comment" required>
                        </div>
                        <input type="submit" class="btn save-btn" value="Сохранить" required>

                    </div> 
                     </div> -->

                     <button type="button" class="btn copy-btn CopyLink">Скопировать ссылку</button>

        </section>
        
        <footer>
            <div class="footer_items">
                <div>
                    <a href="/HTML/account.php"><img src="/design/Images/LogoLight.png" alt="Логотип" class="headerlogo"></a>
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

        <script src="/JS/vacancy.js"></script>
</body>
</html>