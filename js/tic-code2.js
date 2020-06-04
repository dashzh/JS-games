var model = {
    tableSize: 3,
    numPlayer: 1,
    index: 0,
    pole: ["", "", "", "", "", "", "", "", ""],
    changeRoles: function () {
        if (this.numPlayer === 2) {
            this.numPlayer = 1;
        } else {
            this.numPlayer = 2;
        }
    },
    fillPole: function (idCell) {
        if (this.numPlayer === 1) {
            this.pole[idCell] = '1';
        } else {
            this.pole[idCell] = '0';
        }
    },

    LetsGo: function (idCell) {
        veiw.displayMessage(this.numPlayer, "message");
        veiw.displayXitem(idCell);
        this.pole[idCell] = '1'
        this.changeRoles();
        if (controller.printResult()) {
            return;
        }

        let indexComputer = controller.computerStep();
        veiw.displayZero(indexComputer);
        this.pole[indexComputer] = '0'
        this.changeRoles();

    },
    assignOnclick: function () {
        let tds = document.getElementsByTagName("td");
        for (let i = 0; i < tds.length; i++) {
            tds[i].onclick = steps;
        }
    },
}

var veiw = {
    displayMessage: function (msg, id) {
        var message = document.getElementById(id);
        message.innerHTML = msg;
    },
    displayZero: function (location) {
        var cell = document.getElementById(location);
        cell.setAttribute("class", "zero");
    },
    displayXitem: function (location) {
        var cell = document.getElementById(location);
        cell.setAttribute("class", "xitem");
    }
}

var controller = {
    row: 0,
    colum: 0,
    diagonal1: 0,
    diagonal2: 0,
    tableSize: 3,
    allCombs: [[0, 1, 2],
        [3, 4, 5],
        [6, 7, 8],
        [0, 3, 6],
        [1, 4, 7],
        [2, 5, 8],
        [0, 4, 8],
        [6, 4, 2]],
    equal: function (array) {
        return array.every(value => ((value === array[0]) && (value !== '')));
    },
    full: function (array) {
        return array.every(value => (value !== ''));
    },
    compare: function (array) {
        return this.equal([model.pole[array[0]], model.pole[array[1]], model.pole[array[2]]]);
    },
    findEqual: function (array) {
        if ((model.pole[array[0]] === model.pole[array[1]]) && (model.pole[array[0]] === '1') && (model.pole[array[2]] !== '0')) {
            return array[2];
        } else if ((model.pole[array[0]] === model.pole[array[2]]) && (model.pole[array[0]] === '1') && (model.pole[array[1]] !== '0')) {
            return array[1];
        } else if ((model.pole[array[1]] === model.pole[array[2]]) && (model.pole[array[1]] === '1') && (model.pole[array[0]] !== '0')) {
            return array[0];
        } else {
            return null;
        }
    },

    printResult: function () {
        if ((controller.allCombs.some(el => controller.compare(el)))) {
            veiw.displayMessage('Winner is ' + model.numPlayer, "playerNumber");
            return true;
        } else if (controller.full(model.pole)) {
            veiw.displayMessage('Game Over! ', "playerNumber");
            return true;
        }
        return false;
    },

    computerStep: function () {
        let randomNumber;
        let index = null;

        for (let i = 0; i < this.allCombs.length; i++) {
            index = this.findEqual(this.allCombs[i]);
            if (index !== null) {
                model.pole[index] = '0';
                return index;
            }
        }
        if (index == null) {
            do {
                randomNumber = Math.floor(Math.random() * model.pole.length);
                console.log(model.pole[parseInt(randomNumber)]);
            } while (model.pole[parseInt(randomNumber)] !== '');
            return randomNumber;
        }
    }
}

function steps(eventObj) {
    if(model.pole[eventObj.target.id] !== ""){
        return;
    }
    if (controller.printResult()) {
        return;
    }
    model.LetsGo(eventObj.target.id);
    controller.printResult();
}

function init() {
    model.assignOnclick();
}

window.onload = init;