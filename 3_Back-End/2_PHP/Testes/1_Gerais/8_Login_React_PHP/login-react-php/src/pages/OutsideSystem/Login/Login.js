import style from './Login.module.css';

// ==== Importação do Jquery para o Ajax ==== //
import Jquery from 'jquery';

// ==== Importação do hook useState ==== //
import { useState } from 'react';

// ==== Importação do componente de Link do roteamento, da lib de roteamento ==== //
import { Link } from 'react-router-dom';

// ==== Importação do Hook useHistory da lib de roteamento ==== //
import { useHistory } from 'react-router';

// ==== Importação do Lottie ==== //
import {ReactLogo} from '../../../assets/lottie/react-logo/ReactLogo';

// ==== Importação dos componentes do Material UI ==== //
import Avatar from '@material-ui/core/Avatar';
import Button from '@material-ui/core/Button';
import CssBaseline from '@material-ui/core/CssBaseline';
import TextField from '@material-ui/core/TextField';
import FormControlLabel from '@material-ui/core/FormControlLabel';
import Checkbox from '@material-ui/core/Checkbox';
import Paper from '@material-ui/core/Paper';
import Box from '@material-ui/core/Box';
import Grid from '@material-ui/core/Grid';
import { createTheme, ThemeProvider } from '@material-ui/core/styles';

const theme = createTheme();

export function Login() {

  // ==== States de validação dos campos ==== //
  const [error, setError] = useState({email: false, senha: false});
  const [errorMsg, setErrorMsg] = useState({email: null, senha: null});

  // ==== Hook useHistory ==== //
  const history = useHistory();

  const handleSubmit = (event) => {
    event.preventDefault();

    //Data é uma instância da classe FormData //https://developer.mozilla.org/pt-BR/docs/Web/API/FormData/FormData
    const data = new FormData(event.currentTarget);

    if(FormValidate(data)){

      //Comunicação com o Back-End - processar o login
      //Se o retorno do back-end não for false
        //Dados do usuário serão retornados
        //Validar o usuário e redirecionar para a página do sistema

        const URL = "http://localhost:80/backend-react-app/index.php";

        const ajaxData = {
          loginData: {
            email: data.get("input_email"),
            password: data.get("input_senha")
          }   
        }

        Jquery.ajax({

          url: URL,
          method: 'POST',
          data: ajaxData,
          dataType: 'json', //Tratamento da resposta
          beforeSend: function(){ console.log("PROCESSANDO LOGIN"); } //Antes de enviar..

        }).done((response) => {

          // A resposta, no caso de um acesso autorizado, será um objeto com token JWT
          //Sobre o Token JWT: https://jwt.io/ // https://www.horadecodar.com.br/2021/09/13/o-que-e-jwt-como-utilizar-json-web-tokens/ 
          // Se o login falhar, a resposta será false
          if(response.status){

            // Redirecionamento para a página do sistema
            // Armazenamento do token JWT no local storage
            RedirectToSystem(response.data);

          }else{

            setError({email: true, senha: false});
            setErrorMsg({email: "Email ou senha incorretos!", senha: null});

          }
          
        }).fail(function(jqXHR,textStatus,errorThrown){

          console.log( "Request failed: " + textStatus );

        })

      }

    }

  function FormValidate(data){

    //https://www.w3resource.com/javascript/form/email-validation.php
    //https://www.w3resource.com/javascript/form/password-validation.php
    const emailFormat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    //Verificação dos dados por campo
    //True é a confirmação do erro
    if(data.get('input_email').length > 0){

      if(data.get('input_senha').length > 0){

        if(data.get('input_email').match(emailFormat)){

          //Confirmação do login
          return true;
    
        }else{
    
          setError({email: true, senha: false});
          setErrorMsg({email: "Email inválido!", senha: null});
          return false;
    
        }

      }else{

          setError({email: false, senha: true});
          setErrorMsg({email: null, senha: "Este campo deve ser preenchido!"});
          return false;

      }

    }else{

        setError({email: true, senha: false});
        setErrorMsg({email: "Este campo deve ser preenchido!", senha: null});
        return false;

    }

  }

  // Redireciona o usuário para o sistema
  // Armazena o token JWT no local storage
  function RedirectToSystem(data){

    localStorage.removeItem('user-token');
    localStorage.setItem('user-token', JSON.stringify(data));

    history.push("/sistema");

  }

  return (

    <div className = {style.login_page}>
      { /* Formulário de login */ }
      { /* Eventos programados: alertas de erro nos inputs/campos */}

      <ThemeProvider theme={theme}>

        <CssBaseline />

          <Grid container component="main" sx={{ height: '100vh' }}>

              {/* Lado esquerdo */}
            <Grid item xs={false} sm={4}  md={7} className = {`background ${style.left_side}`} >

            </Grid>
            
            {/* Lado direito */}
            <Grid item xs={12} sm={8} md={5} component={Paper} elevation={6} square>

              <Box
                sx={{
                  my: 8,
                  mx: 4,
                  display: 'flex',
                  flexDirection: 'column',
                  alignItems: 'center',
                }}
              >
                <Avatar sx={{ m: 1, bgcolor: 'secondary.main' }}>
                  <ReactLogo />
                </Avatar>

                <h1>
                  Acesso ao sistema
                </h1>

                <Box component="form" noValidate onSubmit={handleSubmit} sx={{ mt: 1 }}>
                  <TextField
                    error = {error.email}
                    helperText={errorMsg.email == null ? '': errorMsg.email}
                    margin="normal"
                    required
                    fullWidth
                    id="input_email"
                    label="Digite o seu e-mail"
                    name="input_email"
                    autoFocus
                  />

                  <TextField
                    error = {error.senha}
                    helperText={errorMsg.senha == null ? '': errorMsg.senha}
                    margin="normal"
                    required
                    fullWidth
                    name="input_senha"
                    label="Digite a sua senha"
                    type="password"
                    id="input_senha"
                  />

                  <FormControlLabel
                    control={<Checkbox value="remember" color="primary" />}
                    label="Lembrar"
                  />

                  <Button
                    type="submit"
                    fullWidth
                    variant="contained"
                    sx={{ mt: 3, mb: 2 }}
                  >
                    Acessar
                  </Button>

                  <Grid container>
                    <Grid item xs>
                      <Link variant="body2" to = "/recuperarsenha">
                        Esqueceu a sua senha?
                      </Link>
                    </Grid>

                    <Grid item>
                      <Link variant="body2" to = "/registrar">
                        Não é membro?
                      </Link>
                    </Grid>

                  </Grid>

                </Box>
              </Box>
            </Grid>
          </Grid>

        </ThemeProvider>

    </div>
    
  )

}

