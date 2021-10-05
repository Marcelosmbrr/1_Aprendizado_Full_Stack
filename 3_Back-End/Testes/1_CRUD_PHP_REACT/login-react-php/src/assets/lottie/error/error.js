import Lottie from 'react-lottie';

import errorAnimation from './error.json';

export function ErrorAnimation(){

    const defaultConfig = {
        loop: false,
        autoplay: true, 
        animationData: errorAnimation
    }

    return(

        <>
            <Lottie options={defaultConfig} height={150} width={150} />
        </>
    )
}