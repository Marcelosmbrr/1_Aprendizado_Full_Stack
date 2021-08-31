import {useState} from 'react';
import './menuMobile.css';

export function MenuMobile(){

    function menuToggle(){

        let menu = window.document.querySelector(".container");
        menu.classList.toggle("menuToggle");

    }

    return(

        <div>
            <i className="fas fa-bars" onClick = {menuToggle}></i>
            <div className = "container menuToggle">
                <ul className = "menu_mobile">
                    <li><i className="fas fa-angle-double-left" onClick = {menuToggle}></i></li>
                    <li>Home</li>
                    <li>Blog</li>
                    <li>Contact</li>
                    <li>Help</li>
                </ul>
            </div>
            
        </div>
    )
}