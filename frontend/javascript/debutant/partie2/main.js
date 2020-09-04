//
//
//Exercice 1 True ou false
//
//

var un = "";
var deux = "test";

if (un.length === 0) {
  console.log (false);
}
else {
  console.log(true);
}

if (deux.length === 0) {
  console.log (false);
}
else {
  console.log(true);
}

//
//
//Exercice 2 Calculer mon âge
//
//

// Get the current date and the birthDate by the user
var currentDate =  prompt("En quelle année sommes-nous ?");
var birthDate = prompt("Quand êtes-vous né ?");

// Convert the strings into numbers
currentDate =  Number(currentDate);
birthDate = Number(birthDate);

// Count the age of the user and show it
var age = currentDate - birthDate;
alert("Vous avez " + age + " ans");

// Get the age of the neighbour and convert it to number
var nextAge  = prompt("Quelle âge a la personne à côté de vous ?");
nextAge = Number(nextAge);

// Count the sum of the two ages and show it
age = age + nextAge;
alert("A vous deux vous avez " + age + " ans");

//
//
//Exercice 3 Problème de chaussures
//
//

var prix1 = 70;
var prix2 = 59;
var prix3 = 20;
var total = prix1 + prix2 + prix3;

console.log(total*0.8);

//
//
//Exercice 4 Une calculatrice JavaScript
//
//

var firstNumber = parseInt(prompt("Quel est le premier nombre ?"));
var secondNumber = parseInt(prompt("Quel est le deuxième nombre ?"));
console.log(firstNumber + secondNumber);


//
//
//Exercice 5
//
//

var lastName = prompt("Quel est votre nom ?").toUpperCase();
var lnLetters = lastName[0] + lastName[lastName.length - 1];
console.log("Voici la première et la dernière lettre de votre nom" + lnLetters);

var firstName = prompt("Quel est votre prénom ?").toUpperCase();
var fnLetters = firstName[0] + firstName[firstName.length - 1];
console.log("Voici la première et la dernière lettre de votre prénom" + fnLetters);

console.log("Voici les deux mis ensemble " + lnLetters + fnLetters);

var age =  parseInt(prompt("Quel est votre âge ?"));
var age = Math.round(age/33);

console.log("Divisé par 33 cela donner " + age);
