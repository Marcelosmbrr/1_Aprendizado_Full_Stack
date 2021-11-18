import './Header.css';
import { MenuDesktop } from "../MenuDesktop/MenuDesktop";
import { MenuMobile } from "../MenuMobile/MenuMobile";

export function Header({window}){

    if(window >= 900){

        return(

            <>
                <header>
                     <MenuDesktop />
                </header>
            </>
        )

    }else if(window < 900){

        return(

            <>
                <header>
                     <MenuMobile />
                </header>
            </>

        )

    }
    
}