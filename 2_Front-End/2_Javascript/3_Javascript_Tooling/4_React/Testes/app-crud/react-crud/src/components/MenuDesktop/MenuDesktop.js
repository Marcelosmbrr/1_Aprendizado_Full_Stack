export function MenuDesktop(){

    return(

        <>
            <navbar className = "header_navbar">
                <div className = "header-content header_left_content">
                    <ul className = "nav_list nav-header">
                        <li><i className="fas fa-home"></i></li>
                        <li><i class="fas fa-envelope"></i></li>
                    </ul>
                </div>
                <div className = "header-content header_right_content">
                    <ul className = "nav_list nav-header">
                        <li><i className="far fa-question-circle"></i></li>
                        <li><i className="fas fa-newspaper"></i></li>
                        <li><i className="fas fa-cog"></i></li>
                        <li><i className="fas fa-user"></i></li>
                    </ul>
                </div>
            </navbar> 
        </>
        
    )
}