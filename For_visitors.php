<?php
require 'header.php'
?>
<!DOCTYPE html>
<html lang="ru">
<body>
    <style>
        .grid * {
            box-sizing: border-box;
        }

        .grid {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr;
            column-gap: 30px;
            row-gap: 30px;
            padding: 20px 0;
        }
        /* Кол-во блоков на разных экранах */
        @media only screen and (max-width: 1200px) {
            .grid {
                grid-template-columns: 1fr 1fr 1fr;
            }
        }

        @media only screen and (max-width: 900px) {
            .grid {
                grid-template-columns: 1fr 1fr;
            }
        }

        @media only screen and (max-width: 600px) {
            .grid {
                grid-template-columns: 1fr;
            }
        }

        .grid-item {
            box-shadow: 0 2px 5px rgba(0,0,0,0.2), 0 4px 6px rgba(0,0,0,0.2);
            transition: box-shadow .3s;
            border-radius: 6px;
            width: 100%;
            height: 100%;
        }

            .grid-item .image {
                width: 100%;
                height: auto;
                border-radius: 4px;
                overflow: hidden;
            }

            .grid-item .info {
                position: relative;
                height: calc(100% - 200px);
                padding: 16px 14px 80px 14px;
            }

            .grid-item:hover {
                box-shadow: 0 4px 12px rgba(0,0,0,0.2), 0 16px 20px rgba(0,0,0,0.2);
            }

            .grid-item .image img {
                transition: transform 280ms ease-in-out;
                display: block;
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            .grid-item:hover .image img {
                transform: scale(1.1);
            }

        .info h3 {
           
            color: rgb(23, 99, 79);
            font-size: 24px;
            font-weight: normal;
            margin: 0;
            text-align: center;
        }

        .info-text p {
            font-size: 15px;
            text-align: center;

            line-height: 20px;
            font-family: Verdana, sans-serif;
            margin-bottom: 10px;
        }

            .info-text p:last-child {
                margin-bottom: 0;
            }

        .grid-item .button-wrap {
            display: block;
            width: 100%;
            position: absolute;
            bottom: 14px;
            left: 0;
            text-align: center;
        }
        /* Кнопка подробнее */
        .atuin-btn {
            display: inline-flex;
            text-decoration: none;
            position: relative;
            font-size: 20px;
            border-radius: 5px;
            line-height: 20px;
            padding: 12px 30px;
            color: #FFF;
            font-weight: bold;
            text-transform: uppercase;
            font-family: 'Roboto Condensed', Тahoma, sans-serif;
            background: rgb(23, 99, 79);
            cursor: pointer;
            border: 2px solid rgb(23, 99, 79);
        }

            .atuin-btn:hover,
            .atuin-btn:active,
            .atuin-btn:focus {
                color: #FFF;
            }

            .atuin-btn:after,
            .atuin-btn:before {
                position: absolute;
                height: 4px;
                left: 50%;
                background: rgb(23, 99, 79);
                bottom: -6px;
                content: "";
                transition: all 280ms ease-in-out;
                width: 0;
            }

            .atuin-btn:before {
                top: -6px;
            }

            .atuin-btn:hover:after,
            .atuin-btn:hover:before,
            .atuin-btn:active:after,
            .atuin-btn:active:before,
            .atuin-btn:focus:after,
            .atuin-btn:focus:before {
                width: 100%;
                left: 0;
            }
    </style>

    <div class="services">
        <h2>Наши услуги</h2>
        <section class="grid">
            <article class="grid-item">
                <div class="image">
                    <img src="images/date.jpg" />
                </div>
                <div class="info">
                    <h3>Свидания в ботаническом саду</h3>
                    <div class="info-text">
                        <p>Предлагаем на выбор три формата свиданий</p>
                    </div>
                    <div class="button-wrap">
                        <a class="atuin-btn" href="Dates.php">Подробнее</a>
                    </div>
                </div>
            </article>

            <!-- Еще блоки -->

            <article class="grid-item">
                <div class="image">
                    <img src="images/masterclass.jpg" />
                </div>
                <div class="info">
                    <h3>Творческие программ</h3>
                    <div class="info-text">
                        <p>Занимаемся творчеством в Зеленой лаборатории Ботанического сада!</p>
                    </div>
                    <div class="button-wrap">
                        <a class="atuin-btn" href="Creative_programs.php">Подробнее</a>
                    </div>
                </div>
            </article>
            <article class="grid-item">
                <div class="image">
                    <img src="images/walks.jpg" />
                </div>
                <div class="info">
                    <h3>Прогулки</h3>
                    <div class="info-text">
                        <p>Прогулки по саду (познавательный маршрут +любительская съёмка)</p>
                    </div>
                    <div class="button-wrap">
                        <a class="atuin-btn" href="Walks.php">Подробнее</a>
                    </div>
                </div>
            </article>
            <article class="grid-item">
                <div class="image">
                    <img src="images/fotoset.jpg" />
                </div>
                <div class="info">
                    <h3>Фотосессия</h3>
                    <div class="info-text">
                        <p>Формат: фотосессия на коллекциях под открытым небом!</p>
                    </div>
                    <div class="button-wrap">
                        <a class="atuin-btn" href="Photoshoots.php">Подробнее</a>
                    </div>
                </div>
            </article>
        </section>
        <!--<div>-->
        <!--<img src="images/walks.jpg" align="left" />
                <h3>Прогулки</h3>
                <p>Прогулки по саду (познавательный маршрут + любительская съёмка)</p>
                <a href="Walks.html" class="button">Подробнее </a>
            </div>
            <div>
                <img src="images/fotoset.jpg" align="left" />
                <h3>Фотосессия</h3>
                <p>Формат: фотосессия на коллекциях под открытым небом!</p>
                <a href="Photoshoots.html" class="button">Подробнее </a>
            </div>
            <div>
                <img src="images/masterclass.jpg" align="left" />
                <h3>Творческие программы</h3>
                <p>Занимаемся творчеством в Зеленой лаборатории Ботанического сада!</p>
                <a href="Creative_programs.php" class="button">Подробнее </a>
            </div>
             <div>
                <img src="images/date.jpg" align="left" />
                <h3>Свидания в ботаническом саду</h3>
                <p>Предлагаем на выбор три формата свиданий</p>
                    <a href="Dates.php" class="button"> Подробнее</a>
            </div>
        </div>-->
        </div>
        <div class="behaviorrules">
            <h2>Правила поведения в ботаническом саду</h2>
            <span>У нас ЗАПРЕЩАЕТСЯ:</span><br />
            <ul>
                <li> Заходить на территории, где стоит табличка "проход закрыт" или "доступ только с экскурсоводом"!</li>
                <li> Приносить с собой мячи и другой спортивный инвентарь, в том числе: велосипеды, самокаты, санки, ледянки и т.д. (их придется оставить у входа), лопатки и формочки, мелки, воздушные шарики. Имеются в виду все предметы и транспортные средства, которыми управляет сам ребенок, поэтому детские коляски – не в счет.</li>
                <li> Играть в активные игры и шуметь. Для игр в нашем городе есть множество более подходящих и специально оборудованных мест. Просим уважать отдых других посетителей!</li>
                <li> Трогать и рвать растения, их плоды, цветы, собирать семена. Ботанический сад — живой музей. Просим относиться к растениям как к его экспонатам.</li>
                <li> Употреблять в пищу любые части растений. Съедобные на вид плоды могут оказаться опасными для здоровья, а незнакомое вам растение — просто ядовитым.</li>
                <li> Спускать животных с рук (собака должна находится на руках или в специальной сумке).</li>
                <li> Мусорить. В саду имеются урны, но будет еще лучше, если вы унесете свой мелкий мусор с собой.</li>
                <li> Залезать в водоемы, бросать что-либо в них.</li>
                <li> Кормить, трогать и беспокоить обитателей сада. Живущие у нас кряквы — не домашние утки, и хлеб для них — чуждое питание. Черепахи кусаются и могут быть переносчиками заболеваний.</li>
                <li> Двигать скамейки, вставать на них ногами.</li>
                <li> Переставлять таблички, передвигать камушки, ракушки, палочки и т.п.</li>
                <li> Заходить с детскими колясками в оранжереи.</li>
                <li> Приходить в сад с большими сумками и пакетами. Случаи воровства растений вынуждают нас ввести это ограничение.</li>
                <li> Устраивать пикники, распивать спиртные напитки, в том числе пиво, а также курить на территории сада.</li>
                <li> Запускать любые радиоуправляемые устройства (три-, квадро-, пента-, гексакоптеры, вертолёты, машинки, лодки и т.д.).</li>
            </ul>
            <span>❗️ За несоблюдение правил, охрана сада выводит нарушителя за пределы сада. Серьезные правонарушения влекут за собой административную и уголовную ответственность!</span><br />
        </div>
    <?php
    require 'Footer.php';
    ?>
</body>
</html>