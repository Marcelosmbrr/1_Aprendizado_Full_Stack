import Lottie from 'react-lottie';

import successAnimation from './success.json';

export function SuccessAnimation(){

    const defaultConfig = {
        loop: false,
        autoplay: true, 
        animationData: successAnimation
    }

    return(

        <>
            <Lottie options={defaultConfig} height={150} width={150} />
        </>
    )
}