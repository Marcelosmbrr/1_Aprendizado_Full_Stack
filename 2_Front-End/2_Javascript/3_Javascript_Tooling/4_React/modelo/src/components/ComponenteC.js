export default function ComponenteC(props){

    return (

        <div>
            <h2>Este título foi escrito no componente "C" - sobre Props</h2>
            <p>Props servem para que o elemento pai "App.js" possa passar valores para os componentes filhos!</p>
            <p>Props é um objeto cujos atributos tem valores definidos dinâmicamente como atributos na tag do componente.</p>
            <p>Por exemplo, o valor de props.nome será igual ao valor do atributo "nome" quando utilizado na tag do componente.</p>
            <p>Vamos lá: o valor de "props.nome", que vêm do retorno de uma função no "App.js", é "{props.nome}".</p>
        </div>

    )
}