import Lottie from 'react-lottie';
import birdAnimation from '../../../assets/lotties/bird-animation.json';
import './MainAside.css';

export function MainAside({selected, window}){

    const defaultOptions = {
        loop: true,
        autoplay: true, 
        animationData: birdAnimation,
      };

    return(

        <>
            <div className = "main_aside">
                <div className = "ma_record_edition">
                    <ul className = "edition_box_tools">
                        <div className = "eb_item-button">
                            <li><i class="fas fa-plus-circle"></i></li>
                        </div>
                        <div className = "eb_item-button">
                            <li><i className="fas fa-edit"></i></li>
                        </div>
                        <div className = "eb_item-button">
                            <li><i className="fas fa-trash-alt"></i></li>
                        </div>
                    </ul>
                </div>
                <div className = "ma_last_editions">
                    <h2 className = "main_aside_tittle">Last Activities</h2>
                    <Lottie options={defaultOptions} width = {200} heigth = {200} />
                </div>
            </div>
        </>
    )
}