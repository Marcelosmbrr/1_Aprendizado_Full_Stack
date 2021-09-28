import style from '../index.module.css';

// ==== Importação do Hook personalizado usePager para acesso ao state global da paginação ==== //
// ==== Seu provider está no App.js ==== //
import { usePager } from '../../../context/Page/PageContext';

export function Logbook(){

    const {ActualPage, setActualPage} = usePager();

    return(

        <>
            <div className = {style.main_top}>
                <h2>{ActualPage}</h2>
            </div>

            <section className = {style.main_content}>
                <h1>Conteúdo da página Relatórios</h1>
            </section>
        </>
    )
}