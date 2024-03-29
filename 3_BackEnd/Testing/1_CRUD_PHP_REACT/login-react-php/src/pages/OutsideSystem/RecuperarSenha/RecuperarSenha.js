import style from './RecuperarSenha.module.css';

// ==== Importação do Lottie ==== //
import {ReactLogo} from '../../../assets/lottie/react-logo/ReactLogo';
import {SuccessAnimation} from '../../../assets/lottie/success/success';
import {ErrorAnimation } from '../../../assets/lottie/error/error';
import {LoadingAnimation} from '../../../assets/lottie/loading/loading';

// ==== Importação do hook useState, e useRef ==== //
import { useState, useEffect } from 'react';

// ==== Importação do Jquery para o Ajax ==== //
import $ from 'jquery';

// ==== Importação dos componentes de do roteamento ==== //
import { Link, useHistory } from 'react-router-dom';

// ==== Importação dos componentes do Material UI ==== //
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

// ==== Importação de componentes estruturais ==== //
import { Modal } from '../../../components/OutsideSystem/modal/Modal';

const theme = createTheme();

export function RecuperarSenha() {

    // ==== States de validação dos campos e do envio do código ==== //
    const [error, setError] = useState({email: false, code: false, nova_senha: false});
    const [errorMsg, setErrorMsg] = useState({email: null, code: null, nova_senha: null});
    const [emailSent, setEmailSent] = useState(false);

    // ==== State do Modal ==== //
    const [modalState, setModalState] = useState(null);

    // ==== State da contagem regressiva para liberação do botão de enviar código ==== //
    const [clock, setClock] = useState(0);

    // ==== Hook useHistory ==== //
    const history = useHistory();

    // Esse Effect é chamado sempre que o clock mudar
    // Quando o clock recebe o valor 60, no envio do email, ele é ativado, e a condição satisfeita
    // A condição modifica o valor do clock a cada 1 segundo, o que ativa novamente o Effect
    // A renderização dessa rotina forma uma contagem regressiva 
    useEffect(() => {

        if(clock > 0){

            const countdown = clock - 1;

            setTimeout(()=>{

                setClock(countdown);

            }, 1000)
            
        }
        
    }, [clock]);

    // Tratamento do envio do primeiro formulário 
    // O primeiro formulário é onde o email é inserido pare recebimento do código
    const handleSendCode = (event) => {
        event.preventDefault();

        const data = new FormData(event.currentTarget);

        // https://www.w3resource.com/javascript/form/email-validation.php
        const emailFormat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

        // Verificação dos dados por campo //Se o valor é maior que zero, e se está no formato correto
        // True é a confirmação do erro
        const email_filter = data.get("input_email").length > 0 ? (data.get("input_email").match(emailFormat) ? false : true) : true;
        const email_filter_msg = email_filter == true ? "Email inválido!": null;

        // Se for false, não houve um erro
        if(email_filter == false){

            setError({email: false, code: false, nova_senha: false});
            setErrorMsg({email: null, code: null, nova_senha: null});

            // Aparece o modal - tipo carregamento
            ModalDisplay({operation: "LOADING"});

            const URL = "http://localhost:80/backend-react-app/index.php";

            const ajaxData = {
                sendEmail: data.get("input_email")
            }

            $.ajax({

            url: URL,
            method: 'POST',
            data: ajaxData,
            dataType: 'json', //Tratamento da resposta
            beforeSend: function(){ console.log("PROCESSANDO ENVIO DO CÓDIGO PARA O EMAIL"); } //Antes de enviar..

            }).done(function(response){

                    // Esconde o modal
                setModalState(null);

                if(response.status){

                    setEmailSent(true);

                }else if(!response.status){

                    console.log(response.message);

                }

            });        

        }else{ //Nesse caso houve um erro

            setError({email: true, code: false, nova_senha: false});
            setErrorMsg({email: email_filter_msg, code: null, nova_senha: null});

        }

    }

    // Tratamento do evento de envio do segundo formulário
    // O segundo formulário é onde a senha e código são inseridos e enviados
    const handleChangePassword = (event) => {
        event.preventDefault();

        if(emailSent){

            const data = new FormData(event.currentTarget);

            if(FormValidate(data)){

                const URL = "http://localhost:80/backend-react-app/index.php";

                const ajaxData = {
                    changePassword: {
                        new_password: data.get("input_nova_senha"),
                        code: data.get("input_code")
                    }
                }

                $.ajax({

                    url: URL,
                    method: 'POST',
                    data: ajaxData,
                    dataType: 'json', //Tratamento da resposta
                    beforeSend: function(){ console.log("PROCESSANDO CÓDIGO E NOVA SENHA"); } //Antes de enviar..
    
                }).done(function(response){

                    if(response.status){

                        ModalDisplay({operation: "UPDATE_PASSWORD", status: true});

                    }else if(!response.status){

                        ModalDisplay({operation: "UPDATE_PASSWORD", status: false});

                    }

                });
    
            }

        }

    };

    // Validação do segundo formulário
    // Validação do código e da senha inseridos
    function FormValidate(data){

        //https://www.w3resource.com/javascript/form/password-validation.php
        //https://stackoverflow.com/questions/49031751/javascript-regular-expression-to-match-a-number-long-5-digits
        const codeFormat = /[0-9]{4}/;
        const passFormat = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;

        const code_filter = data.get("input_code").length > 0 ? (data.get("input_code").match(codeFormat) ? false : true) : true;
        const senha_filter = data.get("input_nova_senha").length > 0 ? (data.get("input_nova_senha").match(passFormat) ? false : true) : true;

        const senha_filter_msg = senha_filter == true ? "Deve ter entre 6 e 20 caracteres, pelo menos uma letra maiúscula, uma minúscula e um número!": null;
        const code_filter_msg = code_filter == true ? "Código inválido!" : null;

        //Alteração dos estados de erro, se houverem erros
        setError({email: false, code: code_filter, nova_senha: senha_filter});

        //Alteração dos estados de mensagem de erro, se houverem erros com e-mail e/ou senha
        setErrorMsg({email: null, code: code_filter_msg, nova_senha: senha_filter_msg});

        // True = presença de erro
        if(code_filter == true || senha_filter == true){

            return false;
        
        // False = ausência de erro
        }else if(code_filter == false && senha_filter == false){

            return true;

        }

    }

    function ModalDisplay(data){

        // Configuração do modal
        if(data.operation == "LOADING"){

            data.tittle = null;
            data.text = "Enviando e-mail...";
            data.animation = <LoadingAnimation />

        }else{

            if(data.status){

                data.tittle = "Sucesso!";
                data.text = "Senha alterada com sucesso!";
                data.animation = <SuccessAnimation />
    
            }else{
    
                data.tittle = "Erro!";
                data.text = "Falha na alteração da senha!";
                data.animation = <ErrorAnimation />
    
            }

        }

        // Display do modal configurado
        setModalState(data);

        // Passados 3 segundos, o modal desaparece
        setTimeout(() => {

            setModalState(null);
        
            if(data.status){
        
                history.push("/");
                
            }
        
        }, 3000);

    }
    
  return (

    <div className = {style.recuperar_page}>

        <ThemeProvider theme={theme}>

            {/* Display Modal */}
            {modalState == null ? null : <Modal data = {modalState} /> }

            <Container component="main" maxWidth="xs">
                
                <CssBaseline />

                <Box sx={{ marginTop: 8, display: 'flex', flexDirection: 'column', alignItems: 'center',  }}  >
                
                    <Avatar sx={{ m: 1, bgcolor: 'secondary.main' }}>
                        <ReactLogo />
                    </Avatar>

                    <Typography component="h1" variant="h5">
                        Recuperação de senha
                    </Typography>

                    <Box component="form" noValidate sx={{ mt: 3 }} onSubmit = {handleSendCode}>
                        <Grid container spacing={2}>

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

                        </Grid>

                        <Button type="submit" fullWidth variant="contained" sx={{ mt: 3, mb: 2 }} disabled = {emailSent ? (clock > 0 ? true: false): false}>
                        {clock == 0 ? "Receber código" : clock}
                        </Button>
                    </Box>

                    <Box component="form" noValidate sx={{ mt: 3 }} onSubmit = {handleChangePassword}>
                        <Grid container spacing={2}>

                            <Grid item xs={12}>
                                <TextField
                                    error = {error.code}
                                    helperText={errorMsg.code == null ? '': errorMsg.code}
                                    required
                                    fullWidth
                                    name="input_code"
                                    label="Código"
                                    type="text"
                                    id="input_code"
                                    disabled = {emailSent ? false : true}
                                />
                            </Grid>

                            <Grid item xs={12}>
                                <TextField
                                    error = {error.nova_senha}
                                    helperText={errorMsg.nova_senha == null ? '': errorMsg.nova_senha}
                                    required
                                    fullWidth
                                    name="input_nova_senha"
                                    label="Nova senha"
                                    type="password"
                                    id="input_nova_senha"
                                    disabled = {emailSent ? false : true}
                                />
                            </Grid>

                            </Grid>

                            <Button type="submit" fullWidth variant="contained" sx={{ mt: 3, mb: 2 }}  disabled = {emailSent ? false : true} >
                            Alterar senha
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


    </div>


  );
}