import React, {useState, useContext, createContext} from 'react';

//Cria um objeto Contexto (context)
const AuthencationContext = createContext();

// PROVIDER
export function AuthProvider({children}){

    //O state é inicializado aqui, no contexto
    const [AuthData, setAuthData] = useState({});

    return(

        //Componentes de um contexto consideram o valor/value do seu provider
        <AuthencationContext.Provider value = {{AuthData, setAuthData}}>

            {/* Dentro desse objeto, children, estão, então, os componentes <Counter /> e <MirrorCounter />*/}
            {children} 

        </AuthencationContext.Provider>
    )
}

// HOOK 
export function useAuthentication(){

    //Context recebe o atual valor do contexto UserContext
    const context = useContext(AuthencationContext);

    //O retorno de context é o retornar de um objeto {userData, setUserData} com valores atualizados
    return context;

}