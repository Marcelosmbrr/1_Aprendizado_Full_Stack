import logoImg from '../../assets/images/react-icon.png';

import Lottie from 'react-lottie';
import animatedLogo from '../../assets/lotties/react-logo.json';


export function HeaderLogo(){

    const defaultOptions = {
        loop: true,
        autoplay: true, 
        animationData: animatedLogo,
      };

    return(

        <div className = "header_logo">
            <Lottie options={defaultOptions} height={100} width={100} />
            <h1>REACT MATH</h1>
        </div>
    )
}

    
    
        