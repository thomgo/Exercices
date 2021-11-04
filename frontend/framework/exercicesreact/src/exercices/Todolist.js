function Todolist() {
    return(
        <section className="my-4">
            <h2>Todolist :</h2>
            <div className="row">
                <div className="col-6">
                    <input className="form-control w-75" type="text" value="A faire"></input>
                    <button className="btn btn-secondary my-3">Ajouter</button>
                </div>
                <div className="col-6">
                    <h3>Liste de tâches à réaliser</h3>
                </div>
            </div>
        </section>
    );
}

export default Todolist