import indexStyle from '../index.module.css';
import style from './MyProfile.module.css';

import { useEffect } from 'react';

// ==== Importação do componente de Link do roteamento, da lib de roteamento ==== //
import { Link } from 'react-router-dom';

// ==== Importação do hook do Context de usuário autenticado ==== //
import { useAuthentication } from '../../../context/Auth/UserAuthContext';

// ==== Importação do Hook personalizado usePager para acesso ao state global da paginação ==== //
// ==== Seu provider está no App.js ==== //
import { usePager } from '../../../context/Page/PageContext';

export function MyProfile(){

    // ==== Hook do Context do usuário autenticado ==== //
    // Neste ponto, o Context possui os dados do token JWT decodificado
    const {AuthData, setAuthData} = useAuthentication();

    // ==== Hook do contexto da página selecionada ==== //
    const {ActualPage, setActualPage} = usePager();

    console.log(AuthData)

    useEffect(() => {

        setActualPage("Meus dados");

    })

    return(

        <>

            <div className = {indexStyle.main_top}>
                <h2>{ActualPage}</h2>
            </div>

            <div className = {style.page_content}>

                <div className = {style.card}>
                    
                    <ul className = {style.data_list}>
                        <li><b>DADOS TOKEN JWT</b></li>
                        <li><b>Nome:</b> {AuthData.full_name}</li>
                        <li><b>Email:</b> {AuthData.email}</li>
                        <li><b>Username:</b> {AuthData.username}</li>
                        <li><b>Browser:</b> {AuthData.browser}</li>
                        <li><b>Localização:</b> -------</li>
                        <li><Link to = "/sistema">Voltar para a dashboard</Link></li>
                    </ul>

                    

                </div>

            </div>

        </>
            
       
    )
}