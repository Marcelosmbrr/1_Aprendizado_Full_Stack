import Lottie from 'react-lottie';

import animatedLogo from './react_logo.json';

export function ReactLogo(){

    const defaultConfig = {
        loop: true,
        autoplay: true, 
        animationData: animatedLogo
    }

    return(

        <>
            <Lottie options={defaultConfig} height={40} width={40} />
        </>
    )
}