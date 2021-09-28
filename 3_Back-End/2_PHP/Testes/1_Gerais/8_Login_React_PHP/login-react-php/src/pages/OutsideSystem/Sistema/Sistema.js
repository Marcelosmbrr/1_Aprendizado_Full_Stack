import style from './Sistema.module.css';

// ==== Importação hooks nativos ==== //
import { useState} from 'react';

// ==== Importação do Jquery para o Ajax ==== //
import Jquery from 'jquery';

// ==== Importação do provider do contexto Page - de paginação ==== //
import { PageProvider } from '../../../context/Page/PageContext';

// ==== Importação do hook do Context de usuário autenticado ==== //
// Os dados decodificados do token serão armazenados no contexto //
import { useAuthentication } from '../../../context/Auth/UserAuthContext';

// ==== Importação do hook personalizado do contexto Device ==== //
import { useDevice } from '../../../context/Device/DeviceContext';

// ==== Importação do Hook useHistory da lib de roteamento ==== //
import { useHistory } from 'react-router';

// ==== Importação de componentes estruturais ==== //
import { Aside } from '../../../components/InsideSystem/Layout/Aside/Aside';
import { ContentSide } from '../../../components/InsideSystem/Layout/ContentSide/ContentSide';

export function Sistema() {

  // ==== State do Context UserAuthenticated ==== //
  const {AuthData, setAuthData} = useAuthentication();

  // ==== State do menu aside ==== //
  const [AsideState, setAsideState] = useState(true);

  // ==== State da largura do documento ==== //
  const {DeviceWidth, setDeviceWidth} = useDevice();

  // === Para impedir o loop do decode ==== //
  const [decoded, setDecoded] = useState(false);

  // ==== Listener para atualização do state da largura do documento ==== //
  window.addEventListener("resize", () => {

    setDeviceWidth(document.body.clientWidth);

  });

  // ==== Hook useHistory ==== //
  const history = useHistory();

  // Sempre que o sistema carregar, o token será decodificado no servidor, e seus dados retornados 
  // Os dados retornados serão armazenados no Context para serem utilizados nos componentes do sistema 

  function DecodeToken(){

    if(!decoded){

      const storedTokenData = {token: localStorage.getItem("user-token")}

      const URL = "http://localhost:80/backend-react-app/index.php";

      const ajaxData = {
        tokenDecode: {
          value: localStorage.getItem("user-token")
        } 
      }

      Jquery.ajax({

        url: URL,
        method: 'POST',
        data: ajaxData,
        dataType: 'json', //Tratamento da resposta
        beforeSend: function(){ console.log("RESGATANDO DADOS DO USUÁRIO AUTENTICADO"); } //Antes de enviar..

      }).done((response) => {

        if(response.status){

          // Armazenamento dos dados do token no Contexto
          FillingUserContext(response.data);

          setDecoded(true);

        }else{

          // Redirecionamento do usuário para a página de login
          RedirectToLogin();
          
        }
        
      }).fail(function(jqXHR,textStatus,errorThrown){

        //console.log( "Request failed: " + textStatus );

        // Redirecionamento do usuário para a página de login
        RedirectToLogin();

      })

    }else{

      console.log("Já foi decodificado");

    }  

  }
 
  // Persistência dos dados do usuário logado no contexto "UserAuthContext"
  // Para resgatar os dados do usuário nos componentes em que forem necessários
  function FillingUserContext(data){

    setAuthData({full_name: data.full_name, email: data.email, username: data.username});

  }

  // Redirecionar o usuário para o login
  // Caso de erro na decodificação do token
  function RedirectToLogin(){

    localStorage.removeItem('user-token');
    history.push("/");

  }

  const t = false;

  return (

    <div className={style.sistema_interface} onLoad = {DecodeToken}>

      <PageProvider>
        <Aside AsideState = {AsideState} setAsideState = {setAsideState}/>
        <ContentSide AsideState = {AsideState} setAsideState = {setAsideState}/>
      </PageProvider>
            
    </div>
  );
}

