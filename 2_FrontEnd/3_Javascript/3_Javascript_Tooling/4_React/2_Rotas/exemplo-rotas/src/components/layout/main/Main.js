import { Header } from "../header/Header";
import { Section } from '../section/Section';
import { Footer } from '../footer/Footer';

export function Main({pageText}){

    return(

        <>
        <main>
            <Header />
            <Section pageText = {pageText} />
            <Footer />
        </main>
            
        </>
    )
}