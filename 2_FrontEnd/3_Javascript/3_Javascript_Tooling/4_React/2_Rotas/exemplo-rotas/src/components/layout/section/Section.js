import './Section.css';

export function Section({pageText}){

    return(

        <>
        <section>
            <div class="alert alert-primary page-alert" role="alert">
                <h1>{pageText}</h1>
            </div>
            <div class="alert alert-primary page-alert" role="alert">
                <h1>{pageText}</h1>
            </div>
            <div class="alert alert-primary page-alert" role="alert">
                <h1>{pageText}</h1>
            </div>
            <div class="alert alert-primary page-alert" role="alert">
                <h1>{pageText}</h1>
            </div>
        </section>
        </>
    )
}