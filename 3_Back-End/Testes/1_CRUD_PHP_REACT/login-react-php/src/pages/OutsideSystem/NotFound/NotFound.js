import style from './NotFound.module.css';

// ==== Importação dos Lotties ==== //
import {NotFoundAnimation} from '../../../assets/lottie/404/NotFound';

export function NotFound(){

    return(

        <>

            <div className={style.not_found_page}>

                <h1><NotFoundAnimation /></h1>
                
            </div>

        </>
    )
}