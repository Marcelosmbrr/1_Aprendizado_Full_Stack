import Lottie from 'react-lottie';

import nfAnimation from './not_found.json';

export function NotFoundAnimation(){

    const defaultConfig = {
        loop: true,
        autoplay: true, 
        animationData: nfAnimation
    }

    return(

        <>
            <Lottie options={defaultConfig} height={250} width={250} />
        </>
    )
}