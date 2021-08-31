import './CalcModal.css';
import {useState} from 'react';

export function CalculatorModal(){

    //A (parcela) +(operation) B(parcela) = AB(resultado)

    //State das parcelas
    const [primeiraParcela, setPrimeiraParcela] = useState(0);
    const [segundaParcela, setSegundaParcela] = useState('');

    //States das operações
    const [typeOperation, setOperationType] = useState({"tipo": '', "simbolo": ''});

    //State do resultado
    //const [dataOuput, setDataOutput] = useState();

    //Quando clicado um botão de número
    function keyboardNumber(event){

        //Se a operação não tiver sido setada ainda 
        if(typeOperation.tipo == ''){
            
            //PRIMEIRA PARCELA

            //Se a primeira parcela for ''
            if(primeiraParcela == 0){

                //A primeira parcela recebe o valor
                setPrimeiraParcela(event.target.value);

            }else{ //Se a primeira parcela não for 0

                //O state atual da parcela é concatenado com o novo valor
                let concat = String(primeiraParcela) + String(event.target.value);

                //A concatenação é convertida pra Number
                let concatNumber = Number(concat);

                //Atualizaçaõ do state da primeira parcela
                setPrimeiraParcela(concatNumber);

            }

        //Se não, se a operação já tiver sido setada
        }else if(typeOperation.tipo == "addition" || typeOperation.tipo == "minus" || typeOperation.tipo == "division"){
            
            //SEGUNDA PARCELA

            //Se a segunda parcela for ''
            if(segundaParcela == ''){

                //A segunda parcela recebe o valor
                setSegundaParcela(event.target.value);

            }else{ //Se não for null

                //O state atual da parcela é concatenado com o novo valor
                let concat = String(segundaParcela) + String(event.target.value);

                //A concatenação é convertida pra Number
                let concatNumber = Number(concat);

                //Atualizaçaõ do state da segunda parcela
                setSegundaParcela(concatNumber);

            }

        }
    }

    //Quando clicado um botão de operação
    function keyboardOperation(event){

        if(typeOperation.simbolo == ''){

            let state = {};

            if(event.currentTarget.value == "plus"){

                state = {"tipo": "addition", "simbolo": "+"}

            }else if(event.currentTarget.value == "minus"){

                state = {"tipo": "minus", "simbolo": "-"}

            }else if(event.currentTarget.value == "division"){

                state = {"tipo": "division", "simbolo": "/"}

            }

            setOperationType(state);
        }
        
            
    }

    //Quando clicado o botão de executar a operação
    function execCalculation(){

        if((typeOperation.tipo == "addition" || typeOperation.tipo == "minus" || typeOperation.tipo == "division") && segundaParcela != ''){

            let result = '';

            if(typeOperation.tipo == "addition"){

                result = Number(primeiraParcela) + Number(segundaParcela);

            }else if(typeOperation.tipo == "minus"){

                result = Number(primeiraParcela) - Number(segundaParcela);
                    
            }else if(typeOperation.tipo == "division"){

                result = Number(primeiraParcela) / Number(segundaParcela);

            }

            setPrimeiraParcela(result);
            setSegundaParcela('');
            setOperationType({"tipo": '', "simbolo": ''});

        }else{

            setPrimeiraParcela("Error");
            setSegundaParcela('');
            setOperationType({"tipo": '', "simbolo": ''});

        }

    }

    //Quando clicado o botão de resetar a calculadora
    function resetCalculator(){

        setPrimeiraParcela(0);
        setSegundaParcela('');
        setOperationType({"tipo": '', "simbolo": ''});

    }

    return(

        <div className = "modal_calculator">
            <table>
                <thead>
                    <tr>
                        <th colSpan = "2"><i class="fas fa-calculator"></i></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>                                                {/* Valores são atualizados de forma assíncrona */}
                        <td className = "value_box" colSpan = "3">{`${primeiraParcela} ${typeOperation.simbolo} ${segundaParcela}`}</td>
                    </tr>
                    <div className = "keyboard">
                        <div>
                            <button type = "button" value = "1" className = "keyboard_button btn btn-light" onClick = {keyboardNumber}>1</button>
                        </div>
                        <div>
                            <button type = "button" value = "2" className = "keyboard_button btn btn-light" onClick = {keyboardNumber}>2</button>
                        </div>
                        <div>
                            <button type = "button" value = "3" className = "keyboard_button btn btn-light" onClick = {keyboardNumber}>3</button>
                        </div>
                        <div>
                            <button type = "button" value = "4" className = "keyboard_button btn btn-light" onClick = {keyboardNumber}>4</button>
                        </div>
                        <div>
                            <button type = "button" value = "5" className = "keyboard_button btn btn-light" onClick = {keyboardNumber}>5</button>
                        </div>
                        <div>
                            <button type = "button" value = "6" className = "keyboard_button btn btn-light" onClick = {keyboardNumber}>6</button>
                        </div>
                        <div>
                            <button type = "button" value = "7" className = "keyboard_button btn btn-light" onClick = {keyboardNumber}>7</button>
                        </div>
                        <div>
                            <button type = "button" value = "8" className = "keyboard_button btn btn-light" onClick = {keyboardNumber}>8</button>
                        </div>
                        <div>
                            <button type = "button" value = "9" className = "keyboard_button btn btn-light" onClick = {keyboardNumber}>9</button>
                        </div>
                        <div>
                            <button type = "button" value = "0" className = "keyboard_button btn btn-light" onClick = {keyboardNumber}>0</button>
                        </div>
                        <div>
                            <button type = "button" value = "plus" className = "keyboard_button btn-operation btn btn-light" onClick = {keyboardOperation}><i class="fas fa-plus"></i></button>
                        </div>
                        <div>
                            <button type = "button" value = "minus" className = "keyboard_button btn-operation btn btn-light" onClick = {keyboardOperation}><i class="fas fa-minus"></i></button>
                        </div>
                        <div>
                            <button type = "button" value = "division" className = "keyboard_button btn-operation btn btn-light" onClick = {keyboardOperation}><i class="fas fa-divide"></i></button>
                        </div>
                    </div>
                    <tr className = "btn_row">
                        <td colSpan = "3"><button type = "button" className = "modalButton btn btn-primary" onClick = {execCalculation}>Confirmar</button></td>
                    </tr>
                    <tr>
                        <td colSpan = "3"><button type = "button" className = "modalButton btn btn-primary" onClick = {resetCalculator}>Resetar</button></td>
                    </tr>  
                </tbody>
            </table>
        </div>
    )
}