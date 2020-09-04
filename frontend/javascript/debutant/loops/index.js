// Exercice 1
console.log("\nExercice 1");
var i = 0;
while (i <= 9) {
  console.log("One run of the loop");
  i ++;
}

// Exercice 2
console.log("\nExercice 2");
for (var i=0; i <=9 ; i++) {
  console.log("One run of the loop");
}

// Exercice 3
console.log("\nExercice 3");
// (var i=0; i <= 100; i++) for numbers from 0 to 100
// (var i=1; i <= 99; i++) for numbers from 1 to 99
for (var i=0; i <= 100; i+=2) {
  console.log(i);
}

// Exercice 4
console.log("\nExercice 4");
for (var i=0; i <= 100; i++) {
  if(i%2 === 0) {
    console.log(i + " is even");
  }
  else {
    console.log(i + " is odd");
  }
}

// Exercice 5
console.log("\nExercice 5");
var items = ["First item", "Second item", "Third item", "Fourth item"];
for (var i=0; i < 4; i++) {
  console.log(items[i]);
}

// Exercice 6
console.log("\nExercice 6");
customers = [
  "Albin Term",
  "Anna Sandgrove",
  "John Doe",
  "Terrance Head",
  "Yan Mock",
  "Zoe Durst"
];
console.log("List of all customers : ");
for (i=0; i < 6; i++) {
  console.log(customers[i]);
}

// Exercice 7
console.log("\nExercice 7");
items = ["First item", "Second item", "Third item", "Fourth item"];
for (var item of items) {
  console.log(item);
}

// Exercice 8
console.log("\nExercice 8");
var citizen = {
  "firstname" : "John",
  "lastname" : "Doe",
  "age" : 45,
  "income" : 60000,
  "sexe" : 0
};
console.log("Citizen identity :");
for (var key in citizen) {
  if (key === "sexe") {
    if (citizen[key]) {
      console.log(key + " : female");
    }
    else {
      console.log(key + " : male");
    }
  }
  else {
    console.log(key + " : " + citizen[key]);
  }
}

// Exercice 9
console.log("\nExercice 9");
var citizens = [
  {
    "firstname" : "John",
    "lastname" : "Doe"
  },
  {
    "firstname" : "Anna",
    "lastname" : "Molner"
  },
  {
    "firstname" : "Harry",
    "lastname" : "Trueman"
  },
  {
    "firstname" : "Cecile",
    "lastname" : "Mercier"
  }
];

for (var citizen of citizens) {
  console.log("Citizen : ");
  for (var key in citizen) {
    console.log(key + " : " + citizen[key]);
  }
  console.log("\n");
}
