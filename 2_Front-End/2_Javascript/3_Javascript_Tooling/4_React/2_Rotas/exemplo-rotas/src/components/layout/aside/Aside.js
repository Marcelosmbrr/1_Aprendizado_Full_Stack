import {Link} from 'react-router-dom';
import Lottie from 'react-lottie';

import asideStyle from './Aside.module.css';
import animatedLogo from '../../../assets/lotties/logo.json';

export function Aside(){

    
    const defaultOptions = {
        loop: true,
        autoplay: true, 
        animationData: animatedLogo,
    };

    return(

        <>
            <aside>
                <ul className = {asideStyle.page_navigation}>
                    <li><Lottie options = {defaultOptions} width = {80} height = {80}/></li>
                    <li className = {asideStyle.pn_item}><Link to = "/"> Home </Link></li>
                    <li className = {asideStyle.pn_item}><Link to = "/blog"> Blog </Link></li>
                    <li className = {asideStyle.pn_item}><Link to = "/contact"> Contact </Link></li>
                </ul>
            </aside>
        </>
    )
}