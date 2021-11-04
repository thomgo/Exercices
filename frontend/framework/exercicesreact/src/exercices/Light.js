import React, {useState} from 'react';

// Composant fonctionnel qui gère l'exercice deux
// Ici je vous montre l'exemple de l'utilisation des state (données variables) en fonction avec un hook useState
function Light() {
    // On défini le state et son setter, un simple booléan pour savoir si c'est allumé
    const [isOn, setOn] = useState(false);
    // Fonction appelée au click sur le bouton et qui déclenche setOn avec la bonne valeur
    let switchLight = function() {
        // Afin de simplifier la syntaxe j'utilise une ternaire au lieu du classique if/else
        setOn(isOn ? false : true);
    }

    // On affiche le composant
    // Remarquez que le texte du bouton et la classe du fond coloré sont conditionnés à notre état
    return(
        <section className="my-4">
            <h2>Jouez avec la lumière</h2>
            <button onClick={switchLight} className="btn btn-secondary">{isOn ? "Eteindre" : "Allumer"}</button>
            <div id="light" className={"my-3 " + (isOn ? "bg-warning" : "bg-dark")}></div>
        </section>
    );
}

// Version similaire mais réalisée avec une classe
// class Light extends React.Component {
//     constructor(props) {
//         super(props);
//         this.state = {
//             isOn: false
//         }
//     }

//     switchLight = function() {
//         this.state({
//             isOn: this.state.isOn ? false : true 
//         })
//     }

//     render() {
//         return(
//             <section className="my-4">
//                 <h2>Jouez avec la lumière</h2>
//                 <button onClick={this.switchLight} className="btn btn-secondary">{this.state.isOn ? "Eteindre" : "Allumer"}</button>
//                 <div id="light" className={"my-3 " + (this.state.isOn ? "bg-warning" : "bg-dark")}></div>
//             </section>
//         );
//     }
// }

export default Light