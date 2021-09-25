import style from './ContentSide.module.css';

// ==== Importação de componentes estruturais ==== //
import { Header } from '../Header/Header';
import { Main } from '../Main/Main';
import { Footer } from '../Footer/Footer';

export function ContentSide({AsideState, setAsideState}){

    return(

        <>
            <div className = {style.content_side}>
                <Header AsideState = {AsideState} setAsideState = {setAsideState} />
                <Main />
                <Footer />
            </div>
        </>
    )
}