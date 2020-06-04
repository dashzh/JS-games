function compareAnswer(userAnswer, answers) {
    let score = 0;
    // console.log(answers.length);
    for (let i = 0; i < answers.length; i++) {
        if (userAnswer == answers[i]) {
            score++;
            return score;

        } else {
            return score;
        }

    }

}

// function checkAnswers() {
//     let answers = [
//         ['БЕЛКА', 'БЕЛОЧКА'],
//         ['ВЕРБЛЮД'],
//         ['КОЛОКОЛЬЧИК', 'ЦВЕТОК КОЛОКОЛЬЧИК']
//     ]
//     let score = 0;
//     let count = 3;
//     for (let i = 1; i <= count; i++) {
//         let userAnswer = document.getElementById('userAnswer' + i).value;
//         userAnswer = userAnswer.toUpperCase();
//         score += compareAnswer(userAnswer, answers[i - 1]);
//     }
//     console.log(score);
//
// }

/////////////////////////////////////////////////////////////////////////////////
///////угадайка
let tryCount = 0;
let maxTryCount = 2;
let answer = Math.floor(Math.random() * 100);

function readInt(id) {

    let number = document.getElementById(id).value;
    return parseInt(number);
}

function write(text) {
    document.getElementById("inf").innerHTML = text;
}

function hide(id) {
    document.getElementById(id).style.display = "none";
}

function guess() {

    var userAnswer = readInt("userAnswer");
    if (userAnswer == answer) {
        write("<b> Поздрвляю, вы угадали!");
        hide("button");
        hide("userAnswer");
    } else if (tryCount >= maxTryCount) {
        write("Вы проиграли! Правильный ответ: " + answer);
        hide("button");
        hide("userAnswer");
    } else {
        if (userAnswer > answer) {
            write("Вы ввели слишком большое число!");
            tryCount++;
        } else if (userAnswer < answer) {
            write("Вы ввели слишком маленькое число!");
            tryCount++;
        }
    }
}

////////////////////////////////////////////////////////////
let playerNumber = 1;
let answerTwo = Math.floor(Math.random() * 100);
let sumTryCount = 0;
maxTryCount = 6;

function write(text) {
    document.getElementById("twoinf").innerHTML = text;
}

function changePlayer() {
    if (playerNumber == 1) {
        playerNumber = 2;
    } else {
        playerNumber = 1;
    }
}

function guessTwo() {
    sumTryCount++;
    console.log(answerTwo);
    let multiplyUserAnswer = readInt("UsersAnswers");
    if (multiplyUserAnswer == answerTwo) {
        write("<b> Поздрвляю, вы угадали! Выиграл игрок под номером " + playerNumber);
        hide("buttonTwo");
        hide("UsersAnswers");
    } else if (sumTryCount >= maxTryCount) {
        write("Вы проиграли! Правильный ответ: " + answerTwo);
        hide("button");
        hide("UsersAnswers");
    } else {
        if (multiplyUserAnswer > answerTwo) {
            changePlayer();
            write("Вы ввели слишком большое число! <br> Ходит игрок под номером " + playerNumber);
            // sumTryCount++;
        } else if (multiplyUserAnswer < answerTwo) {
            changePlayer();
            write("Вы ввели слишком маленькое число! <br> Ходит игрок под номером " + playerNumber);
            // sumTryCount++;
        }
    }
}

////////////////////////////////////////////////////////////////////////////
//пароли
function write(id, info) {
    document.getElementById(id).innerHTML = info;
}

function hide(id) {
    document.getElementById(id).style.display = "none";
}

function generatePassword() {
    let userAnswer = document.getElementById('userNumber').value;
    if ((userAnswer <= 0) || (userAnswer > 40) || (isNaN(userAnswer))) {
        let text = "Input number <= 40";
        write("help", text);
    } else {
        hide("help");
        let array = ["q", "w", "e", "r", "t", "y", "u", "i", "o", "p", "a", "s", "d", "f", "g", "h", "j", "k", "l", "z", "x", "c", "v", "b", "n", "m", "Q", "W", "E", "R", "T", "Y", "U", "I", "O", "P", "A", "S", "D", "F", "G", "H", "J", "K", "L", "Z", "X", "C", "V", "B", "N", "M", "1", "2", "3", "4", "5", "6", "7", "8", "9", "0"];
        var password = '';
        for (let i = 0; i < userAnswer; i++) {
            var number = array[Math.floor(Math.random() * array.length - 1)];
            password += number;
        }
        write("yourPassword", password);
    }

}