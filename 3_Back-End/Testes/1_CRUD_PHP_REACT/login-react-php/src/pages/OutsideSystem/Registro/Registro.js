import style from './Registro.module.css';

// ==== Importação de componentes estruturais ==== //
import { Modal } from '../../../components/OutsideSystem/modal/Modal';

// ==== Importação do Jquery para o Ajax ==== //
import Jquery from 'jquery';

// ==== Importação do hook useState ==== //
import { useState } from 'react';

// ==== Importação do componente de Link do roteamento ==== //
import { Link } from 'react-router-dom';

// ==== Importação do Hook useHistory da lib de roteamento ==== //
import { useHistory } from 'react-router';

// ==== Importação dos Lotties ==== //
import {ReactLogo} from '../../../assets/lottie/react-logo/ReactLogo';

import * as React from 'react';
import Avatar from '@material-ui/core/Avatar';
import Button from '@material-ui/core/Button';
import CssBaseline from '@material-ui/core/CssBaseline';
import TextField from '@material-ui/core/TextField';
import Grid from '@material-ui/core/Grid';
import Box from '@material-ui/core/Box';
import Typography from '@material-ui/core/Typography';
import Container from '@material-ui/core/Container';
import { createTheme, ThemeProvider } from '@material-ui/core/styles';

const theme = createTheme();

export function Registro() {

  // ==== States de validação dos campos ==== //
  const [error, setError] = useState({nome: false, unome: false, email: false, senha: false});
  const [errorMsg, setErrorMsg] = useState({email: null, senha: null});
  
  // ==== State conclusão do registro ==== //
  const [registrationStatus, setRegistrationStatus] = useState(null);

  // ==== Hook useHistory ==== //
  const history = useHistory();

  const handleSubmit = (event) => {
    event.preventDefault();
    
    const data = new FormData(event.currentTarget);

    if(FormValidate(data)){

      //Comunicação com o Back-End - processar o registro
      //Se o retorno do back-end for true
        //Enviar o código/link de confirmação para o email do novo usuário
          //O link direcionará o usuário para o login do sistema

          const URL = "http://localhost:80/backend-react-app/index.php";

          const ajaxData = {
            registerUserData: {
              name: data.get('input_primeiro_nome'),
              last_name: data.get('input_ultimo_nome'),
              email: data.get('input_email'),
              password: data.get('input_senha')
            } 
          }

          Jquery.ajax({

            url: URL,
            method: 'POST',
            data: ajaxData,
            dataType: 'json', //Tratamento da resposta
            beforeSend: function(){ console.log("PROCESSANDO REGISTRO"); } //Antes de enviar..

          }).done(function(response){

              // Tratamento da resposta do servidor
              ServerResponseTreatment({status: response.status, error: response.error, message: response.message});
      
          }).fail(function(jqXHR,textStatus,errorThrown){

            // Tratamento da resposta do servidor
            ServerResponseTreatment(false);
  
          })

    }

  };

  function FormValidate(data){

    //https://www.w3resource.com/javascript/form/email-validation.php
    //https://www.w3resource.com/javascript/form/password-validation.php
    //https://www.w3resource.com/javascript/form/all-letters-field.php
    //https://stackoverflow.com/questions/15805555/java-regex-to-validate-full-name-allow-only-spaces-and-letters
    const firstNameFormat = /^[A-Za-z]+$/;
    const lastNameFormat = /^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$/;
    const emailFormat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    // Verificação dos dados por campo //Se o valor é maior que zero, e se está no formato correto
    // True é a confirmação do erro
    const pnome_filter = data.get('input_primeiro_nome').length > 0 ? (data.get('input_primeiro_nome').match(firstNameFormat) ? false : true) : true;
    const unome_filter = data.get('input_ultimo_nome').length > 0 ? (data.get('input_ultimo_nome').match(lastNameFormat) ? false : true) : true;
    const email_filter = data.get('input_email').length > 0 ? (data.get('input_email').match(emailFormat) ? false : true) : true;
    const senha_filter = data.get('input_senha').length > 0 ? (data.get('input_senha').length >= 5 ? false : true) : true;

    // Definição da mensagem de erro do campo, se houver um erro
    const email_filter_msg = email_filter == true ? "Email inválido!": null;
    const senha_filter_msg = senha_filter == true ? "A senha deve ter pelo menos cinco caracteres!": null;

    // Alteração dos estados de erro, se houverem erros
    setError({nome: pnome_filter, unome: unome_filter, email: email_filter, senha: senha_filter});

    // Alteração dos estados de mensagem de erro, se houverem erros com e-mail e/ou senha
    setErrorMsg({email: email_filter_msg, senha: senha_filter_msg});

    if(pnome_filter == true || unome_filter == true || email_filter == true || senha_filter == true){

      return false;

    }else{

      return true;

    }

  }

  // Tratamento da resposta do servidor quanto a tentativa de registro
  function ServerResponseTreatment(data){

    // Modal de sucesso ou erro
    setRegistrationStatus(data.status);

    // No caso de erro, tratamento da especifidade dele, se houver
    if(!data.status){

      // Erro do tipo campo - campo do email
      if(data.error == "email_field"){

        setError({nome: false, unome: false, email: true, senha: false});
        setErrorMsg({email: data.message, senha: null});

      }

    }

    // Passados 3 segundos, o modal desaparece
    setTimeout(() => {
      setRegistrationStatus(null);

      if(data.status){

        history.push("/");
        
      }

    }, 3000);

  }

  
  return (

    <ThemeProvider theme={theme}>
        { /* Formulário de registro */ }
        { /* Eventos programados: renderização do modal informativo, alertas de erro nos inputs/campos */}

      <Container component="main" maxWidth="xs">
        <CssBaseline />
        <Box
          sx={{
            marginTop: 8,
            display: 'flex',
            flexDirection: 'column',
            alignItems: 'center',
          }}
        >
          <Avatar sx={{ m: 1, bgcolor: 'secondary.main' }}>
            <ReactLogo />
          </Avatar>
          <Typography component="h1" variant="h5">
            Formulário de registro
          </Typography>
          <Box component="form" noValidate onSubmit={handleSubmit} sx={{ mt: 3 }}>

            {/* Display do modal da conclusão do registro */}
            {registrationStatus != null ? <Modal registrationStatus = {registrationStatus} /> : "" }

            <Grid container spacing={2}>

              <Grid item xs={12} sm={6}>

                <TextField
                  error = {error.nome}
                  autoComplete="fname"
                  name="input_primeiro_nome"
                  required
                  fullWidth
                  id="input_primeiro_nome"
                  label="Primeiro nome"
                  autoFocus
                />
              </Grid>

              <Grid item xs={12} sm={6}>
                <TextField
                  error = {error.unome}
                  required
                  fullWidth
                  id="input_ultimo_nome"
                  label="Último nome"
                  name="input_ultimo_nome"
                />
              </Grid>

              <Grid item xs={12}>
                <TextField
                  error = {error.email}
                  helperText={errorMsg.email == null ? '': errorMsg.email}
                  required
                  fullWidth
                  id="input_email"
                  label="Endereço de e-mail"
                  name="input_email"
                />
              </Grid>

              <Grid item xs={12}>
                <TextField
                  error = {error.senha}
                  helperText={errorMsg.senha == null ? '': errorMsg.senha}
                  required
                  fullWidth
                  name="input_senha"
                  label="Senha"
                  type="password"
                  id="input_senha"
                />
              </Grid>

            </Grid>

            <Button
              type="submit"
              fullWidth
              variant="contained"
              sx={{ mt: 3, mb: 2 }}
            >
              Registrar
            </Button>

            <Grid container justifyContent="flex-end">
              <Grid item>
                <Link variant="body2" to = "/">
                  Já tem uma conta? Logue-se!
                </Link>
              </Grid>
            </Grid>

          </Box>
        </Box>
      </Container>
    </ThemeProvider>

    
  );
}