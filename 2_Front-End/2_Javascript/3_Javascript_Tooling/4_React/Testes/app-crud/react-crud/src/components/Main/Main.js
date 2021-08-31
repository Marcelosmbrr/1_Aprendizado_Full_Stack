import {MainHeader} from './MainHeader/MainHeader';
import {Table} from '../Table/Table';
import { MainAside } from './MainAside/MainAside';
import { MenuMobileWindow } from '../MenuMobile/MenuMobileWindow';

export function Main({window}){

    if(window >= 900){

        return(

            <>
                <main className = "main_desktop">
                    <MainHeader window = {window}/>
                    <Table />
                    <MainAside />
                </main>
            </>
        )

    }else if(window < 900){

        return(

            <>
                <main className = "main_mobile">
                    <MainHeader />
                    <Table />
                    <MenuMobileWindow />
                </main>
            </>
        )
    }

    
}