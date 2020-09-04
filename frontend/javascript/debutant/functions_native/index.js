// Exercice 1
console.log("\nExercice 1");
var random_int = Math.random();
console.log(random_int);

// Exercice 2
console.log("\nExercice 2");
var number = 12.8;
console.log(number);
number = Math.round(number);
console.log(number);

number = 12.3;
console.log(number);
number = Math.round(number);
console.log(number);

number = 12.5;
console.log(number);
number = Math.round(number);
console.log(number);

number = 12.42359;
console.log(number);
number = (Math.round(number*100))/100;
console.log(number);

// Exercice 3
console.log("\nExercice 3");
var age = "35";
console.log(typeof age);

age = parseInt(age, 10);
console.log(typeof age);

// Exercice 4
console.log("\nExercice 4");
var texte = "Some random content to test the length attribut";
var maxLength = 20;

if (texte.length > maxLength) {
  console.log("Your texte is too long");
}
else {
  console.log("OK");
}

// Exercice 5
console.log("\nExercice 5");
var texte = "A nice boat";
console.log(texte);

var letters = texte.split('');
console.log(letters);

var words = texte.split(' ');
console.log(words);

// Exercice 6
console.log("\nExercice 6");
var name = "Paul Dumas";
var expectedName = "paul dumas";

if (name.toLowerCase() === expectedName) {
  console.log("OK Paul you can come in");
}
else {
  console.log("We do not know you");
}

// Exercice 7
console.log("\nExercice 7");
var newStudent = "Ryan Oper";
var students = ["John Doe", "Jane Doe", "Marc Alm", "Jimmy Turner"];

students.push(newStudent);
console.log(students);

students.push("Franck Martin", "Tom Hawkins");
console.log(students);

// Exercice 8
console.log("\nExercice 8");
var transactions = [102, 50, 4563, 42, 78, 146, 10563];
var researched = 42;

console.log(transactions.includes(researched));

if (transactions.includes(researched)) {
  console.log("We found a matching transaction");
}
else {
  console.log("No match");
}

// Exercice 9
console.log("\nExercice 9");
var students = ["John Doe", "Jane Doe", "Marc Alm", "Jimmy Turner"];
console.log(students);

students.sort();
console.log(students);

// Access last element
console.log(students[students.length-1]);
// delete last element and returns it
console.log(students.pop());
