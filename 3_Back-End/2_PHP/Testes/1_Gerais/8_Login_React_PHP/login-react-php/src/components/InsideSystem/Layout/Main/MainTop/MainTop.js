import style from './MainTop.module.css';

// ==== Importação do Hook personalizado usePager para acesso ao state global da paginação ==== //
// ==== Seu provider está no App.js ==== //
import { usePager } from '../../../../../context/Page/PageContext';

export function MainTop(){

    const {ActualPage, setActualPage} = usePager();

    return(

        <>
            <div className = {style.main_top}>
                <h2>{ActualPage}</h2>
            </div>
        </>
    )
}