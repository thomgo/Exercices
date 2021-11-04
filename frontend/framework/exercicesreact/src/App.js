import logo from './logo.svg';
import './App.css';

import Header from './layout/Header';
import Footer from './layout/Footer';

import Presentation from './exercices/Presentation';
import Light from './exercices/Light';
import Todolist from './exercices/Todolist';



function App() {
  
  let user = {
    firstname: "Thomas",
    lastname: "Gossart",
    age: 29,
    job: "Formateur",
    hobby: "Le vélo",
    description: "Lorem ipsum"
  }

  return (
    <div>
      <Header></Header>
      <main className="container my-5">
        <Presentation user={user}></Presentation>
        <Light></Light>
        <Todolist></Todolist>
      </main>
      <Footer></Footer>
    </div>
  );
}

export default App;
