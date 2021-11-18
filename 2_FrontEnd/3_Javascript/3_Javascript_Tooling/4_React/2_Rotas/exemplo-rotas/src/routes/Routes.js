import {Switch, Route} from 'react-router-dom'; //REACT ROUTER //O LINK ESTÁ NO ASIDE

//IMPORT PÁGINAS
import { Home } from '../pages/Home/Home';
import { Blog } from '../pages/Blog/Blog';
import { Contact } from '../pages/Contact/Contact';

export function Routes(){

    return(

        <Switch>
            <Route exact path = "/">
                <Home />
            </Route>
            <Route path = "/blog">
                <Blog />
            </Route>
            <Route path = "/contact">
                <Contact />
            </Route>
        </Switch>

    )
}