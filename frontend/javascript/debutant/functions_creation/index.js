// Exercice 1
console.log("\nExercice 1");
function product(a, b) {
  return a*b;
}
var result = product(4, 30);
console.log("The result of the function is : " + result);

// Exercice 2
console.log("\nExercice 2");
function showDigits() {
  for (var i=0; i <=9 ; i++) {
    console.log(i);
  }
}

showDigits();

// Exercice 3
console.log("\nExercice 3");
function welcome(firstname="John", lastname="Doe") {
  console.log("Welcome to our site " + firstname + " " + lastname);
}

welcome();

// Exercice 4
console.log("\nExercice 4");
function isAdult(age=false){
  if(age){
    return (age >= 18) ? true : false;
  }
  return false;
}

if (isAdult(27)) {
  console.log("Welcome to the site");
}

// Exercice 5
console.log("\nExercice 5");
function birthYear(age=false) {
  if (age) {
    return new Date().getFullYear() - age;
  }
  return "No age given";
  // Ternary version
  // return age ? new Date().getFullYear() - age : "No age given";
}

console.log(birthYear(45));

// Exercice 6
console.log("\nExercice 6");
var user = {
  "firstname" : "John",
  "lastname" : "Doe",
  "age" : 42,
  "job" : "dev",
};

function identityCard(user) {
  identityCard = "";
  for (var key in user) {
    identityCard += key  + " : " + user[key] + "\n";
  }
  return identityCard;
}

console.log(identityCard(user));
