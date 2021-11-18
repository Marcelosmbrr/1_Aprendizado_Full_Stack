import './Header.css';

export function Header(){

    function menuToggle(event){

       let aside = window.document.querySelector("aside");

       aside.classList.toggle("hide");

    }

    return(

        <>
        <header>
            <div className = "menu_toggle" onClick = {menuToggle}>
                <i className="fas fa-bars"></i>
            </div>
        </header>
        </>
    )
}