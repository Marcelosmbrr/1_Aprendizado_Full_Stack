import style from './AsideContent.module.css';
//import logoEmbrapa from '../../../../assets/images/logo.png';

// ==== Importação dos componentes do roteamento ==== //
import { Link } from 'react-router-dom';

// ==== Importação do Hook useState ==== //
import { useState } from 'react';

// ==== Importação do Hook personalizado usePager para acesso ao state global da paginação ==== //
// ==== Seu provider está no Sistema.js ==== //
import { usePager } from '../../../../../context/Page/PageContext';

// ==== Hook personalizado para acesso ao state global da largura do documento ==== //
// ==== Seu provider está no index.js ==== //
import { useDevice } from '../../../../../context/Device/DeviceContext';

// ==== Importação dos componentes do Material UI ==== //
import IconButton from '@material-ui/core/IconButton';
import ArrowIcon from '@material-ui/icons/ReplyAll';

export function AsideContent({AsideState, setAsideState}){

    //==== Resgate do state ActualPage criado e inicializado no contexto PageContext //Por padrão ele é "Dashboard" ==== //
    const {ActualPage, setActualPage} = usePager();

    // ==== Criação do state de item selecionado no menu //Por padrão ele é 'null' (string) ==== //
    const [ItemSelected, setItemSelected] = useState('null');

    // ==== State da largura do documento ==== //
    const {DeviceWidth, setDeviceWidth} = useDevice();

    //Função para alterar os states que se relacionam com a troca da página
    function ChangePage(e){

        //Primeiro é alterado o state de item selecionado no menu
        ChangeSelectedItem(e.target);

        //Agora é alterado o state global da página atual
        if(e.target.text != ActualPage){

            setActualPage(e.target.text);

        }

    }

    //Função para alterar o estado do item selecionado no menu
    function ChangeSelectedItem(target){

        //Se o item atual for null, quer dizer que o usuário, até agora, não tinha alterado a página
        if(ItemSelected == 'null'){

            //O elemento clicado recebe a classe selected
            target.classList.add(`${style.selected}`);

            //O elemento clicado se torna o novo valor do state
            setItemSelected(target);
        
        //Se o state de item selecionado não for null, e for diferente de target
        }else if(ItemSelected != 'null' && ItemSelected != target){

            //O elemento atualmente selecionado perde a classe selected
            ItemSelected.classList.remove(`${style.selected}`);

            //O elemento clicado recebe a classe selected
            target.classList.add(`${style.selected}`);

            //O elemento clicado se torna o valor do state
            setItemSelected(target);

            console.log(target)
        }

    }

    return(

        <>
            <div className = {style.aside_center}>
                <div className = {style.aside_top}>
                    <img src = "" className = {style.logo_embrapa} alt = "logo"/>
                </div>
                <nav>
                <ul className = {style.page_menu}>
                        {DeviceWidth < 1000 && (
                            <li onClick = {() => {setAsideState(!AsideState)}} className = {style.close_button}><IconButton aria-label="close" style={{color: "#fff"}}><ArrowIcon /></IconButton></li>
                        )}
                        <li onClick = {ChangePage} className = {style.aside_menu_li}><Link to = {"/dashboard"}><i class="fas fa-tachometer-alt"></i> Dashboard</Link></li>
                        <li onClick = {ChangePage} className = {style.aside_menu_li}><Link to = {"/newplan"}><i class="fas fa-plus"></i> Novo Plano</Link></li>
                        <li onClick = {ChangePage} className = {style.aside_menu_li}><Link to = {"/mymaps"}><i class="fas fa-map"></i> Meus Mapas</Link></li>
                        <li onClick = {ChangePage} className = {style.aside_menu_li}><Link to = {"/logbook"}><i class="fas fa-clipboard-list"></i> Logbook</Link></li>
                        <li onClick = {ChangePage} className = {style.aside_menu_li}><Link to = {"/incidents"}><i class="fas fa-exclamation-triangle"></i> Incidentes</Link></li>
                    </ul>
                </nav>
            </div>
        </>
        
    )
}