<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <!--    <script>-->
    <!--        function compareAnswer(userAnswer, answers) {-->
    <!--            let score = 0;-->
    <!--            // console.log(answers.length);-->
    <!--            for (let i = 0; i < answers.length; i++) {-->
    <!--                if (userAnswer == answers[i]) {-->
    <!--                    score++;-->
    <!--                    return score;-->
    <!---->
    <!--                } else {-->
    <!--                    return score;-->
    <!--                }-->
    <!---->
    <!--            }-->
    <!---->
    <!--        }-->
    <!---->
    <!--        function checkAnswers() {-->
    <!--            let answers = [-->
    <!--                ['БЕЛКА', 'БЕЛОЧКА'],-->
    <!--                ['ВЕРБЛЮД'],-->
    <!--                ['КОЛОКОЛЬЧИК', 'ЦВЕТОК КОЛОКОЛЬЧИК']-->
    <!--            ]-->
    <!--            let score = 0;-->
    <!--            let count = 3;-->
    <!--            for (let i = 1; i <= count; i++) {-->
    <!--                let userAnswer = document.getElementById('userAnswer' + i).value;-->
    <!--                userAnswer = userAnswer.toUpperCase();-->
    <!--                score += compareAnswer(userAnswer, answers[i - 1]);-->
    <!--            }-->
    <!--            console.log(score);-->
    <!---->
    <!--        }-->
    <!--    </script>-->
    <!---->
    <!--    <script>-->
    <!--        ///////угадайка-->
    <!--        let tryCount = 0;-->
    <!--        let maxTryCount = 2;-->
    <!--        let answer = Math.floor(Math.random() * 100);-->
    <!---->
    <!--        function readInt(id) {-->
    <!---->
    <!--            let number = document.getElementById(id).value;-->
    <!--            return parseInt(number);-->
    <!--        }-->
    <!---->
    <!--        function write(text) {-->
    <!--            document.getElementById("inf").innerHTML = text;-->
    <!--        }-->
    <!---->
    <!--        function hide(id) {-->
    <!--            document.getElementById(id).style.display = "none";-->
    <!--        }-->
    <!---->
    <!--        function guess() {-->
    <!---->
    <!--            var userAnswer = readInt("userAnswer");-->
    <!--            if (userAnswer == answer) {-->
    <!--                write("<b> Поздрвляю, вы угадали!");-->
    <!--                hide("button");-->
    <!--                hide("userAnswer");-->
    <!--            } else if (tryCount >= maxTryCount) {-->
    <!--                write("Вы проиграли! Правильный ответ: " + answer);-->
    <!--                hide("button");-->
    <!--                hide("userAnswer");-->
    <!--            } else {-->
    <!--                if (userAnswer > answer) {-->
    <!--                    write("Вы ввели слишком большое число!");-->
    <!--                    tryCount++;-->
    <!--                } else if (userAnswer < answer) {-->
    <!--                    write("Вы ввели слишком маленькое число!");-->
    <!--                    tryCount++;-->
    <!--                }-->
    <!--            }-->
    <!--        }-->
    <!---->
    <!--        ////////////////////////////////////////////////////////////-->
    <!--        let playerNumber = 1;-->
    <!--        let answerTwo = Math.floor(Math.random() * 100);-->
    <!--        let sumTryCount = 0;-->
    <!--        maxTryCount = 6;-->
    <!---->
    <!--        function write(text) {-->
    <!--            document.getElementById("twoinf").innerHTML = text;-->
    <!--        }-->
    <!---->
    <!--        function changePlayer() {-->
    <!--            if (playerNumber == 1) {-->
    <!--                playerNumber = 2;-->
    <!--            } else {-->
    <!--                playerNumber = 1;-->
    <!--            }-->
    <!--        }-->
    <!---->
    <!--        function guessTwo() {-->
    <!--            sumTryCount++;-->
    <!--            console.log(answerTwo);-->
    <!--            let multiplyUserAnswer = readInt("UsersAnswers");-->
    <!--            if (multiplyUserAnswer == answerTwo) {-->
    <!--                write("<b> Поздрвляю, вы угадали! Выиграл игрок под номером " + playerNumber);-->
    <!--                hide("buttonTwo");-->
    <!--                hide("UsersAnswers");-->
    <!--            } else if (sumTryCount >= maxTryCount) {-->
    <!--                write("Вы проиграли! Правильный ответ: " + answerTwo);-->
    <!--                hide("button");-->
    <!--                hide("UsersAnswers");-->
    <!--            } else {-->
    <!--                if (multiplyUserAnswer > answerTwo) {-->
    <!--                    changePlayer();-->
    <!--                    write("Вы ввели слишком большое число! <br> Ходит игрок под номером " + playerNumber);-->
    <!--                    // sumTryCount++;-->
    <!--                } else if (multiplyUserAnswer < answerTwo) {-->
    <!--                    changePlayer();-->
    <!--                    write("Вы ввели слишком маленькое число! <br> Ходит игрок под номером " + playerNumber);-->
    <!--                    // sumTryCount++;-->
    <!--                }-->
    <!--            }-->
    <!--        }-->
    <!---->
    <!--    </script>-->
    <!--    <script>-->
    <!--        //пароли-->
    <!--        function write(id, info) {-->
    <!--            document.getElementById(id).innerHTML = info;-->
    <!--        }-->
    <!---->
    <!--        function hide(id) {-->
    <!--            document.getElementById(id).style.display = "none";-->
    <!--        }-->
    <!---->
    <!--        function generatePassword() {-->
    <!--            let userAnswer = document.getElementById('userNumber').value;-->
    <!--            if ((userAnswer <= 0) || (userAnswer > 40) || (isNaN(userAnswer))) {-->
    <!--                let text = "Input number <= 40";-->
    <!--                write("help", text);-->
    <!--            } else {-->
    <!--                hide("help");-->
    <!--                let array = ["q", "w", "e", "r", "t", "y", "u", "i", "o", "p", "a", "s", "d", "f", "g", "h", "j", "k", "l", "z", "x", "c", "v", "b", "n", "m", "Q", "W", "E", "R", "T", "Y", "U", "I", "O", "P", "A", "S", "D", "F", "G", "H", "J", "K", "L", "Z", "X", "C", "V", "B", "N", "M", "1", "2", "3", "4", "5", "6", "7", "8", "9", "0"];-->
    <!--                var password = '';-->
    <!--                for (let i = 0; i < userAnswer; i++) {-->
    <!--                    var number = array[Math.floor(Math.random() * array.length - 1)];-->
    <!--                    password += number;-->
    <!--                }-->
    <!--                write("yourPassword", password);-->
    <!--            }-->
    <!---->
    <!--        }-->
    <!--    </script>-->
</head>
<body>
<div class="container">
    <header>
        <?php
        include "menu.php";
        ?>
    </header>

    <!-- <header>
        <nav>
            <a href="#" class="menu_item">Главная</a>
            <a href="task1.html" class="menu_item">Загадки</a>
            <a href="task2.html" class="menu_item">Генерация паролей</a>
            <a href="task3.html" class="menu_item">Угадайка</a>
        </nav>
    </header> -->

    <main>
        <div class="wrapper">
            <div class="inner">
                <div class="photo">
                    <div class="pacman">
                        <!--                    <img src="image/fortnite-wallpapers-pack-21291-2.jpg" alt="photo">-->
                        <div class="pacman-eye"></div>
                        <div class="pacman-mouth"></div>
                        <div class="pacman-food"></div>
                    </div>
                </div>
                <div class="info">
                    <div class="round1"></div>
                    <div class="round2"></div>
                    <h1>Hi!</h1>
                    <p>На данном сайте размещены пара-тройка "игр" на языке JavaScript</p>
                    <?php
                    include "menu.php";
                    ?>
                    <!--                <nav>-->
                    <!--                    <a href="#" class="menu_item">Главная</a>-->
                    <!--                    <a href="#" class="menu_item">Загадки</a>-->
                    <!--                    <a href="#" class="menu_item">Генерация паролей</a>-->
                    <!--                    <a href="#" class="menu_item">Угадайка</a>-->
                    <!--                </nav>-->
                </div>
            </div>

            <details>
                <summary>Самыепростые штуки с курсов</summary>
                <div class="guess">
                    <div class="box">
                        <?php
                        if (isset($_GET["userAnswer1"]) && isset($_GET["userAnswer2"]) && isset($_GET["userAnswer3"])) {
                            $score = 0;

                            $userAnswer = $_GET["userAnswer1"];
                            if ($userAnswer == 'белка' || $userAnswer == 'белочка') {
                                $score++;
                            }
                            $userAnswer = $_GET["userAnswer2"];
                            if ($userAnswer == 'верблюд') {
                                $score++;
                            }
                            $userAnswer = $_GET["userAnswer3"];
                            if ($userAnswer == 'колокольчик') {
                                $score++;
                            }
                            if ($score == 1) {
                                echo "ВЫ УГАДАЛИ " . $score . " ЗАГАДКУ";
                            } elseif ($score > 1) {
                                echo "ВЫ УГАДАЛИ " . $score . " ЗАГАДКИ";
                            } elseif ($score == 0) {
                                echo "ВЫ УГАДАЛИ " . $score . " ЗАГАДОК";
                            }

                        }

                        ?>
                        <h2>Игра в загадки</h2>
                        <form method="GET">
                            <p class="quastion">По деревьям скок-скок, и орешки щёлк-щёлк.</p>
                            <input type="text" name="userAnswer1">
                            <p class="quastion">Зверь я горбатый, и нравлюсь ребятам</p>
                            <input type="text" name="userAnswer2">
                            <p class="quastion">Синенький звонок висит, никогда он не звенит.</p>
                            <input type="text" name="userAnswer3">
                            <br>
                            <input type="submit" value="SEND" id="button"></input>
                        </form>
                    </div>

                    <div class="box">
                        <h2>Генератор паролей</h2>
                        <div class="box">
                            <p>Введите число от 1 до 40 </p>
                            <p id="help"></p>
                            <input type="text" id="userNumber">
                            <br>
                            <a href="#" id="button" onclick="generatePassword();">SEND</a>
                            <p id="yourPassword"></p>
                        </div>
                    </div>
                </div>
                <div class="guess">

                    <div class="box">
                        <h2>Игра угадайка</h2>
                        <p>Угадай число от 0 до 100</p>
                        <p id="inf"></p>
                        <input type="text" id="userAnswer">
                        <br>
                        <a href="#" onclick="guess();" id="button">SEND</a>
                    </div>
                    <div class="box">
                        <h2>Игра угадайка для двоих</h2>

                        <p>Угадате число от 0 до 100 </p>
                        <p id="twoinf"> Ходит игрок под номером 1</p>
                        <input type="text" id="UsersAnswers">
                        <br>
                        <a href="#" onclick="guessTwo();" id="buttonTwo">SEND</a>
                    </div>
                </div>
            </details>
        </div>
    </main>
</div>
<div class​=​"clr"​></div>
<footer>
    Copyright &copy; <?php echo date("Y"); ?>
</footer>
<script type="text/javascript" src="js/simple.js"></script>
</body>
</html>