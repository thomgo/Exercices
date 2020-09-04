var input = document.getElementById("input");
var addItem = document.getElementById("addItem");
var shoppingList = document.getElementById("shoppingList");

function addListItem(itemToAdd) {
  var li = document.createElement("li");
  li.innerHTML = itemToAdd;
  shoppingList.appendChild(li);
  input.value = "";
}

addItem.onclick = function() {
  var itemToAdd = input.value;

  if(itemToAdd.length > 0) {
    addListItem(itemToAdd);
  }
};

input.onkeyup = function(event) {
  if(event.keyCode === 13) {
    var itemToAdd = input.value;

    if(itemToAdd.length > 0) {
      addListItem(itemToAdd);
    }
  }
};
