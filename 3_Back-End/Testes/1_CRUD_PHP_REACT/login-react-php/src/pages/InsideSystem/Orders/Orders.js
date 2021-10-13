import indexStyle from '../index.module.css';

// ==== Importação do Hook personalizado usePager para acesso ao state global da paginação ==== //
// ==== Seu provider está no App.js ==== //
import { usePager } from '../../../context/Page/PageContext';

export function Orders(){

    const {ActualPage, setActualPage} = usePager();

    return(

        <>
            <div className = {indexStyle.main_top}>
                <h2>{ActualPage}</h2>
            </div>

            <section className = {indexStyle.main_content}>
                <h1>Conteúdo da página Ordens</h1>
            </section>
        </>
    )
}