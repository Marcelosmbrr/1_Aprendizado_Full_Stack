import './App.css';

import {useState, useEffect, useRef} from 'react';

function App() {

  const inputRef = useRef();

  // ==== State dos dados da lista ==== //
  const [dataList, setDataList] = useState([{id: 1, value: "Item 1"}, {id: 2, value: "Item 2"}]);

  // ==== State do texto do span ==== //
  const [span, setSpan] = useState("Insira um novo item na lista");

  // ==== Função para verificar o que está sendo digitado ==== //
  function handleOnChange(){

    if(inputRef.current.value.length >= 5){

      setSpan(true);

    }else if(inputRef.current.value.length < 5){

      setSpan(false);

    }
    
  }

  // ==== Função para adicionar um item ==== //
  function handleOnSubmit(e){
    e.preventDefault();

    if(span === true){

      setDataList([...dataList, {id: dataList.length + 1, value: inputRef.current.value}]);

      inputRef.current.value = '';
      setSpan("Sucesso! Item inserido na lista!");

      setTimeout(() => {
        
        setSpan("Insira um novo item na lista");

      }, 2000);

    }else{

      inputRef.current.value = '';
      setSpan("Erro! Tente novamente!");

      setTimeout(() => {
        
        setSpan("Insira um novo item na lista");

      }, 2000);

    }

  }

  // ==== Função para excluir um item ==== //
  function handleDeleteItem(e){
    e.preventDefault();

    const new_list = dataList;
    new_list.pop();
    setDataList([...new_list]);
  }

  return (
    <div className="App">

      <form className = "modal_form">
          <ul className = "list">
            {/* Percorre o array dataList, pegando cada posição, que é um objeto, com "item"*/}
            {dataList.map((item) => 
                <li key = {item.id} className = "list_item"><a>{item.value}</a></li>
            )}
          </ul>
          <div className = "container_input">
              <input type = "text" onChange = {handleOnChange} ref = {inputRef}/>
              {span == false ? <span>Deve ter pelo menos 5 caracteres!</span> : (span === true? <span>Item válido!</span> : span)}
          </div>
          <div className = "container_buttons">
            <div className = "container_submit_button">
              <button onClick = {handleOnSubmit}>Adicionar Item</button>
            </div>
            <div className = "container_delete_button">
              <button onClick = {handleDeleteItem}>Excluir Item</button>
            </div>
          </div>
      </form>
     
    </div>
  );
}

export default App;
