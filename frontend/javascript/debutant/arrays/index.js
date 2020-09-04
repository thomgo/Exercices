// Exercice 1
console.log("\nExercice 1");
var items = new Array();
console.log(items);
items = [];
console.log(items);
// This throw an error
// items = ();
items = ["a", "b"];
console.log(items);

// Exercice 2
console.log("\nExercice 2");
var items = [
  "premier élément",
  "deuxième élément",
  "troisième élément",
  "quatrième élément"
];
console.log(items);
console.log(items[1]);
console.log(items[3]);
console.log(items[0]);

// Exercice 3
console.log("\nExercice 3");
var player = [
  "John",
  "Doe",
  34,
  true
];
console.log(player[0]);
console.log(player[1]);
console.log(player[0] + " " + player[1]);

player[2] = 40;
console.log(player [2]);

console.log(player[3]);

// Exercice 4
console.log("\nExercice 4");
var player = {
  "firstname" : "John",
  "lastname" : "Doe",
  "age" : 34,
  "isAdult" : true
};
console.log(player["firstname"]);
console.log(player["lastname"]);
console.log(player["firstname"] + " " + player["lastname"]);

player["age"] = 40;
console.log(player["age"]);

console.log(player["isAdult"]);

// Exercice 5
console.log("\nExercice 5");
var car = {
  "type" : "Clio",
  "brand" : "Renault",
  "date" : 2006,
  "color" : "orange",
  "passengers" : ["Mike", "Claire", "Anna", "Louis"]
};

console.log(car);

console.log("Une " + car["brand"] + " " + car["type"] + " de couleur " + car["color"]
+ ", modèle " + car["date"] + " a été aperçue avec à son bord 4 passagers");

console.log(car["passengers"][0]);

console.log("4 individus ont été aperçus à son bord : "
+ car["passengers"][3] + ", "
+ car["passengers"][1] + ", "
+ car["passengers"][0] + " et "
+ car["passengers"][2]);

// Exercice 6
console.log("\nExercice 6");
var a = 14;
var b = 38;
var product = [];
console.log(a,b,product);

product[0] = a;
console.log(product);

product[1] = b;
console.log(product);

product[7] = 50;
console.log(product);
