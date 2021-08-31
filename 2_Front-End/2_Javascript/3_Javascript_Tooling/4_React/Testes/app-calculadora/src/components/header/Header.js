import {HeaderLogo} from '../header_logo/HeaderLogo';
import {MenuMobile} from '../menu_mobile/MenuMobile';
import {MenuDesktop} from '../menu_desktop/MenuDesktop';

export function Header({window}){

    if(window > 600){

        return(
            <>
                <header>
                    <HeaderLogo/>
                    <MenuDesktop/>
                </header>
            </>   
        )

    }else{

        return(
            <>
                <header>
                    <HeaderLogo/>
                    <MenuMobile/>
                </header>
            </>   
        )

    }

    
}