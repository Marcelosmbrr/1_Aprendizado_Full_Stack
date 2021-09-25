import React from "react";
import { BrowserRouter, Route, Switch, Redirect } from "react-router-dom";

// ==== Componente cujo valor de retorno é o fator condicional para acesso ao sistema ==== //
import { Authentication } from "./Authentication";

// ==== Componentes das páginas externas do sistema ==== //
import { Login } from "../pages/OutsideSystem/Login/Login";
import { Registro } from "../pages/OutsideSystem/Registro/Registro";
import { RecuperarSenha } from "../pages/OutsideSystem/RecuperarSenha/RecuperarSenha";
import { Sistema } from "../pages/OutsideSystem/Sistema/Sistema";
import { NotFound } from "../pages/OutsideSystem/NotFound/NotFound";

//==== Importação das páginas internas do sistema ==== //
import { Home } from '../pages/InsideSystem/Home/Home';
import { Incidents } from '../pages/InsideSystem/Incidents/Incidents';
import { Logbook } from '../pages/InsideSystem/Logbook/Logbook';
import { MyMaps } from '../pages/InsideSystem/MyMaps/MyMaps';
import { NewPlan } from '../pages/InsideSystem/NewPlan/NewPlan';

const PrivateRoute = ({ component: Component, ...rest }) => (
  <Route
    {...rest}
    render={props =>
        Authentication() ? (
        <Component {...props} />
      ) : (
        <Redirect to={{ pathname: "/", state: { from: props.location } }} />
      )
    }
  />
);

{ /* 
  
   Nested Routes - rotas encadeadas - https://reactrouter.com/web/example/nesting 
     <Route exact path = "/dashboard" component = {Home} />
                  <Route path = "/newplan" component = {NewPlan} />
                  <Route path = "/mymaps" component = {MyMaps} />
                  <Route path = "/logbook" component = {Logbook} />
                  <Route path = "/incidents" component = {Incidents} />
               
              
*/}

export function Routes(){ 

    return(

        <BrowserRouter>
            <Switch>
                <Route exact path="/" component={Login} />
                <Route path="/registrar" component={Registro} />
                <PrivateRoute path = "/sistema" component={Sistema} />
                <Route path="/recuperarsenha" component={RecuperarSenha} />
                <Route exact path="*" component={NotFound} />
              </Switch>
        </BrowserRouter>
    )

};