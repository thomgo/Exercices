<h2>Ajouter un félin</h2>
<form action="" method="post">
  <p>Nom</p>
  <input type="text" name="name">
  <p>Age</p>
  <input type="number" name="age">
  <p>Sexe</p>
  <select name="sexe">
    <option value="male">Male</option>
    <option value="female">Femelle</option>
  </select>
  <p>Couleur</p>
  <select name="color">
    <option value="white">Blanc</option>
    <option value="grey">Gris</option>
    <option value="black">Noir</option>
    <option value="ginger">Roux</option>
  </select>
  <input type="submit" value="Envoyer">
</form>

<h2>Les chats présents</h2>
<?php
foreach ($chats as $key => $chat) {
  $chat->speak();
}
 ?>
