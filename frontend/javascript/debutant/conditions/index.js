// Exercice 1
console.log("\nExercice 1");

if (true) {
  console.log("Condition is working !");
}

if (false) {
 console.log("Condition is working !");
}
else {
  console.log("Condition is not working !");
}

if (false === false) {
  console.log("Condition is working !");
}

// Exercice 2
console.log("\nExercice 2");
var content = 123; // or true or false or "texte"
if (content) {
  console.log("Condition is OK");
}
else {
  console.log("Condition is KO");
}

// Exercice 3
console.log("\nExercice 3");
var price = 45; // or "45" or "forty five"

if (price === 45) {
  console.log("The price is a number");
}
else if (price == 45) {
  console.log("The price is a string");
}
else {
  console.log("The price is something else");
}

// Exercice 4
console.log("\nExercice 4");
var age = 25;
if (age >= 18) {
  console.log("Entry allowed");
}
else {
  console.log("Entry not allowed");
}

// Exercice 5
console.log("\nExercice 5");
var store = ["Walmart", "Colorado", "South-Park", 483,];

if (store[0] === "Walmart" && store[2] === "South-Park") {
  console.log("The Walmart in South-Park has " + store[3] + " employes");
}
else if (store[0] === "Walmart" && store[1] === "Colorado") {
  console.log("Hum this is an other Walmart from Colorado");
}
else if (store[0] === "Walmart") {
  console.log("Too bad this is just a Walmart");
}
else {
  console.log("I do not know what this is");
}

// Exercice 6
console.log("\nExercice 6");
var student = {
  "Name" : "John Doe",
  "Grade" : 14
};
if (student["Grade"] < 10) {
  console.log("Recalé");
}
else if (student["Grade"] < 12) {
  console.log("Passable");
}
else if (student["Grade"] < 14) {
  console.log("Moyen");
}
else if (student["Grade"] < 16) {
  console.log("Bien");
}
else {
  console.log("Très bien");
}

// Exercice 7
console.log("\nExercice 7");
var meal = {
  "foodType" : "meat",
  "cookedAt" : 80,
  "temperature" : 60
};
if (meal["temperature"] < meal["cookedAt"]) {
  meal["status"] = "Uncooked";
}
else if (meal["temperature"] === meal["cookedAt"]) {
  meal["status"] = "Cooked";
}
else {
  meal["status"] = "Overcooked";
}
console.log(meal["status"]);

// Exercice 8
console.log("\nExercice 8");
var number = 42;
if (number > 0) {
  if(number%2 === 0) {
    console.log("var number is even");
  }
  else {
    console.log("var number is odd");
  }
}
else {
  console.log("Please enter a number at least greater than 0");
}
