//Insert the main title
var mainTitle = document.getElementById("mainTitle");
mainTitle.innerText = "Titre principal";
//Insert the subtitle
var subTitle = document.getElementById("subTitle");
subTitle.innerHTML = "Titre secondaire";

//Get all the contents elements and set a bleu background
var contents = document.getElementsByClassName("content");
for (var i = 0; i < contents.length; i++) {
  contents[i].style.background = "blue";
}

//Function to delete article on click
function deleteContent() {
  var articles = document.getElementsByTagName("article");
  articles[0].style.display = "none";
}
