//
//
// Exercice 1
//
//

var board = "\n";

for(var i=1; i <= 8; i++) {
  for(var j=1; j <= 16; j++) {
    if(j%2===0) {
      board += " ";
    }
    else {
      board += "#";
    }
  }
  board += "\n";
}

console.log(board);

//
//
// Exercice 2
//
//

var matrix = "\n";

for(var i=1; i <= 4; i++) {
  for(var j=1; j <= 4; j++) {
    if(i === j) {
      matrix += "1 \n";
    }
    else {
      matrix += "0 \n";
    }
  }
  matrix += "-------- \n";
}

console.log(matrix);

//
//
// Exercice 3
//
//

function isOdd(amont) {
  amont = Math.round(Number(amont));
  if(amont%2 === 0) {
    console.log(true);
  }
  else {
    console.log(false);
  }
}

//
//
// Exercice 4
//
//

function factorielle(value) {
  if(Number.isInteger(value)) {
     var result = 1;
     for(var i=1; i < value; i++) {
     result += result * i;
    }
    console.log(result);
  }
  else {
    console.log("erreur");
  }
}

//
//
// Exercice 5
//
//

function toUnderscore(string) {
  if( typeof string === "string") {
    string = string.replace(/-/g, "_");
    console.log(string);
  }
  else {
    console.log("Attention il faut passer une string en argument");
  }
}

//
//
// Exercice 6
//
//

var shoppingList = [
  "pâtes",
  "riz",
  "viande",
  "coca",
  "haricots"
];

console.log("Il faut acheter : " + shoppingList[0]);
console.log("Il faut acheter : " + shoppingList[shoppingList.length - 1]);
console.log("Il faut acheter : " + shoppingList[2]);

//
//
// Exercice 7
//
//

var people = [
  [
    "Paul",
    "Homme",
    44
  ],
  [
    "Stephanie",
    "Femme",
    32
  ],
  [
    "Marc",
    "Homme",
    24
  ]
];

function showPeople(arrayPeople) {
  for(var i = 0; i < arrayPeople.length; i++) {
    var singlePeople = arrayPeople[i];
    for(var j = 0; j < singlePeople.length; j++ ) {
      console.log(singlePeople[j]);
    }
  }
}

  showPeople(people);

//
//
// Exercice 8
//
//

var arrayOfNumbers = [12, 45, 190, 150, 8, 21];

function findBiggestNumber(numbers) {
  var biggestNumber = 0;
  for(var i = 0; i<numbers.length; i++) {
    if(numbers[i] > biggestNumber) {
      biggestNumber = numbers[i];
    }
  }
  console.log(biggestNumber);
}

findBiggestNumber(arrayOfNumbers);


//
//
// Exercice 9
//
//

var tasks = [];

var task;

while(task !== "fin") {
  task = prompt("Que devez-vous faire ?");
  tasks.push(task);
}

for(var i=0; i < tasks.length; i++) {
  console.log(tasks[i]);
}

//
//
// Exercice 10
//
//
