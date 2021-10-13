import style from "./Modal.module.css";

// ==== UseState ==== //
import { useState, useEffect } from "react";

export function Modal({data}){

    return(

        <>  

            <div className = {style.modal}>

                <div className = {style.modal_header}>
                    {data.animation}
                </div>  

                <div>
                    <p className = {style.tittle_message}>{data.tittle}</p>
                    <p className = {style.body_text}>{data.text}</p>
                </div> 
                
            </div>
        
        </>
    )
}

