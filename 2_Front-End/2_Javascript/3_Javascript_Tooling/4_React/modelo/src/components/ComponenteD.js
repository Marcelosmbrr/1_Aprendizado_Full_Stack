import styles from './ComponenteD.module.css'; //IMPORTAÇÃO DO COMPONENTE DE ESTILO

export default function componenteD({nome, sexo, idade, nacionalidade, foto}){

    return(

        <div className = {styles.componenteContainer}>
            <h2>Componente "D" - uso do Props desestruturado</h2>
            <img src = {foto} alt = "nome"></img>
            <p className = {styles.componentParagraph}>O nome da pessoa é {nome}</p>
            <p className = {styles.componentParagraph}>O sexo da pessoa é {sexo}</p>
            <p className = {styles.componentParagraph}>A idade da pessoa é {idade}</p>
            <p className = {styles.componentParagraph}>A nacionalidade da pessoa é {nacionalidade}</p>
        </div>


    )
}