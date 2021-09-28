import style from './Main.module.css';

// ==== Importação do componente OutsideRoutes da lib de roteamento ==== //
import { InsideRoutes } from '../../../../routes/Routes';

export function Main(){

    return(

        <>
            <main className = {style.main}>
                <InsideRoutes /> 
            </main>
        </>
    )
}