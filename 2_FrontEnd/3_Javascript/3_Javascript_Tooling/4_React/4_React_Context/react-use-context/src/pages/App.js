import './App.css';
import { Counter } from '../components/Counter/Counter';
import { MirrorCounter } from '../components/MirrorCounter/MirrorCounter';
import { CounterProvider } from '../context/CounterContext';

function App() {
  return (
    <div className="App">

      {/* Esse é o componente "wraper" do contexto Counter */}
      <CounterProvider>
        
        {/* Esses são os componentes filhos do "wraper"*/}
        {/* Eles são enviados para o wraper dentro do objeto Children */}
        <Counter />
        <MirrorCounter />

      </CounterProvider>
      
    </div>
  );
}

export default App;
