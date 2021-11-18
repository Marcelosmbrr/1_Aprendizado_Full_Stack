import {useState} from 'react';
import './App.css';
import {Header} from '../../components/Header/Header';
import {Aside} from '../../components/Aside/Aside';
import {Main} from '../../components/Main/Main';
import {Footer} from '../../components/Footer/Footer';

function App() {

  //State do width da janela para definir o tipo de menu utilizado no Header
  const [windowWidth, setWindowWidth] = useState(document.body.clientWidth);
    
  window.addEventListener("resize", () => {

      setWindowWidth(document.body.clientWidth);

  });

  return (
    
    <div className = "App">
      <Header window = {windowWidth} />
      <Aside />
      <Main window = {windowWidth} />
      <Footer />
    </div>
  )

}

export default App;
