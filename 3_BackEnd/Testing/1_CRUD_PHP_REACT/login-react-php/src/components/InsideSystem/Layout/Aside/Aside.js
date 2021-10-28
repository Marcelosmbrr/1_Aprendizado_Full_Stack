import style from './Aside.module.css';

// ==== Importação de componentes estruturais ==== //
import { AsideContent } from './AsideContent/AsideContent';

// ==== Hook personalizado para acesso ao state global da largura do documento ==== //
// ==== Seu provider está no index.js ==== //
import { useDevice } from '../../../../context/Device/DeviceContext';

export function Aside({AsideState, setAsideState}){

    // ==== State da largura do documento ==== //
    const {DeviceWidth, setDeviceWidth} = useDevice();

    return(

        <>
            <aside className = {`${AsideState ? style.aside : style.aside_hide} ${DeviceWidth < 1000 ? style.aside_fixed : null}`}>
                <AsideContent AsideState = {AsideState} setAsideState = {setAsideState} />
            </aside>
        </>
    )
}