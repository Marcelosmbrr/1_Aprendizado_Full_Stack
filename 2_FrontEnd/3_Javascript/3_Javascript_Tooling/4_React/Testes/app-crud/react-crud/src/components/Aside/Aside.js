import './Aside.css';
import Lottie from 'react-lottie';
import reactLogo from '../../assets/lotties/react-logo.json';

export function Aside({window}){

    const defaultOptions = {
        loop: true,
        autoplay: true, 
        animationData: reactLogo,
      };

    return(

        <>
            <aside>
                <navbar className = "aside_navbar">
                    <ul className = "nav_list nav-aside">
                        <li><Lottie options={defaultOptions} /></li>
                        <li><i className="fas fa-database"></i></li>
                        <li><i className="fas fa-code-branch"></i></li>
                        <li><i className="far fa-chart-bar"></i></li>
                        <li><i className="fas fa-hourglass-start"></i></li>
                    </ul>
                    <div className = "aside-content">
                    
                    </div>
                </navbar>  
            </aside>
        </>
    )
}