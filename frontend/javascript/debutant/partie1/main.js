//
//
//Exercice 1 hello World
//
//

console.log("Hello world");

var hello = "Hello World";
console.log(hello);

//
//
//Exercice 2 Calculs divers
//
//

console.log(3 * 3); // affiche 9
console.log(12 / 0); //affiche Infinity
console.log(4 + 9 + 78); //affiche 91
console.log(12 - 7); //affiche 5
console.log(5e4); //affiche 50000

//
//
//Exercice 3 Communiquer avec l'ordinateur
//
//

var name = prompt("Quel est votre nom ?");
console.log("Bonjour" + name);

//
//
//Exercice 4 Nom et prénom
//
//

var nom = "Gossart";
var prenom = "Thomas";

console.log("Bonjour " + prenom +  " " + nom);

//
//
//Exercice 5 Des caractères aux nombres
//
//

var a = "123";

console.log(parseInt(a));

//
//
//Exercice 6 Majuscules et miniscules
//
//

var min = "minuscule";
var maj = "MAJUSCULE";

min = min.toUpperCase();
console.log(min);

maj = maj.toLowerCase();
console.log(maj);
