import {useState} from 'react';
import "./App.css";
import {Header} from '../components/header/Header';
import {Main} from '../components/main/Main';
import {Footer} from '../components/footer/Footer';

export default function App() {

    //State do width da janela para definir o tipo de menu utilizado no Header
    const [windowWidth, setWindowWidth] = useState(document.body.clientWidth);
    
    window.addEventListener("resize", () => {

        setWindowWidth(document.body.clientWidth);

    });

    
    //O conteúdo do return é em JSX
    return (

      //Sendo um SPA, não é necessário criar um componente de página
      //Poderia ser criada aqui mesmo, no componente App
      <div className="App"> 
        <Header window = {windowWidth}/>
        <Main />
        <Footer/>
      </div>

    );
  }