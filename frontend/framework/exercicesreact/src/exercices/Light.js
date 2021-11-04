import {useState} from 'react';

function Light() {
    const [isOn, setOn] = useState(false);

    let switchLight = function() {
        setOn(isOn ? false : true);
    }

    return(
        <section className="my-4">
            <h2>Jouez avec la lumière</h2>
            <button onClick={switchLight} className="btn btn-secondary">{isOn ? "Eteindre" : "Allumer"}</button>
            <div id="light" className={"my-3 " + (isOn ? "bg-warning" : "bg-dark")}></div>
        </section>
    );
}

export default Light