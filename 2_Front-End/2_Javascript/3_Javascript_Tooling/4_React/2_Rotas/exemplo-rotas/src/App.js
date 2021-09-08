//IMPORT DE RECURSOS ESSENCIAIS
import {useState} from 'react';

//IMPORT DO COMPONENTE DE ROTAS
import { Routes } from './routes/Routes';
import {BrowserRouter as Router} from 'react-router-dom';

//IMPORT DOS COMPONENTES ESTRUTURAIS
import { Aside } from './components/layout/aside/Aside';

//ESTILIZAÇÃO 
import './components/layout/style/Layout.css';

function App() {
  return (

    <Router >
      
      <div className = "App">
        
        <Aside />
        <Routes />
      
      </div>

    </Router>

  );
}

export default App;
