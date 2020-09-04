let choices = document.getElementsByClassName("choice");
let choosenColor = document.getElementById("choosenColor");

const COLORS = ["purple", "yellow", "blue", "green"];

for (let i = 0; i < choices.length; i++) {
  choices[i].style.background = COLORS[i];
  choices[i].onclick = function() {
    let color = this.style.background;
    choosenColor.style.background = color;
  };
}
