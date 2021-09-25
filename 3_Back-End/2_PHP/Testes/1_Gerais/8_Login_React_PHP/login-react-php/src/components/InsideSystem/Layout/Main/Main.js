import style from './Main.module.css';

import { Routes } from '../../../../routes/Routes';

export function Main(){

    return(

        <>
            <main className = {style.main}>
                <Routes />
            </main>
        </>
    )
}