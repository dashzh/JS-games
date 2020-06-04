var model = {
    tableSize: 3,
    numPlayer: 2,
    firstChar: 0,
    secondChar: 0,
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
        this.changeRoles();
        veiw.displayMessage(this.numPlayer, "message");
        this.fillPole(idCell);
        if (this.numPlayer === 1) {
            veiw.displayXitem(idCell);
        } else {
            veiw.displayZero(idCell);
        }

    },
    smth: function () {
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
}

function steps(eventObj) {
    if(model.pole[eventObj.target.id] !== ""){
        return;
    }
    // document.getElementById(eventObj.target.id).removeAttribute("onclick");
    console.log(parseInt(eventObj.target.id));
    if (controller.full(model.pole)) {
        veiw.displayMessage('Game Over! ', "playerNumber");
        return;
    } else if ((controller.allCombs.some(el => controller.compare(el)))) {
        veiw.displayMessage('Winner is ' + model.numPlayer, "playerNumber");
        return;
    }
    var step = eventObj.target;
    var idCell = step.id;
    model.LetsGo(idCell);
    if (controller.full(model.pole)) {
        veiw.displayMessage('Game Over! ', "playerNumber");
    } else if ((controller.allCombs.some(el => controller.compare(el)))) {
        veiw.displayMessage('Winner is ' + model.numPlayer, "playerNumber");
    }
}

function init() {
    model.smth();
}

window.onload = init;