import Lottie from 'react-lottie';

import loadingAnimation from './loading.json';

export function LoadingAnimation(){

    const defaultConfig = {
        loop: false,
        autoplay: true, 
        animationData: loadingAnimation
    }

    return(

        <>
            <Lottie options={defaultConfig} height={150} width={150} />
        </>
    )
}