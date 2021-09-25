import style from "./Modal.module.css";

// ==== Importação dos Lotties ==== //
import {SuccessAnimation} from '../../../assets/lottie/success/success';
import {ErrorAnimation } from '../../../assets/lottie/error/error';

export function Modal({registrationStatus}){

    return(

        <>  

            <div className = {style.modal}>

                <div className = {style.modal_header}>
                    {registrationStatus ? <SuccessAnimation /> : <ErrorAnimation />}
                </div>  

                <div className = {style.modal_body}>
                <p className = {style.tittle_message}>{registrationStatus ? "Sucesso!" : "Erro!"}</p>
                <p className = {style.body_text}>{registrationStatus ? "Confira o seu email." : "Tente novamente."}</p>
                </div>

            </div>
        
        </>
    )
}

