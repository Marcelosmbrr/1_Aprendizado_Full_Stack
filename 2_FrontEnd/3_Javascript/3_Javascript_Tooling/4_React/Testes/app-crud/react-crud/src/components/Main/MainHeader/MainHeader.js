import './MainHeader.css';

export function MainHeader({window}){

    return(

        <>
            <div className = "main_header">
                <div className = "mh_left_content">
                    <select className = "datatype_select">
                        <option selected>Datatype</option>
                        <option>Clientes</option>
                        <option>Produtos</option>
                        <option>Vendas</option>
                    </select>
                    <select className = "offset_select">
                        <option selected>Offset</option>
                        <option>Unlimited</option>
                        <option>10</option>
                        <option>20</option>
                        <option>30</option>
                    </select>
                    {window >= 900 ? '' : <div className = "edition_tools_mobile"><i class="fas fa-plus-circle"></i> <i className="fas fa-edit"></i> <i className="fas fa-trash-alt"></i></div>}   
                </div>
                <div className = "mh_right_content">
                    <input type = "text" placeholder = "Type your search" />
                </div>
            </div>
        </>
    )
}