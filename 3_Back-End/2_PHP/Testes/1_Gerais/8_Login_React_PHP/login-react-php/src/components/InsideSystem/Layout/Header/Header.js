import style from './Header.module.css';

// ==== Importação de componentes estruturais ==== //
import { UserMenu } from '../../Structures/MenuDropdown/UserMenu/UserMenu';
import { SettingsMenu } from '../../Structures/MenuDropdown/SettingsMenu/SettingsMenu';

// ==== Hook personalizado para acesso ao state global da largura do documento ==== //
// ==== Seu provider está no index.js ==== //
import { useDevice } from '../../../../context/Device/DeviceContext';

// ==== Importação dos componentes do Material UI ==== //
import IconButton from '@material-ui/core/IconButton';
import MenuIcon from '@material-ui/icons/List';

export function Header({AsideState, setAsideState}){

    // ==== State da largura do documento ==== //
    const {DeviceWidth, setDeviceWidth} = useDevice();

    function AsideToggle(){

        setAsideState(!AsideState);

    }

    return(

        <>
            <header className = {style.header}>
                <div className = {style.container_menu_toggle} onClick = {AsideToggle}>
                    { DeviceWidth < 1000 ? (AsideState == true ? null : <IconButton aria-label="toggle" style={{color: "#222"}}><MenuIcon /></IconButton>) : <IconButton aria-label="toggle" style={{color: "#222"}}><MenuIcon /></IconButton> } 
                </div>
                <nav className = {style.nav_header}>
                    <ul className = {style.header_menu}>
                        <li><SettingsMenu /></li>
                        <li><UserMenu /></li>
                    </ul>
                </nav>
            </header>
        </>
    )
}