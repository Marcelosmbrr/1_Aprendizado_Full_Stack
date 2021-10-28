import './MenuMobileWindow.css';

export function MenuMobileWindow(){

    return(

        <>
            <nav className = "mobile_navbar_window hide">
                <ul className = "nav_list">
                    <li><i className="fas fa-home"></i></li>
                    <li><i class="fas fa-envelope"></i></li>
                    <li><i className="far fa-question-circle"></i></li>
                    <li><i className="fas fa-newspaper"></i></li>
                    <li><i className="fas fa-cog"></i></li>
                    <li><i className="fas fa-user"></i></li>
                </ul>
            </nav>
        </>
    )
}