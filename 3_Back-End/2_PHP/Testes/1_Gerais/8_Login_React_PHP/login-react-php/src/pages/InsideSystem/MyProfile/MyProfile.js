import style from './MyProfile.module.css';

// ==== Importação do componente de Link do roteamento, da lib de roteamento ==== //
import { Link } from 'react-router-dom';

// ==== Importação do hook do Context de usuário autenticado ==== //
import { useAuthentication } from '../../../context/Auth/UserAuthContext';

export function MyProfile(){

    const {AuthData, setAuthData} = useAuthentication();

    return(

        <>
            <p>Nome: {AuthData.full_name} || Email: {AuthData.email} || Username: {AuthData.username}</p>
            <p><Link to = "/sistema/dashboard">Voltar para a dashboard</Link></p>

        </>
    )
}