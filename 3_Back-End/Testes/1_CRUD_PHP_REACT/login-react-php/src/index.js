import React from 'react';
import ReactDOM from 'react-dom';
import './index.css';

// ==== Importação do componente OutsideRoutes da lib de roteamento ==== //
import { Routes } from './routes/Routes';

// ==== Importação do provider do contexto Auth - de autenticação ==== //
import { AuthProvider } from './context/Auth/UserAuthContext';

// ==== Importação do provider do contexto DeviceContext - de tipo de dispositivo ==== //
import { DeviceProvider } from './context/Device/DeviceContext';

ReactDOM.render(

  <React.StrictMode>

    <DeviceProvider>
      <AuthProvider>
        <Routes />
      </AuthProvider>
    </DeviceProvider>

  </React.StrictMode>,

  document.getElementById('root')
);

