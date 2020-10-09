# Exercice 4 : la poo appliquée à un formulaire

Créez une classe nommée form représentant un formulaire HTML.

Le constructeur doit créer le code d’en-tête du formulaire en utilisant la balise <form>.

Le code du formulaire sera stocké dans l’un des attributs de l’objet.

Une méthode setText() doit permettre d’ajouter un input de type texte.

Une méthode setSubmit() doit permettre d’ajouter un bouton d’envoi et de fermer le le formulaire.

Les paramètres de ces méthodes doivent correspondre aux attributs des éléments HTML générés. Notamment l'attribut name.

La méthode showForm() doit afficher tout le formulaire HTML sur une page.

Créez un objet form, et ajoutez-y deux zones de texte et un bouton d’envoi. Testez l’affichage obtenu.

Un code de ce type doit afficher un formulaire simple à l'écran :

```
$form = new Form("");
$form->setTexte("name");
$form->setSubmit("form", "envoyer");
$form->showForm();

```
