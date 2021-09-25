import style from './Section.module.css';

// ==== Importação do Hook personalizado usePager para acesso ao state global da paginação ==== //
// ==== Seu provider está no App.js ==== //
import { usePager } from '../../../../context/Page/PageContext';

export function Section(){

    const {ActualPage, setActualPage} = usePager();

    return(

        <>
            <section className = {style.section}>
                <h1>Conteúdo da página {ActualPage}</h1>
                
                <div className = {style.box}>
                    TESTE
                </div>
            </section>
        </>
    )
}