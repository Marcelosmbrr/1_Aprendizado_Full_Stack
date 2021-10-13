import React, {useState, useContext, createContext} from 'react';

//Cria um objeto Contexto (context)
const DeviceContext = createContext();

//Esse é o componente Wraper, ou "embrulhador", que envolve os componentes que utilizarão estados do contexto
//Por isso ele recebe o objeto Children //Children é o objeto que contém os componentes filhos/embrulhados //Ver no App.js
export function DeviceProvider({children}){

    //O state é inicializado aqui, no contexto
    const [DeviceWidth, setDeviceWidth] = useState(document.body.clientWidth);

    return(

        //Componentes de um contexto consideram o valor/value do seu provider
        <DeviceContext.Provider value = {{DeviceWidth, setDeviceWidth}}>

            {/* Dentro desse objeto, children, estão, então, os componentes <Counter /> e <MirrorCounter />*/}
            {children} 

        </DeviceContext.Provider>
    )
}

//Esse é o hook personalizado, criado para utilizar os valores do contexto //O nome de um hook é sempre use[name]
export function useDevice(){

    //Context recebe o atual valor do contexto CounterContext
    //Esse "atual valor", seria o objeto {Counter, setCounter}, que pode estar com o valor do state diferente
    const context = useContext(DeviceContext);

    //O retorno de context é o retornar de um objeto {Counter, setCounter} com valores atualizados
    return context;
}