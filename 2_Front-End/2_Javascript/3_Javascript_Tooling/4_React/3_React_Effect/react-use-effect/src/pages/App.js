import { useEffect } from 'react';
import { useState } from 'react';
import './App.css';

function App() {

  const [count, setCount] = useState(0);

  //Primeiro é disparado no Render do documento
  //Depois é disparado sempre que o state count variar
  useEffect(() => {

      document.querySelector(".container-center").style.borderColor = randomColor();
    
  }, [count]); //Count é a dependência

  //Retorna um cor aleatoriamente
  function randomColor(){

    let letters = '0123456789ABCDEF';
    let color = '#';

    for (var i = 0; i < 6; i++) {
      color += letters[Math.floor(Math.random() * 16)];
    }

    return color;
  }

  return (
    <div className = "App">

      <div className = "container container-center">
        <div class="row">
          <div class="col">
            <div class="alert alert-primary" role="alert">
              <h1>COMO FUNCIONA O HOOK USE EFFECT?</h1>
              <div className = "container container-text">
                <p>O useEffect é disparado após dois eventos: o carregamento da página e alteração de States.
                <br />O useEffect é um <b>EFEITO COLATERAL</b> desses eventos.
                <br />Ou seja: o useEffect é uma função, um bloco de código, que é ativado no carregamento da página, e quando seu cache se alterar. </p>
              </div>
              <h1>Como implementar o useEffect?</h1>
              <div className = "container container-text">
                <p>Tendo feito o import desse recurso, a síntaxe básica é: useEffect(callback) ou useEffect(callback, [dependencies]).
                <br />O segundo parâmetro é opcional, mas também um pilar do seu funcionamento. É um array de valores selecionados, que serão os que, quando alterados, irão ativar a função. 
                <br />Se esse array de dependências não existir, o useEffect será disparado uma única vez - apenas quando o componente for montado.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col">
            <div class="alert alert-light" role="alert">
              <h1>EXEMPLO - CONTADOR</h1>
              <div className = "container container-text">
                <input value = {count} disabled/>
                <button onClick = {() => {setCount(count + 1)}}>Adicionar 1</button>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  );
}

export default App;
