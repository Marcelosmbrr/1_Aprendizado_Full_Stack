import { useCounter } from "../../context/CounterContext"

export function MirrorCounter(){

    //A chamada de useCounter retorna o próprio objeto {Counter, setCounter} com os valores atualizados
    //Para entender o retorno dessa função, veja o componente CounterContext

    //Resgate do state Counter do ContextCounter
    const {Counter, setCounter} = useCounter();

    return(

        <div className = "cnt mirror_counter_container">
            <div className = "counter_tittle">
                <h1>Componente Mirror Counter</h1>
            </div>
            <input type = "text" value = {Counter} disabled /> {/* Uso do valor do state Counter no input */}
        </div>
    )
}