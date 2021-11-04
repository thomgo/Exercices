function Presentation(props) {
    const userList = Object.keys(props.user).map((key) => <li className="list-group-item" key={key}>{key + " : " + props.user[key]}</li>);
    
    return(
        <section className="my-4">
            <h2>Présentation</h2>
            <div className="row">
                <div className="col-12 col-md-8 col-lg-6">
                    <ul className="list-group ">
                        <li className="list-group-item bg-dark text-white text-center">{props.user.firstname + " " + props.user.lastname}</li>
                        {userList}
                    </ul>
                </div>
            </div>
        </section>
    );
}

export default Presentation