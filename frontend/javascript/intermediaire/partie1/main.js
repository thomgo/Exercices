//
//
//Exercice 1 : Le nombre le plus grand
//
//

var firstNumber = 5;
var secondNumber = 2;
var thirdNumber = 18;
var fourthNumber = 47;

function findBiggestNumber(a, b, c, d) {
  if(a > b && a > c && a > d) {
    console.log(a);
  }
  else if(b > a && b > c && b > d) {
    console.log(b)
  }
  else if(c > a && c > b && c > d) {
    console.log(c);
  }
  else {
    console.log(d);
  }
}

findBiggestNumber(firstNumber, secondNumber, thirdNumber, fourthNumber);

//
//
//Exercice 2 : Conditon d'âge
//
//

var userAge = Number(prompt("Quel âge avez-vous ?"));
if(userAge !== 0) {
  if(userAge <= 0) {
    alert("Rentrez votre vrai âge !");
  }
  if (userAge >= 21) {
    alert("vous pouvez entrer !");
  }
  if(userAge%2 === 0) {
    alert("Votre âge est paire");
  }
  if(Number.isInteger(Math.sqrt(userAge))) {
    alert("Votre âge est un carré");
  }
}
else {
  alert("Vous n'avez rien rentré !")
}

//
//
//Exercice 3 : Le nombre caché
//
//

var hiddenNumber = 20;
var userGuess = null;

while(hiddenNumber !== userGuess) {
  userGuess = Number(prompt("Quel est le nombre caché ?"));
  if(userGuess > hiddenNumber) {
    alert("Trop haut !");
  }
  else if (userGuess < hiddenNumber) {
    alert("Trop bas");
  }
  else {
    alert("Trouvé !");
  }
}

//
//
//Exercice 4 : Des nombres en boucle
//
//

for(var i = 1; i <= 100; i++) {
  console.log(i);
}

//
//
//Exercice 5 : Des nombres en boucle bis
//
//

for(var i = 1; i <= 100; i++) {
  if(i%2 === 0) {
    console.log(i);
  }
}

//
//
//Exercice 6 : Remplir la piscine
//
//

function remplissagePiscine(long, larg, prof, debit) {
  var tempsRemplissage = (long*larg*prof)/debit;
  alert("Le temps de remplissage est de " + tempsRemplissage + " minutes")
}

remplissagePiscine(10, 5, 2, 10);

//
//
//Exercice 7 : Calcule de cercle
//
//

function getPerimetre(rayon) {
  var perimetre = (2 * Math.PI * rayon).toFixed(2);
  console.log("Votre cercle a un perimètre de " + perimetre + " cm");
}

function getAire(rayon) {
  var aire = (Math.sqrt(rayon) * Math.PI).toFixed(2);
  console.log("Votre cercle a une aire de " + aire + " cm carrés");
}

var rayon = Number(prompt("Quel est le rayon de votre cercle ?"));

getPerimetre(rayon);
getAire(rayon);

//
//
//Exercice 8 : Une pyramide
//
//

var pyramide = "\n";
var row  = "";
for(var i = 1; i < 6; i++) {
  row += "*";
  pyramide += row + "\n";
}

console.log(pyramide);

//
//
//Exercice 9 : FIZZ BUZZ
//
//

for(var i = 1; i <= 100; i++) {
  if(i%15 === 0) {
    console.log("FIZZBUZZ");
  }
  else if(i%5 === 0) {
    console.log("BUZZ");
  }
  else if(i%3 === 0) {
    console.log("FIZZ");
  }
  else {
    console.log(i);
  }
}
