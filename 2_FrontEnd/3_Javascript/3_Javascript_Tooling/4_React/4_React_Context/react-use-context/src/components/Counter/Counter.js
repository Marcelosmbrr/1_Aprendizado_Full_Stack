import { useCounter } from "../../context/CounterContext";

//É nesse componente que o valor do state é atualizado
export function Counter(){

    //A chamada de useCounter retorna o próprio objeto {Counter, setCounter} com os valores atualizados
    //Para entender o retorno dessa função, veja o componente CounterContext

    //Resgate do state Counter do ContextCounter
    const {Counter, setCounter} = useCounter();

    return(

        <div className = "cnt counter_container">
            <div className = "counter_tittle">
                <h1>Componente Counter</h1>
            </div>
            <input type = "text" value = {Counter} disabled /> {/* Uso do valor do state Counter no input */}
            <button onClick = {() => { setCounter(Counter + 1) }}>Adicionar 1</button> {/* Atualização do valor do state Counter */}
        </div>
    )
}