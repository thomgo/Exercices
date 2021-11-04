import React, {useState} from 'react';
// Composant pour la réalisation de l'exercice 3
function Todolist() {
    // Tableau sous forme d'état pour stocker nos tâches
    const [tasks, setTasks] = useState([]);
    // Etat qui représente la saisie utilisateur dans l'input du formulaire
    const [inputValue, setInputValue] = useState("");
    // A chaque variation de la valeur de l'input on stocke la nouvelle valeur dans inputValue
    let handleChange = function(event) {
        setInputValue(event.target.value);
    }
    // Quand l'utilistateur clique sur le bouton on ajoute la valuer de l'input au tableau des tâches
    let addTask = function() {
        // Attention on n'intervient pas directement sur tasks
        let newTaskList = tasks;
        newTaskList.push(inputValue);
        setTasks(newTaskList);
        // On remet la valeur de l'input à vide
        setInputValue("");
    }

    // remarquez dans l'affichage la gestion de deux évènements distincts
    // Un pour l'input, un pour le bouton
    return(
        <section className="my-4">
            <h2>Todolist :</h2>
            <div className="row">
                <div className="col-6">
                    <input className="form-control w-75" type="text" onChange={handleChange} value={inputValue}></input>
                    <button className="btn btn-secondary my-3" onClick={addTask}>Ajouter</button>
                </div>
                <div className="col-6">
                    <h3>Liste de tâches à réaliser</h3>
                    <ul className="list-group">
                        {tasks.map(value => <li className="list-group-item">{value}</li>)}
                    </ul>
                </div>
            </div>
        </section>
    );
}

export default Todolist