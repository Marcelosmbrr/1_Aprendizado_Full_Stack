import './App.css';
import ComponenteA from './components/ComponenteA';
import ComponenteB from './components/ComponenteB';
import ComponenteC from './components/ComponenteC';
import ComponenteD from './components/ComponenteD';

//Esse é o JSX //https://pt-br.reactjs.org/docs/introducing-jsx.html
function App() {

  function retornaSoma(a,b){
    return a+b;
  }

  function retornaNome(){
    return "Beltrano";
  }

  return (
    <div className="App"> {/* A aplicação é retornada em um elemento pai // O atributo "class" é escrito como "className" */}
      <h2>Com JSX é possível juntar HTML com Javascript dinâmicamente!</h2>
      <p>Soma retornada da função "retornaSoma": {retornaSoma(25, 30)}</p>
      <hr/>
      <h2>React é orientado a componentes, que são estruturas criadas também com JSX e importadas para o entry point "App.js"!</h2>
      <ComponenteA/>
      <hr/>
      <ComponenteB/>
      <hr/>
      <ComponenteC nome ={retornaNome()}/>
      <hr/>
      <ComponenteD nome = "Fulana" sexo = "feminino" idade = "22" nacionalidade = "Brasileiro(a)"/>
      <hr/>
      
    </div>
  );
}

export default App;
