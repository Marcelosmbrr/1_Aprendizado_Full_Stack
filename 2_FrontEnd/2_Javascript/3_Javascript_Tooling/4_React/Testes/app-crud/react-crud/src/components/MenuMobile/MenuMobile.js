export function MenuMobile(){

    function menuMobileClick(){

        let windowMobile = window.document.querySelector(".mobile_navbar_window");

        windowMobile.classList.toggle("hide");
    }

    return(

        <>
            <navbar className = "header_navbar">
                <div className = "header-content header_left_content">
                    <ul className = "nav_list nav-header">
                        <li onClick = {menuMobileClick}><i className="fas fa-bars"></i></li>
                    </ul>
                </div>
            </navbar> 
        </>
        
    )
}